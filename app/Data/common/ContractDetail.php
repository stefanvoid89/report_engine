<?php

namespace App\Data\common;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class ContractDetail implements DataInterface
{
    public  function getData($params, $connection)
    {



        $date_from          =   $params['date_from'] ?? null;
        $date_to            =   $params['date_to'] ?? null;
        $brand              =   $params['brand']  ??  null;
        $model              =   $params['model'] ??  null;
        $car_type           =   $params['car_type'] ??  null;
        $car_category       =   $params['car_category']  ??  null;
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
        $car_category = $car_category == 0 ? null : $car_category;
        $contract = $contract == "" ? null : $contract;
        $contract_type = $contract_type == 0 ? null : $contract_type;
        $contract_status = $contract_status == 0 ? null : $contract_status;
        $subject_type = $subject_type == 0 ? null : $subject_type;


        $title = "Pregled ugovora - hronoloski";

        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $contracts = collect(DB::connection($connection)->select("SELECT  r.acKey as Dokument,sd.acSubDocType as [Tip] , s.acName as Klijent, c.acRegNo as Vozilo
        ,convert(varchar(20),coalesce(r.adDateFromReal, r.adDateFrom),104)+' '+convert(varchar(8),convert(time,coalesce(r.adDateFromReal, r.adDateFrom),108)) as [Od]
        ,convert(varchar(20),coalesce(r.adDateToReal, r.adDateTo),104)+' '+convert(varchar(8),convert(time,coalesce(r.adDateToReal, r.adDateTo),108)) as [Do]
        ,plt.acUnit as JM, r.anQty as Kol, r.anPrice as Cena
		,r.anValue as Vrednost
		,r.anAdditionalCosts + r.anQty * r.anAdditionalCostsPerDay as Dodatak 
		,r.anVatValue as PDV, r.anTotalValue as Total
		--,r.acWorkOrder as [Br. radnog naloga]
        --, convert(varchar(20),r.adTimeIns,104)+' '+convert(varchar(8),convert(time,r.adTimeIns,108)) as [Vreme unosa] 
		,rs.acStatus as [Status]
		--, u.acName + ' ' + u.acSurname as Korisnik
        from _Reservations r
        inner join _DocTypes d on d.anId = r.anDocTypeId
        inner join _SubDocTypes sd on sd.anId = r.anSubDocTypeId and sd.anDocTypeId = r.anDocTypeId
        inner join _PriceListTypes plt on plt.anId = sd.anPriceListTypeId
        left join _Subjects s on s.anId = r.anSubjectId
        inner join _Cars c on c.anId = r.anCarId
        left join _Users u on u.anId = r.anUserIns
        inner join _CarBrands cb on cb.anId = c.anBrandId
        inner join _CarModels cm on cm.anId = c.anModelId
        inner join _CarTypes ct on ct.anId = c.anTypeId
        inner join _ReservationStatus rs on rs.anId	= r.anStatusId
        where 1=1
        and r.anDocTypeId = 1
        and (c.anId = :_car or :car is null)
        and (c.anCategoryId = :_car_category or :car_category is null)
		and (ct.anId = :_car_type or :car_type is null)
		and (sd.anId = :_reservation_type or :reservation_type is null)
		and (cb.anId = :_brand or :brand is null)
		and (cm.anId = :_model or :model is null)
		and (s.anId = :_subject or :subject is null)
        and (r.acKey = :_contract or :contract is null)
        and (r.adDateTo >= :_date_from or :date_from is null  ) 
        and (r.adDateFrom <= :_date_to or :date_to is null) 
        and (r.anStatusId = :_status or :status is null)
        order by  r.adDateFrom", [
            '_car' => $car_id, 'car' => $car_id,
            '_car_type' => $car_type, 'car_type' => $car_type,
            '_reservation_type' => $contract_type, 'reservation_type' => $contract_type,
            '_brand' => $brand, 'brand' => $brand,
            '_model' => $model, 'model' => $model,
            '_subject' =>  $subject_id, 'subject' => $subject_id,
            '_contract' => $contract, 'contract' => $contract,
            '_date_from' => $date_from, 'date_from' => $date_from,
            '_date_to' => $date_to, 'date_to' => $date_to,
            '_status' => $contract_status, 'status' => $contract_status,
            '_car_category' => $car_category, 'car_category' => $car_category,

        ]));

        $sum_value = $contracts->sum("Vrednost");
        $sum_additional = $contracts->sum("Dodatak");
        $sum_pdv = $contracts->sum("PDV");
        $sum_total = $contracts->sum("Total");
        $sum = compact("sum_value", "sum_additional", "sum_pdv", "sum_total");



        $date_from_param = $date_from ? 'Datum od: ' . date('d.m.yy', strtotime($date_from))  : '';
        $date_to_param = $date_to ? ' Datum do: ' . date('d.m.y', strtotime($date_to))  : '';
        $brand_param = $brand ? ' Marka: ' . collect(DB::connection($connection)->select("SELECT top 1 acBrand from _CarBrands where anId = ?", [$brand]))->first()->acBrand : "";
        $model_param = $model ? ' Model: ' . collect(DB::connection($connection)->select("SELECT top 1 acModel from _CarModels where anId = ?", [$model]))->first()->acModel : "";
        $car_type_param = $car_type ? ' Tip vozila: ' . collect(DB::connection($connection)->select("SELECT top 1 acType from _CarTypes where anId = ?", [$car_type]))->first()->acType : "";
        $car_category_param = $car_category ? ' Kategorija vozila: ' . collect(DB::connection($connection)->select("SELECT top 1 acCategory from _CarCategory where anId = ?", [$car_category]))->first()->acCategory : "";
        $car_param = $car_id ? ' Vozilo: ' . collect(DB::connection($connection)->select("SELECT top 1 acRegNo from _Cars where anId = ?", [$car_id]))->first()->acRegNo : "";
        $contract_param = $contract ? ' Ugovor: ' . $contract : "";
        $contract_status_param = $contract_status ? ' Status: ' . collect(DB::connection($connection)->select("SELECT top 1 acStatus from _ReservationStatus where anId = ?", [$contract_status]))->first()->acStatus : "";
        $contract_type_param  = $contract_type ? ' Tip ugovora: ' . collect(DB::connection($connection)->select("SELECT top 1 acType from _InvoiceTypes where anId = ?", [$contract_type]))->first()->acType : "";
        $subject_type_param = $subject_type ? ' Tip subjekta: ' . collect(DB::connection($connection)->select("SELECT top 1 acSubjectType from _SubjectTypes where anId = ?", [$subject_type]))->first()->acSubjectType : "";
        $subject_param = $subject_id ? ' Subjekat: ' . collect(DB::connection($connection)->select("SELECT top 1 acName from _Subjects where anId = ?", [$subject_id]))->first()->acName : "";

        $parameters =   $date_from_param  .  $date_to_param . $brand_param . $model_param . $car_type_param . $car_category_param . $car_param . $contract_param . $contract_status_param . $contract_type_param . $subject_type_param . $subject_param;


        $databag = [
            'title' => $title, 'company_info' => $company_info, 'contracts' => $contracts, 'parameters' => $parameters, "sum" => $sum, 'data' => $contracts
        ];



        return $databag;
    }
}
