<?php

namespace App\Data\hitauto;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class Permission implements DataInterface
{
    public  function getData($params, $connection)
    {
        $title = "Stampa ovlascenja";

        $id = $params['id'];

        $permission = collect(DB::connection($connection)->select("SELECT anReservationId,	acIsOnSubject,	anDriverId,	
        convert(char(10),adDate,104)+'.' as  adDate,convert(char(10),adDateFrom,104)+'.' as  adDateFrom,convert(char(10),adDateTo,104)+'.' as  adDateTo,
        acIsUntilRegExp  from   _CarPermissions where anId =:id", ["id" => $id]))->first();


        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, 
        rtrim(acCode) acCode, rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, 
        rtrim(acFax) acFax, rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite
        from _Subjects where anId = 1"))->first();


        $car = collect(DB::connection($connection)->select("SELECT c.acRegNo, cb.acBrand + ' ' + cm.acModel + ' ' + cv.acVersion  as marka,
        cb.acBrand + ' ' + cm.acModel  as brand
        ,isnull(c.acColor,'') acColor, cat.acCategory
        ,isnull(ltrim(rtrim(cast(c.anPower as char))),'')+ ' kW' as acPower
        ,ltrim(rtrim(cast(c.anVolume as char)))+ ' cm3'  as zapremina
        ,c.acChasis
        ,isnull(c.acEngine,'') acEngine
        ,isnull(cast(anYearOfManufacture as char),'') as anYearOfManufacture
        ,isnull(cast(anSeatsNo as char),'') as anSeatsNo 
        ,cb.acBrand,cm.acModel,ct.acType
        from _Cars c
        inner join _CarTypes ct on ct.anId = c.anTypeId
        inner join _CarBrands cb on cb.anId = c.anBrandId
        inner join _CarModels cm on cm.anId = c.anModelId
        inner join _CarModelVersion cv on cv.anId = c.anVersionId
        inner join _Categories cat on cat.anId = cm.anCategoryId
        inner join _Reservations r on r.anCarId	= c.anId
        where r.anId =  :id", ['id' => $permission->anReservationId]))->first();


        $subject = collect(DB::connection($connection)->select("SELECT s.acName, s.acAddress , s.acCity , s.acCode ,s.acRegNo ,isnull(acAccontNr,'') as acAccontNr
        from _Subjects s inner join _Reservations r on r.anSubjectId = s.anId
        where 1=1 and r.anId =  :id", ['id' => $permission->anReservationId]))->first();

        $driver = collect(DB::connection($connection)->select("SELECT acName, acId,acDriverLicence, acAddress,acPhone  from _Drivers
        where anId = :id", ['id' => $permission->anDriverId]))->first();


        $currency = '€';


        $databag = [
            'title' => $title, 'company_info' => $company_info, 'subject' => $subject,
            'car' => $car, 'currency' => $currency, 'driver' => $driver, 'permission' => $permission
        ];

        return $databag;
    }
}
