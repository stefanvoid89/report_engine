<?php

namespace App\Data\hitauto;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class DailyInvoice implements DataInterface
{
    public  function getData($params, $connection)
    {


        $id = $params['id'];
        $_currency = $params['currency'];
        $_proforma = isset($params['proforma']) ? $params['proforma'] : null;
        $_sum = isset($params['sum']) ? $params['sum'] : null;

        $proforma =  $_proforma  ?? "";


        $title = $_proforma   ? "Stampa predracuna" : "Stampa fakture";


        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $positions = null;

        $invoice_header = collect(DB::connection($connection)->select("SELECT i.acKey, convert(varchar(20),i.adDate,104) as adDate, s.acName, s.acAddress, s.acCity, s.acPost,s.acPhone, s.acRegNo,s.acCode, pc.acPayCondition, pt.acName as acPayType
        , u.acName + ' ' +isnull(u.acSurname,'') as acUser	, i.anReservationId, i.anValue, i.anVatValue, i.anTotalValue, i.anValueRSD, i.anVatValueRSD, i.anTotalValueRSD,i.anFxRate,i.acComment,cast(v.anVat as int) as anVat
        ,i.anTypeId
        from _Invoices i
        inner join _Subjects s on i.anSubjectId	 = s.anId
        inner join _Users	 u on i.anUserIns = u.anId
        inner join _PayConditions pc on pc.anId	 = i.anPayConditionId
		left join _PayTypes pt on pt.anId = i.anPayTypeId
        inner join _Vat v on v.anId=i.anVatId
        where i.anId =:id", ['id' => $id]))->first();

        $reservation_id = $invoice_header->anReservationId;

        if (!$reservation_id) {
            $reservation_id = collect(DB::connection($connection)->select("SELECT top 1 anReservationId  from _InvoiceItems where anInvoiceId = ?", [$id]))
                ->first()->anReservationId;
        }

        $car = collect(DB::connection($connection)->select("SELECT c.acCarNameShort as acName, c.acRegNo, c.acChasis	 from _v_CarExtended c inner join _Reservations r on r.anCarId = c.anId
        where r.anId = :reservation_id", ['reservation_id' => $reservation_id]))->first();

        $avans = collect(DB::connection($connection)->select("SELECT top 1 acKey,adDate, anValue, anVatValue, anTotalValue from _Avans where anInvoiceId = ?", [$id]))
            ->first();


        if ($_currency == 'eur') {
            $currency = ' €';

            $positions =  collect(DB::connection($connection)->select("SELECT ROW_NUMBER() over (order by ii.anId) as anNo, si.acIdent, ii.acName, ii.acUm,ii.anQty, 
             r.acKey, r.acWorkOrder,c.acRegNo,
            ii.anPrice,ii.anRebate,ii.anValue  
            from _InvoiceItems ii
        inner join _SetItem si on si.anId = ii.anIdentId
        inner join _Invoices i on i.anId = ii.anInvoiceId
        left join _Reservations r on r.anId = ii.anReservationId
        left join _Cars c on c.anId = r.anCarId
        where 1=1 and ii.anInvoiceId	 =  :id", ['id' => $id]));

            $value_text = \App\Data\NumberToText::vrati_string(abs($invoice_header->anTotalValue));

            $positions_sum = (object) ['anValue' => $invoice_header->anValue, 'anVatValue' => $invoice_header->anVatValue, 'anTotalValue' => $invoice_header->anTotalValue, 'value_text' => $value_text];
        } else {
            $currency = ' RSD';

            $positions =  collect(DB::connection($connection)->select(
                "SELECT ROW_NUMBER() over (order by ii.anId) as anNo, si.acIdent, ii.acName, ii.acUm, ii.anQty,
                  r.acKey, r.acWorkOrder,c.acRegNo,
            anPriceRSD as anPrice,ii.anRebate,ii.anValueRSD as anValue  
            
            from _InvoiceItems ii
        inner join _SetItem si on si.anId = ii.anIdentId
        inner join _Invoices i on i.anId = ii.anInvoiceId
        left join _Reservations r on r.anId = ii.anReservationId
        left join _Cars c on c.anId = r.anCarId
        where 1=1
        and anInvoiceId	 =  :id",
                ['id' => $id]
            ));


            if ($_sum) {
                $positions =  collect(DB::connection($connection)->select(
                    "SELECT ROW_NUMBER() over (order by acWorkOrder) as anNo,* from ( 
                    SELECT 	max(si.acIdent) as acIdent, max(ii.acName) as acName, max(ii.acUm) as acUm , max(ii.anQty) as anQty, 
                        max(r.acKey) as acKey, r.acWorkOrder,max(c.acRegNo) as acRegNo,
                        sum(ii.anPriceRSD) as anPrice,max(ii.anRebate) as anRebate,sum(ii.anValueRSD) as anValue  
                         from _InvoiceItems ii
                        inner join _SetItem si on si.anId = ii.anIdentId
                        inner join _Invoices i on i.anId = ii.anInvoiceId
                        left join _Reservations r on r.anId = ii.anReservationId
                        left join _Cars c on c.anId = r.anCarId
                        where 1=1 and ii.anInvoiceId	= :id
                        group by r.acWorkOrder)q",
                    ['id' => $id]
                ));
            }

            $value_text = \App\Data\NumberToText::vrati_string(abs($invoice_header->anTotalValueRSD));


            $positions_sum = (object) [
                'anValue' => $invoice_header->anValueRSD,
                'anVatValue' => $invoice_header->anVatValueRSD, 'anTotalValue' => $invoice_header->anTotalValueRSD, 'value_text' => $value_text
            ];
        }



        $databag = [
            'title' => $title, 'company_info' => $company_info, 'reservation_id' => $reservation_id, 'invoice_header' => $invoice_header,
            'car' => $car, 'positions' => $positions, 'currency' => $currency, 'positions_sum' => $positions_sum, 'proforma' => $proforma,
            'avans' => $avans
        ];



        return $databag;
    }
}
