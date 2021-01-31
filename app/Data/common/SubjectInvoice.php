<?php

namespace App\Data\common;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class SubjectInvoice implements DataInterface
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
        $invoice = $invoice == "" ? null : $invoice;
        $invoice_type = $invoice_type == 0 ? null : $invoice_type;
        $subject_type = $subject_type == 0 ? null : $subject_type;


        $title = "Pregled klijenata po prometu u periodu";

        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $_invoices = collect(DB::connection($connection)->select("SELECT s.acName as Klijent,st.acSubjectType as Tip,sum(ii.anTotalValueRSD) as Total_RSD
        from _invoices i inner join _InvoiceItems ii on ii.anInvoiceId = i.anId
        inner join _Subjects s on s.anId = i.anSubjectId
		inner join _SubjectTypes st on st.anId = s.anSubjectTypeId
        inner join _Vat v on v.anId = i.anVatId
        left join _Reservations r on r.anid = ii.anReservationId
        left join _Cars c on c.anId = r.anCarId
        where 1=1
		and (i.adDate >=  :_date_from or :date_from is null)
        and (i.adDate <=    :_date_to or :date_to is null)
		and (c.anId = :_car_id or :car_id is null)
        and (c.anCategoryId = :_car_category or :car_category is null)
		and (c.anTypeId = :_car_type or :car_type is null)
		and (c.anBrandId = :_brand or :brand is null)
		and (c.anModelId = :_model or :model is null)
		and (r.acKey = :_contract or :contract is null)
		and (i.acKey = :_invoice or :invoice is null)
		and (i.anTypeId = :_invoice_type or :invoice_type is null)
		and (s.anId = :_subject_id or :subject_id is null)
		and (s.anSubjectTypeId = :_subject_type or :subject_type is null)
        group by  s.acname,st.acSubjectType
		 order by Total_RSD desc", [
            '_date_from' => $date_from, 'date_from' => $date_from,
            '_date_to' => $date_to, 'date_to' => $date_to,
            '_car_id' => $car_id, 'car_id' => $car_id,
            '_car_type' => $car_type, 'car_type' => $car_type,
            '_brand' => $brand, 'brand' => $brand,
            '_model' => $model, 'model' => $model,
            '_car_category' => $car_category, 'car_category' => $car_category,

            '_contract' => $contract, 'contract' => $contract,
            '_invoice' => $invoice, 'invoice' => $invoice,
            '_invoice_type' => $invoice_type, 'invoice_type' => $invoice_type,

            '_subject_id' => $subject_id, 'subject_id' => $subject_id,
            '_subject_type' => $subject_type, 'subject_type' => $subject_type,

        ]));

        $invoices = $_invoices;
        $sum = $invoices->sum("Total_RSD");


        $date_from_param = $date_from ? 'Datum od: ' . date('d.m.yy', strtotime($date_from))  : '';
        $date_to_param = $date_to ? ' Datum do: ' . date('d.m.y', strtotime($date_to))  : '';
        $brand_param = $brand ? ' Marka: ' . collect(DB::connection($connection)->select("SELECT top 1 acBrand from _CarBrands where anId = ?", [$brand]))->first()->acBrand : "";
        $model_param = $model ? ' Model: ' . collect(DB::connection($connection)->select("SELECT top 1 acModel from _CarModels where anId = ?", [$model]))->first()->acModel : "";
        $car_type_param = $car_type ? ' Tip vozila: ' . collect(DB::connection($connection)->select("SELECT top 1 acType from _CarTypes where anId = ?", [$car_type]))->first()->acType : "";
        $car_category_param = $car_category ? ' Kategorija vozila: ' . collect(DB::connection($connection)->select("SELECT top 1 acCategory from _CarCategory where anId = ?", [$car_category]))->first()->acCategory : "";
        $car_param = $car_id ? ' Vozilo: ' . collect(DB::connection($connection)->select("SELECT top 1 acRegNo from _Cars where anId = ?", [$car_id]))->first()->acRegNo : "";
        $contract_param = $contract ? ' Ugovor: ' . collect(DB::connection($connection)->select("SELECT top 1 acKey from _Reservations where anId = ?", [$contract]))->first()->acKey : "";
        $invoice_param = $invoice ? ' Racun: ' . $invoice : "";
        $invoice_type_param  = $invoice_type ? ' Tip racuna: ' . collect(DB::connection($connection)->select("SELECT top 1 acType from _InvoiceTypes where anId = ?", [$invoice_type]))->first()->acType : "";
        $subject_type_param = $subject_type ? ' Tip subjekta: ' . collect(DB::connection($connection)->select("SELECT top 1 acSubjectType from _SubjectTypes where anId = ?", [$subject_type]))->first()->acSubjectType : "";
        $subject_param = $subject_id ? ' Subjekat: ' . collect(DB::connection($connection)->select("SELECT top 1 acName from _Subjects where anId = ?", [$subject_id]))->first()->acName : "";

        $parameters =   $date_from_param  .  $date_to_param . $brand_param . $model_param . $car_type_param . $car_category_param . $car_param . $contract_param . $invoice_param . $invoice_type_param . $subject_type_param . $subject_param;


        $databag = [
            'title' => $title, 'company_info' => $company_info, 'invoices' => $invoices, "sum" => $sum, 'parameters' => $parameters, 'data' => $invoices
        ];



        return $databag;
    }
}
