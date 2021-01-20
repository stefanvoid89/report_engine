<?php

namespace App\Data\common;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class CarInvoiceKm implements DataInterface
{
    public  function getData($params, $connection)
    {

        $date_from          =   $params['date_from'] ?? date("Y-m-d", strtotime("first day of previous month"));
        $date_to            =   $params['date_to'] ?? date("Y-m-d", strtotime("last day of previous month"));
        $brand              =   $params['brand']  ??  null;
        $model              =   $params['model'] ??  null;
        $car_type           =   $params['car_type'] ??  null;
        $car_id             =   $params['car_id'] ?? null;
        $contract           =   $params['contract'] ??  null;

        $invoice            =   $params['invoice'] ??  null;
        $invoice_type       =   $params['invoice_type'] ??  null;
        $subject_type       =   $params['subject_type'] ??  null;
        $subject_id         =   $params['subject_id'] ?? null;


        $contract_type        =   $params['contract_type'] ?? null;
        $contract_status    =   $params['contract_status'] ?? null;
        $invoice_rec        =   $params['invoice_rec'] ?? null;
        $invoice_rec_doc    =   $params['invoice_rec_doc'] ?? null;
        $invoice_rec_type  =   $params['invoice_rec_type'] ?? null;


        $brand = $brand == 0 ? null : $brand;
        $model = $model == 0 ? null : $model;
        $car_type = $car_type == 0 ? null : $car_type;
        $contract = $contract == "" ? null : $contract;

        $contract_type = $contract_type == 0 ? null : $contract_type;
        $contract_status = $contract_status == 0 ? null : $contract_status;
        $subject_type = $subject_type == 0 ? null : $subject_type;


        $title = "Pregled fakturisanog po vozilu i ugovoru sa km";

        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $contracts = collect(DB::connection($connection)->select(
            "SELECT reg_br,ugovor, vozilo, datum_od, datum_do, km_od, km_do,cast(km as decimal(19,2)) as km
        ,cast(minuti * vrednost_eur_koef as decimal(19,2)) as vrednost_eur ,cast(minuti * vrednost_rsd_koef as decimal(19,2)) as vrednost_rsd 
        from(
        select anReservationId, ugovor, reg_br, vozilo
        ,convert(varchar(20),adDateFrom,104)+' '+convert(varchar(8),convert(time,adDateFrom,108)) as datum_od
        ,convert(varchar(20),adDateTo,104)+' '+convert(varchar(8),convert(time,adDateTo,108)) as datum_do
        ,km_od, km_do
        ,case when km_do = 0 then 0 else 
        case when DATEDIFF(DAY,adDateFrom ,addateto) > datediff(day, :date_from1,:date_to1) 
        then  cast(cast((datediff(day, :date_from2,:date_to2) + 1) as decimal(10,4))/ cast((DATEDIFF(DAY,adDateFrom ,addateto)+ 1) as decimal(10,4))as decimal(10,2))  
        * (km_do - km_od)
        else (km_do - km_od)
        end end as km
        ,DATEDIFF(MINUTE,adDateFrom,adDateTo) as minuti
        ,adDateFrom
        from (select r.anId as anReservationId, r.acKey as ugovor, c.acRegNo as reg_br, c.acCarName as vozilo
        ,r.adDateFrom, r.adDateTo, r.anMilleageFrom as km_od, isnull(r.anMilleageTo,0) as km_do 
        from _f_Reservations() r 
        inner join _f_CarExtended() c on r.anCarId = c.anId
        inner join _Reservations res on res.anId = r.anId
        inner join _Subjects s on s.anId = res.anSubjectId
        where 1=1
        --and c.anStatusId = 1
        and (r.acKey = :_contract or :contract is null)
        and (c.anId = :_car_id or :car_id is null)
        and (c.anTypeId = :_car_type or :car_type is null)
        and (c.anModelId = :_model or :model is null)
        and (c.anBrandId = :_brand or :brand is null)
        and (res.anSubjectId = :_subject_id or :subject_id is null)
        and (res.anStatusId = :_status or :status is null)
        and (res.anSubDocTypeId = :_contract_type or :contract_type is null)
        and (s.anSubjectTypeId = :_subject_type or :subject_type is null)
        )p
        where 1=1
        )q
        inner join (
        select r.anId as anReservationId
        ,case when datediff(MINUTE,r.adDateFrom,r.addateto) = 0 then 0 
         else cast(sum(ii.anTotalValue / case when i.acCurrency = 'EUR' then 1 else fx.anFxRate end )as decimal(17,4))/datediff(MINUTE,r.adDateFrom,r.addateto) end as vrednost_eur_koef
        ,case when datediff(MINUTE,r.adDateFrom,r.addateto)  = 0 then 0 
         else sum(ii.anTotalValueRSD)/datediff(MINUTE,r.adDateFrom,r.addateto) end as vrednost_rsd_koef
        from _InvoiceItems ii 
        inner join _Invoices i on ii.anInvoiceId = i.anId 
        cross apply (select top 1 isnull(nullif(anFxRate,1),117.5) as anFxRate  from _FxRate where adDate = i.adDate)fx
        inner join 
        (select distinct r.anId, df.adDateFrom, dt.adDateTo from _f_Reservations() r 
        cross apply(select top 1 adDateFrom from _f_Reservations() where anId = r.anId order by adDateFrom)df
        cross apply(select top 1 adDateTo from _f_Reservations() where anId = r.anId order by adDateTo desc)dt )r
        on r.anId = ii.anReservationId	
        
        where ii.anInvoiceId in (select anid from _Invoices where adDate between :date_from3 and :date_to3)
        group by r.anId,datediff(MINUTE,r.adDateFrom,r.addateto)
        )i on q.anReservationId = i.anReservationId
        order by reg_br,adDateFrom",
            [
                'date_from1' => $date_from, 'date_from2' => $date_from, 'date_from3' => $date_from,
                'date_to1' => $date_to, 'date_to2' => $date_to, 'date_to3' => $date_to,
                '_contract' => $contract, 'contract' => $contract,
                '_car_id' => $car_id, 'car_id' => $car_id,
                '_car_type' => $car_type, 'car_type' => $car_type,
                '_brand' => $brand, 'brand' => $brand,
                '_model' => $model, 'model' => $model,
                '_subject_id' => $subject_id, 'subject_id' => $subject_id,
                '_status' => $contract_status, 'status' => $contract_status,
                '_contract_type' => $contract_type, 'contract_type' => $contract_type,
                '_subject_type' => $subject_type, 'subject_type' => $subject_type,

            ]
        ));

        $sum_eur = $contracts->sum("vrednost_eur");
        $sum_rsd = $contracts->sum("vrednost_rsd");
        $sum = compact("sum_eur", "sum_rsd");


        $date_from_param = $date_from ? 'Datum od: ' . date('d.m.yy', strtotime($date_from))  : '';
        $date_to_param = $date_to ? ' Datum do: ' . date('d.m.y', strtotime($date_to))  : '';
        $brand_param = $brand ? ' Marka: ' . collect(DB::connection($connection)->select("SELECT top 1 acBrand from _CarBrands where anId = ?", [$brand]))->first()->acBrand : "";
        $model_param = $model ? ' Model: ' . collect(DB::connection($connection)->select("SELECT top 1 acModel from _CarModels where anId = ?", [$model]))->first()->acModel : "";
        $car_type_param = $car_type ? ' Tip vozila: ' . collect(DB::connection($connection)->select("SELECT top 1 acType from _CarTypes where anId = ?", [$car_type]))->first()->acType : "";
        $car_param = $car_id ? ' Vozilo: ' . collect(DB::connection($connection)->select("SELECT top 1 acRegNo from _Cars where anId = ?", [$car_id]))->first()->acRegNo : "";
        $contract_param = $contract ? ' Ugovor: ' . collect(DB::connection($connection)->select("SELECT top 1 acKey from _Reservations where anId = ?", [$contract]))->first()->acKey : "";
        $contract_status_param = $contract_status ? ' Status: ' . collect(DB::connection($connection)->select("SELECT top 1 acStatus from _ReservationStatus where anId = ?", [$contract_status]))->first()->acStatus : "";
        $contract_type_param  = $contract_type ? ' Tip ugovora: ' . collect(DB::connection($connection)->select("SELECT top 1 acType from _InvoiceTypes where anId = ?", [$contract_type]))->first()->acType : "";
        $subject_type_param = $subject_type ? ' Tip subjekta: ' . collect(DB::connection($connection)->select("SELECT top 1 acSubjectType from _SubjectTypes where anId = ?", [$subject_type]))->first()->acSubjectType : "";
        $subject_param = $subject_id ? ' Subjekat: ' . collect(DB::connection($connection)->select("SELECT top 1 acName from _Subjects where anId = ?", [$subject_id]))->first()->acName : "";

        $parameters =   $date_from_param  .  $date_to_param . $brand_param . $model_param . $car_type_param . $car_param . $contract_param . $contract_status_param . $contract_type_param . $subject_type_param . $subject_param;


        $databag = [
            'title' => $title, 'company_info' => $company_info, 'contracts' => $contracts, 'parameters' => $parameters, "sum" => $sum, 'data' => $contracts
        ];


        return $databag;
    }
}
