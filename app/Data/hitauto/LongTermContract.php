<?php

namespace App\Data\hitauto;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class LongTermContract implements DataInterface
{
    public  function getData($params, $connection)
    {
        $title = "Stampa ugovora";

        $id = $params['id'];

        $subject = collect(DB::connection($connection)->select("SELECT s.acName, s.acAddress , s.acCity , s.acCode ,s.acRegNo ,isnull(acAccontNr,'') as acAccontNr,
        isnull(acCoreActivity,'') as acCoreActivity, isnull(acCoreActivityEN,'') as acCoreActivityEN
        from _Subjects s inner join _Reservations r on r.anSubjectId = s.anId
        where 1=1 and r.anId =  :id", ['id' => $id]))->first();

        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $car = collect(DB::connection($connection)->select("SELECT c.acRegNo, cb.acBrand + ' ' + cm.acModel + ' ' + cv.acVersion  as marka,
        cb.acBrand + ' ' + cm.acModel  as brand
        ,isnull(c.acColor,'') acColor, cat.acCategory
        ,isnull(ltrim(rtrim(cast(c.anPower as char))),'')+ ' kW' as acPower
        ,ltrim(rtrim(cast(c.anVolume as char)))+ ' cm3'  as zapremina
        ,c.acChasis
        ,isnull(c.acEngine,'') acEngine
        ,isnull(cast(anYearOfManufacture as char),'') as anYearOfManufacture
        ,isnull(cast(anSeatsNo as char),'') as anSeatsNo from _Cars c
        inner join _CarTypes ct on ct.anId = c.anTypeId
        inner join _CarBrands cb on cb.anId = c.anBrandId
        inner join _CarModels cm on cm.anId = c.anModelId
        inner join _CarModelVersion cv on cv.anId = c.anVersionId
        inner join _Categories cat on cat.anId = cm.anCategoryId
        inner join _Reservations r on r.anCarId	= c.anId
        where r.anId =  :id", ['id' => $id]))->first();


        $reservation = collect(DB::connection($connection)->select("SELECT r.anId, r.acKey, r.anSubDocTypeId, r.anSubjectId,
        cast(convert(char(10),r.adDateFrom,104) + ' ' + 	convert(char(5),r.adDateFrom,114) as char(10)) as adDateFrom,
        convert(char(10),r.adDateTo,104) + ' ' + 	convert(char(5),r.adDateTo,114) as adDateTo,
        r.anCarId, r.acComment, 
        r.anValue ,r.anDriverId,cast(r.anQty as int) as  anQty,r.anPrice	, r.anRebate, r.anAdditionalCosts	,r.anAdditionalCostsPerDay,
        c.anBrandId, c.anModelId,acWorkOrder,anExpenses,cast(anKmYear as int) anKmYear, cast((anQty/12)*anKmYear as int) as anKmPeriod,r.acCreditCardHolder
        from _Reservations r
        inner join _Cars c on c.anId = r.anCarId
        where r.anId = :id", ['id' => $id]))->first();


        $leasing =  collect(DB::connection($connection)->select("SELECT  anId from _Leasing where anReservationId = ?", [$reservation->anId]));

        $dodaci = '';

        if (count($leasing)) {
            $dodaci =  collect(DB::connection($connection)->select("
            DECLARE @dodaci_prefix varchar(max) = 'Utvrđenim iznosom i plaćanjem Zakupnine obuhvaćeni su sledeći troškovi:'
            DECLARE @dodaci VARCHAR(max) =''
            SELECT @dodaci = COALESCE(@dodaci + ', ', '') + acName from _LeasingItems li where anLeasingId = ?
            and anvalue > 0 and acName not like '%leasing%'
            if(len(@dodaci) >= 1)SELECT @dodaci = right(@dodaci, len(@dodaci) - 1) + '.'
            select @dodaci_prefix + @dodaci as dodaci", [$leasing->first()->anId]))->first()->dodaci;
        }

        $currency = '€';
        $price_text = \App\Data\NumberToText::vrati_string($reservation->anPrice);
        $price_text_en  = \App\Data\NumberToText::vrati_string_en($reservation->anPrice);

        $expenses_text = \App\Data\NumberToText::vrati_string($reservation->anExpenses);
        $expenses_text_en  = \App\Data\NumberToText::vrati_string_en($reservation->anExpenses);

        $databag = [
            'title' => $title, 'company_info' => $company_info, 'reservation' => $reservation, 'subject' => $subject,
            'car' => $car, 'currency' => $currency, 'price_text' => $price_text, 'price_text_en' => $price_text_en, 'dodaci' => $dodaci,
            'expenses_text' => $expenses_text, 'expenses_text_en' => $expenses_text_en
        ];

        return $databag;
    }
}
