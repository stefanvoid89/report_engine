<?php

namespace App\Data\common;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class InvoiceRecDetail implements DataInterface
{
    public  function getData($params, $connection)
    {



        $date_from          =   $params['date_from'] ?? null;
        $date_to            =   $params['date_to'] ?? null;
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
        $invoice_rec = $invoice_rec == "" ? null : $invoice_rec;
        $invoice_rec_type = $invoice_rec_type == 0 ? null : $invoice_rec_type;
        $subject_type = $subject_type == 0 ? null : $subject_type;


        $title = "Pregled primljenih računa - detaljno";

        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $_invoices = collect(DB::connection($connection)->select("SELECT i.acKey, c.acRegNo,s.acName,i.acCurrency, i.anFxRate
        , convert(varchar(20),i.adDate,104) as adDate, v.anVat
        , sum(ii.anValue) as anValue,sum(ii.anVatValue) as anVatValue, sum(ii.anTotalValue) as anTotalValue
        , sum(ii.anValueRSD) as anValueRSD,sum(ii.anVatValueRSD) as anVatValueRSD ,sum(ii.anTotalValueRSD) as anTotalValueRSD
        from _InvoicesRec i inner join _InvoiceRecItems ii on ii.anInvoiceRecId = i.anId
        inner join _Subjects s on s.anId = i.anSubjectId
        inner join _Vat v on v.anId = i.anVatId
        left join dbo._f_CarExtended() c on c.anId = ii.anCarId
        where 1=1
		and (i.adDate >=  :_date_from or :date_from is null)
        and (i.adDate <=    :_date_to or :date_to is null)
		and (c.anId = :_car_id or :car_id is null)
		and (c.anTypeId = :_car_type or :car_type is null)
		and (c.anBrandId = :_brand or :brand is null)
		and (c.anModelId = :_model or :model is null)
		and (i.acDoc = :_invoice_rec_doc or :invoice_rec_doc is null)
		and (i.acKey = :_invoice or :invoice is null)
		and (i.anTypeId = :_invoice_type or :invoice_type is null)
		and (s.anId = :_subject_id or :subject_id is null)
		and (s.anSubjectTypeId = :_subject_type or :subject_type is null)

		group by  i.acKey, c.acRegNo,s.acname,i.acCurrency, i.anFxRate, i.addate, v.anVat
        order by  i.acCurrency , i.adDate,s.acName", [
            '_date_from' => $date_from, 'date_from' => $date_from,
            '_date_to' => $date_to, 'date_to' => $date_to,
            '_car_id' => $car_id, 'car_id' => $car_id,
            '_car_type' => $car_type, 'car_type' => $car_type,
            '_brand' => $brand, 'brand' => $brand,
            '_model' => $model, 'model' => $model,

            '_invoice_rec_doc' => $invoice_rec_doc, 'invoice_rec_doc' => $invoice_rec_doc,
            '_invoice' => $invoice_rec, 'invoice' => $invoice_rec,
            '_invoice_type' => $invoice_rec_type, 'invoice_type' => $invoice_rec_type,

            '_subject_id' => $subject_id, 'subject_id' => $subject_id,
            '_subject_type' => $subject_type, 'subject_type' => $subject_type,

        ]));

        $invoices = $_invoices->mapToGroups(function ($item, $key) {
            return [$item->acCurrency => $item];
        })->all();


        $parameters =   ($date_from ? 'Datum od: ' . $date_from : '') .  ($date_from ? 'Datum do: ' . $date_to : '');
        // $date_to     
        // $brand       
        // $model       
        // $car_type    
        // $car_id      
        // $contract    
        // $invoice     
        // $invoice_type
        // $subject_type
        // $subject_id  

        $databag = [
            'title' => $title, 'company_info' => $company_info, 'invoices' => $invoices, 'parameters' => $parameters
        ];



        return $databag;
    }
}
