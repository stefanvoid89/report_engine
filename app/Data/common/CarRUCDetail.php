<?php

namespace App\Data\common;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class CarRUCDetail implements DataInterface
{
    public  function getData($params, $connection)
    {

        $date_from          =   $params['date_from'] ?? date("Y-m-d", strtotime("first day of previous month"));
        $date_to            =   $params['date_to'] ?? date("Y-m-d", strtotime("last day of previous month"));
        $brand              =   $params['brand']  ??  null;
        $model              =   $params['model'] ??  null;
        $car_type           =   $params['car_type'] ??  null;
        $car_id             =   $params['car_id'] ?? null;
        $car_category       =   $params['car_category']  ??  null;
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
        $car_category = $car_category == 0 ? null : $car_category;
        $contract = $contract == "" ? null : $contract;

        $contract_type = $contract_type == 0 ? null : $contract_type;
        $contract_status = $contract_status == 0 ? null : $contract_status;
        $subject_type = $subject_type == 0 ? null : $subject_type;


        $title = "Pregled RUC detaljno po vozilu";

        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $_contracts = collect(DB::connection($connection)->select(
            "SELECT  acRegNo as [Vozilo], acCarNameShort as [Naziv],c.acType as [Tip_Vozila], t.actype as [Tip_Racuna],acKey as Dokument
            ,isnull(convert(varchar(20),adDate,104),'/') as Datum
            ,isnull(t.acName,'/') as Subjekat
                        ,isnull(trosak_eur,0) as [Trosak_EUR]
                        ,isnull(trosak_rsd,0) as [Trosak_RSD]
                        ,isnull(racun_eur,0) as [Fakturisano_EUR]
                        ,isnull(racun_rsd,0) as [Fakturisano_RSD]
                   
                        from _f_CarExtended() c 
                        left join (
            
              --trosak
                        SELECT  i.ackey
                        ,it.acType
                        ,s.acName
                        ,irp.adDateDue as adDate
                               ,cast(irp.anValue / case when i.acCurrency <> 'RSD' then 1 else isnull(fx.anFxRate,117.5) end as decimal(17,4)) as trosak_eur 
                                ,cast(irp.anValueRSD as decimal(17,4)) as trosak_rsd
                                ,0 as racun_eur
                                ,0 as racun_rsd
                                ,irp.anCarId
                                from _InvoicesRec i
                                inner join  _InvoiceRecPays irp on i.anId = irp.anInvoiceRecId
                                      inner join _Subjects s on s.anId = i.anSubjectId
                                inner join _Vat v on v.anId = i.anVatId
                                inner join _InvoicesReceivedTypes it on it.anId = i.anTypeId
                                outer apply (select top 1 isnull(nullif(anFxRate,1),117.5) as anFxRate  from _FxRate where adDate = i.adDate)fx
                                where 1=1
                                and irp.adDateDue between :date_from1 and :date_to1
            union all
            
             --fakturisano
                            select 
                            ackey
                            ,acType
                            ,acname
                            ,adDate
                                ,0 as trosak_eur
                                ,0 as trosak_rsd
                            ,cast(minuti * vrednost_eur_koef as decimal(19,2)) as recun_eur 
                            ,cast(minuti * vrednost_rsd_koef as decimal(19,2)) as racun_rsd 
                            
                            ,anCarId from (
                                select r.anId as anReservationId
                                ,i.acKey
                                ,it.acType
                                ,i.adDate
                                ,s.acName
                                ,case when datediff(MINUTE,r.adDateFrom,r.addateto) = 0 then 0 
                                 else cast(sum(ii.anTotalValue / case when i.acCurrency = 'EUR' then 1 else fx.anFxRate end )as decimal(17,4))/datediff(MINUTE,r.adDateFrom,r.addateto) end as vrednost_eur_koef
                                ,case when datediff(MINUTE,r.adDateFrom,r.addateto)  = 0 then 0 
                                 else sum(ii.anTotalValueRSD)/datediff(MINUTE,r.adDateFrom,r.addateto) end as vrednost_rsd_koef
                                from _InvoiceItems ii 
                                inner join _Invoices i on ii.anInvoiceId = i.anId 
                                inner join _Subjects s on s.anId = i.anSubjectId
                                inner join _InvoiceTypes it on it.anId = i.anTypeId
                                cross apply (select top 1 isnull(nullif(anFxRate,1),117.5) as anFxRate  from _FxRate where adDate = i.adDate)fx
                                inner join 
                                (select distinct r.anId, df.adDateFrom, dt.adDateTo from _f_Reservations() r 
                                cross apply(select top 1 adDateFrom from _f_Reservations() where anId = r.anId order by adDateFrom)df
                                cross apply(select top 1 adDateTo from _f_Reservations() where anId = r.anId order by adDateTo desc)dt )r
                                on r.anId = ii.anReservationId	
                                
                                where ii.anInvoiceId in (select anid from _Invoices where adDate between :date_from2 and :date_to2 )
                                group by i.acKey, s.acName, r.anId,datediff(MINUTE,r.adDateFrom,r.addateto),i.adDate,it.acType
                            )r inner join (
                                    select r.anId as anReservationId,  r.ancarid
                               ,DATEDIFF(MINUTE,r.adDateFrom,r.adDateTo) as minuti
                                from _f_Reservations() r 
                                where 1=1
                            )q on r.anReservationId = q.anReservationId ) t on t.anCarId = c.anId
                                       where 1=1
                        and c.anStatusId = 1
            and (c.anId = :_car_id or :car_id is null)
            and (c.anTypeId = :_car_type or :car_type is null)
            and (c.anModelId = :_model or :model is null)
            and (c.anBrandId = :_brand or :brand is null)
            and (c.anCategoryId = :_car_category or :car_category is null)
            order by Vozilo, adDate",
            [
                'date_from1' => $date_from, 'date_from2' => $date_from,
                'date_to1' => $date_to, 'date_to2' => $date_to,
                // '_contract' => $contract, 'contract' => $contract,
                '_car_id' => $car_id, 'car_id' => $car_id,
                '_car_type' => $car_type, 'car_type' => $car_type,
                '_brand' => $brand, 'brand' => $brand,
                '_model' => $model, 'model' => $model,
                '_car_category' => $car_category, 'car_category' => $car_category,
                // '_subject_id' => $subject_id, 'subject_id' => $subject_id,
                // '_status' => $contract_status, 'status' => $contract_status,
                // '_contract_type' => $contract_type, 'contract_type' => $contract_type,
                // '_subject_type' => $subject_type, 'subject_type' => $subject_type,

            ]
        ));

        $contracts = $_contracts->mapToGroups(function ($item, $key) {
            return [$item->Vozilo => $item];
        })->all();

        $tr_sum_eur = $_contracts->sum("Trosak_EUR");
        $tr_sum_rsd = $_contracts->sum("Trosak_RSD");
        $fk_sum_eur = $_contracts->sum("Fakturisano_EUR");
        $fk_sum_rsd = $_contracts->sum("Fakturisano_RSD");
        $ruc_eur = $fk_sum_eur - $tr_sum_eur;
        $ruc_rsd = $fk_sum_rsd - $tr_sum_rsd;

        $sum = compact("tr_sum_eur", "tr_sum_rsd", "fk_sum_eur", "fk_sum_rsd", "ruc_eur", "ruc_rsd");


        $date_from_param = $date_from ? 'Datum od: ' . date('d.m.y', strtotime($date_from))  : '';
        $date_to_param = $date_to ? ' Datum do: ' . date('d.m.y', strtotime($date_to))  : '';
        $brand_param = $brand ? ' Marka: ' . collect(DB::connection($connection)->select("SELECT top 1 acBrand from _CarBrands where anId = ?", [$brand]))->first()->acBrand : "";
        $model_param = $model ? ' Model: ' . collect(DB::connection($connection)->select("SELECT top 1 acModel from _CarModels where anId = ?", [$model]))->first()->acModel : "";
        $car_type_param = $car_type ? ' Tip vozila: ' . collect(DB::connection($connection)->select("SELECT top 1 acType from _CarTypes where anId = ?", [$car_type]))->first()->acType : "";
        $car_param = $car_id ? ' Vozilo: ' . collect(DB::connection($connection)->select("SELECT top 1 acRegNo from _Cars where anId = ?", [$car_id]))->first()->acRegNo : "";
        $car_category_param = $car_category ? ' Kategorija vozila: ' . collect(DB::connection($connection)->select("SELECT top 1 acCategory from _CarCategory where anId = ?", [$car_category]))->first()->acCategory : "";
        // $contract_param = $contract ? ' Ugovor: ' . collect(DB::connection($connection)->select("SELECT top 1 acKey from _Reservations where anId = ?", [$contract]))->first()->acKey : "";
        // $contract_status_param = $contract_status ? ' Status: ' . collect(DB::connection($connection)->select("SELECT top 1 acStatus from _ReservationStatus where anId = ?", [$contract_status]))->first()->acStatus : "";
        // $contract_type_param  = $contract_type ? ' Tip ugovora: ' . collect(DB::connection($connection)->select("SELECT top 1 acType from _InvoiceTypes where anId = ?", [$contract_type]))->first()->acType : "";
        // $subject_type_param = $subject_type ? ' Tip subjekta: ' . collect(DB::connection($connection)->select("SELECT top 1 acSubjectType from _SubjectTypes where anId = ?", [$subject_type]))->first()->acSubjectType : "";
        // $subject_param = $subject_id ? ' Subjekat: ' . collect(DB::connection($connection)->select("SELECT top 1 acName from _Subjects where anId = ?", [$subject_id]))->first()->acName : "";

        $parameters =   $date_from_param  .  $date_to_param . $brand_param . $model_param . $car_category_param . $car_type_param . $car_param; //. $contract_param . $contract_status_param . $contract_type_param . $subject_type_param . $subject_param;


        $databag = [
            'title' => $title, 'company_info' => $company_info, 'contracts' => $contracts, 'parameters' => $parameters, 'data' => $_contracts, 'sum' => $sum
        ];


        return $databag;
    }
}
