<?php

namespace App\Data\autofleet;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class FiatOffer implements DataInterface
{
    public  function getData($params, $connection)
    {
        $title = "Stampa ponude";

        $id = $params['id'];



        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $car = [];

        // $car = collect(DB::connection($connection)->select("SELECT c.acRegNo, cb.acBrand + ' ' + cm.acModel + ' ' + cv.acVersion  as marka
        // ,isnull(c.acColor,'') acColor, cat.acCategory
        // ,isnull(ltrim(rtrim(cast(c.anPower as char))),'')+ ' kW' as acPower
        // ,ltrim(rtrim(cast(1500 as char)))+ ' cm3'  as zapremina
        // ,c.acChasis
        // ,isnull(c.acEngine,'') acEngine
        // ,isnull(cast(anYearOfManufacture as char),'') as anYearOfManufacture
        // ,isnull(cast(anSeatsNo as char),'') as anSeatsNo from _Cars c
        // inner join _CarTypes ct on ct.anId = c.anTypeId
        // inner join _CarBrands cb on cb.anId = c.anBrandId
        // inner join _CarModels cm on cm.anId = c.anModelId
        // inner join _CarModelVersion cv on cv.anId = c.anVersionId
        // inner join _Categories cat on cat.anId = cm.anCategoryId
        // inner join _Leasing l on l.anCarId	= c.anId
        // where l.anId =  :id", ['id' => $id]))->first();




        //    $leasing =  collect(DB::connection($connection)->select("SELECT  c.acCarNameShort as acCarName, l.anParticipation, 
        //   l.anPeriod, l.anValueTotalMonth * 1.2 as anValueTotalMonth, isnull(acCostsText,'') as acCostsText
        //    from _Leasing l inner join _v_CarExtended c on c.anId = l.anCarId where l.anId = ?", [$id]))->first();

        $leasing =  collect(DB::connection($connection)->select("SELECT isnull(acCarNameShort,m.acModel) as acCarName, l.anParticipation, 
    l.anPeriod, l.anValueTotalMonth * 1.2 as anValueTotalMonth, isnull(acCostsText,'') as acCostsText
    from _Leasing l left join _v_CarExtended c on c.anId = l.anCarId 
    left join _CarModels m on l.anModelId=m.anid and l.anBrandId=m.anBrandId where l.anId = ?", [$id]))->first();


        $dodaci = '';

        // if (count($leasing)) {
        //     $dodaci =  collect(DB::connection($connection)->select("
        //     DECLARE @dodaci_prefix varchar(max) = 'Utvrđenim iznosom i plaćanjem Zakupnine obuhvaćeni su sledeći troškovi:'
        //     DECLARE @dodaci VARCHAR(max) =''
        //     SELECT @dodaci = COALESCE(@dodaci + ', ', '') + acName from _LeasingItems li where anLeasingId = ?
        //     and anvalue > 0 and acName not like '%leasing%'
        //     if(len(@dodaci) >= 1)SELECT @dodaci = right(@dodaci, len(@dodaci) - 1) + '.'
        //     select @dodaci_prefix + @dodaci as dodaci", [$leasing->first()->anId]))->first()->dodaci;
        // }





        $currency = '€';


        $databag = [
            'title' => $title, 'company_info' => $company_info, 'leasing' => $leasing,
            'car' => $car, 'currency' => $currency
        ];

        return $databag;
    }
}
