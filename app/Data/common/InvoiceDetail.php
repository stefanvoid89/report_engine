<?php

namespace App\Data\common;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class InvoiceDetail implements DataInterface
{
    public  function getData($params, $connection)
    {


        $title = "Pregled računa - detaljno";

        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $_invoices = collect(DB::connection($connection)->select("SELECT i.acKey, r.acKey as acContract,s.acName,i.acCurrency, i.anFxRate
        , convert(varchar(20),i.adDate,104) as adDate, v.anVat
        , sum(ii.anValue) as anValue,sum(ii.anVatValue) as anVatValue, sum(ii.anTotalValue) as anTotalValue
        , sum(ii.anValueRSD) as anValueRSD,sum(ii.anVatValueRSD) as anVatValueRSD ,sum(ii.anTotalValueRSD) as anTotalValueRSD
        from _invoices i inner join _InvoiceItems ii on ii.anInvoiceId = i.anId
        inner join _Subjects s on s.anId = i.anSubjectId
        inner join _Vat v on v.anId = i.anVatId
        left join _Reservations r on r.anid = ii.anReservationId
        where 1=1
        and i.adDate between '2020-10-01' and '2020-11-30'
        group by  i.acKey, r.acKey,s.acname,i.acCurrency, i.anFxRate, i.addate, v.anVat
        order by  i.acCurrency , i.adDate"));

        $invoices = $_invoices->mapToGroups(function ($item, $key) {
            return [$item->acCurrency => $item];
        })->all();

        $parameters = [];

        $databag = [
            'title' => $title, 'company_info' => $company_info, 'invoices' => $invoices, 'parematers' => $parameters
        ];



        return $databag;
    }
}
