<?php

namespace App\Data\hitauto;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class DailyContract implements DataInterface
{
    public  function getData($params, $connection)
    {

        $id = $params['id'];
        $is_until_reg_end = isset($params['is_until_reg_end']) ? $params['is_until_reg_end'] : null;

        $title = "Stampa dnevnog ugovora";

        $company_info = collect(DB::connection($connection)->select("SELECT rtrim(acName) acName, rtrim(acAddress) acAddress, rtrim(acCode) acCode, 
        rtrim(acRegNo) acRegNo, rtrim(acPhone) acPhone, rtrim(acPost) acPost, rtrim(acCity) acCity, rtrim(acFax) acFax, 
        rtrim(acAccontNr) acAccontNr, rtrim(acWebSite) acWebSite, rtrim(acEmail) acEmail, rtrim(acPost) acPost
        from _Subjects where anId = 1"))->first();

        $reservation = collect(DB::connection($connection)->select("SELECT r.acKey, r.anSubjectId
         ,convert(varchar(20),r.adDateFrom,104) as adDate
         ,convert(varchar(5),convert(time,r.adDateFrom,108))  as adTime
        ,convert(varchar(20),r.adDateFrom,104)+' '+convert(varchar(5),convert(time,r.adDateFrom,108)) as adDateFrom
        ,convert(varchar(20),r.adDateTo,104)+' '+convert(varchar(5),convert(time,r.adDateTo,108))  as adDateTo
        ,convert(varchar(20),r.adDateTo,104)+'. god '+convert(varchar(5),convert(time,r.adDateTo,108))  as adDateTo2
        ,r.anCarId , u.acName + ' ' + u.acSurname as acUser, right(convert(char(10),adDateExpCreditCard,103),7) as adDateExpCreditCard
        ,isnull(cct.acName,'') as acCreditCard, r.acCreditCardNo, r.acCVV,r.acCreditCardHolder, r.anDeposit, r.anDriverId
        , FORMAT(anMilleageFrom,'#,0') as anMilleageFrom ,acTankFrom
        from _Reservations r inner join _Users u on r.anUserIns = u.anId
        left join _CreditCardTypes cct on cct.anId = r.anCreditCardTypeId
        where r.anId = :id", ['id' => $id]))->first();


        $subject = collect(DB::connection($connection)->select("SELECT s.anId, s.acName, s.anSubjectTypeId ,s.acId, s.acAddress, s.acCity, s.acPhone,s.acCode, s.acRegNo
        from _Subjects s inner join
        _SubjectTypes st on st.anId = s.anSubjectTypeId
        where s.anId = :subject_id", ['subject_id' => $reservation->anSubjectId]))->first();

        $driver = collect(DB::connection($connection)->select("SELECT acName ,acId, acDriverLicence,acAddress,acPhone,
        convert(varchar(20),adDateOfBirth,104) as adDateOfBirth, convert(varchar(20),adDriverLicenceExpDate,104) as adDriverLicenceExpDate  from _Drivers
        where anId = :driver_id", ['driver_id' => $reservation->anDriverId]))->first();

        $car =  collect(DB::connection($connection)->select("SELECT acCarNameShort, acChasis,acRegNo ,acBrand, anFuelTypeId
          ,convert(varchar(20),adDateRegistrationExpiration,104) as adDateRegistrationExpiration from _v_CarExtended
        where anId = :car_id", ['car_id' => $reservation->anCarId]))->first();



        $currency = '€';

        $items = collect(DB::connection($connection)->select("SELECT ROW_NUMBER() over(order by anNo) as anNo, acName,anQty, acUm,
        cast(anPrice as decimal(10,2)) as anPrice,cast(anValue as decimal(10,2)) as anValue  from (
        SELECT 0 as anNo, q.acName , r.anQty , q.acUm ,
        r.anPrice * ((100.00-isnull(r.anRebate,0))/100.00) as anPrice ,r.anPrice * ((100.00-isnull(r.anRebate,0))/100.00)  * r.anQty as anValue
        from _Reservations r
        inner join _Vat	 v on v.anId = r.anVatId
        cross apply (select si.anId, si.acName ,p.acUm from _SetItem si inner join _SysParams sp on sp.anReservationIdentId = si.anId cross apply(
        select top 1 plt.acUnit as acUm from _Reservations rr 
        inner join _SubDocTypes sdt on rr.anSubDocTypeId = sdt.anId 
        inner join _PriceListTypes plt on plt.anId= sdt.anPriceListTypeId
        where rr.anId = r.anId)p)q
        where r.anId = :reservation_id1
        union all
        SELECT row_number() over(order by rer.acName) as anNo, rer.acName , case when u.acName = 'dan' then r.anQty else 1 end as anQty, u.acName as acUm,
        re.anPrice * ((100.00-isnull(r.anRebate,0))/100.00) as anPrice,
        re.anPrice * ((100.00-isnull(r.anRebate,0))/100.00) * case when u.acName = 'dan' then r.anQty else 1 end as anValue
        from _ReservationExtras re
        inner join _Reservations r on r.anId	= re.anReservationId
        inner join _ReservationExtrasReigster rer	on rer.anId = re.anReservationExtraId
        inner join _Vat	 v on v.anId = r.anVatId
        inner join _Um u on u.anId=  re.anUmId
        cross apply (SELECT si.anId from _SetItem si inner join _SysParams sp on sp.anReservationExtraIdentId = si.anId)q
        where r.anId = :reservation_id2
        )q
        ", ['reservation_id1' => $id, 'reservation_id2' => $id]));


        $total_value = collect(DB::connection($connection)->select("SELECT r.anValue,r.anVatValue,r.anTotalValue, cast(v.anVat as char) as acVat from _Reservations r
        inner join _Vat v on r.anVatId = v.anId
        where r.anId = :reservation_id", ['reservation_id' => $id]))->first();


        $selected_ext_car_damages_full = DB::connection($connection)->select("SELECT   cli.anDamageId ,cdr.acName, cdt.acType
        FROM [dbo].[_CarDamageList] cl
        inner join  [dbo].[_CarDamageListItems] cli on cl.anId	 = cli.anCarDamageId
        inner join _CarDamageRegister cdr on cdr.anId	 = cli.anDamageId
        inner join _CarDamageType cdt on cdt.anId = cli.anTypeId
		inner join _Reservations r on r.anId = cl.anReservationId
        where 1=1
        and cdt.acIntExt = 'EXT'
        and cl.anCarId = :car_id
        and r.anId = :reservation_id", ['reservation_id' => $id, 'car_id' => $reservation->anCarId]);

        $selected_int_car_damages_full = DB::connection($connection)->select("SELECT   cli.anDamageId ,cdr.acName, cdt.acType
        FROM [dbo].[_CarDamageList] cl
        inner join  [dbo].[_CarDamageListItems] cli on cl.anId	 = cli.anCarDamageId
        inner join _CarDamageRegister cdr on cdr.anId	 = cli.anDamageId
        inner join _CarDamageType cdt on cdt.anId = cli.anTypeId
        inner join _Reservations r on r.anId = cl.anReservationId
        where 1=1
        and cdt.acIntExt = 'INT'
        and cl.anCarId = :car_id
        and r.anId = :reservation_id", ['reservation_id' => $id, 'car_id' => $reservation->anCarId]);

        $car_damage = collect(DB::connection($connection)->select("SELECT cl.acKey,convert(varchar(20),cl.adDate,104)+' '+convert(varchar(8),convert(time,cl.adDate,108)) as adDate
        FROM [dbo].[_CarDamageList] cl inner join _Reservations r on r.anId = cl.anReservationId
        where 1=1 and cl.anCarId = :car_id
        and r.anId = :reservation_id", ['reservation_id' => $id, 'car_id' => $reservation->anCarId]))->first();




        $selected_ext_car_damages = array_column($selected_ext_car_damages_full, 'anDamageId');

        $databag = [
            'title' => $title, 'company_info' => $company_info, 'reservation' => $reservation, 'subject' => $subject, 'driver' => $driver,
            'car' => $car, 'items' => $items, 'currency' => $currency, 'total_value' => $total_value,
            'selected_ext_car_damages' => $selected_ext_car_damages, 'car_damage' => $car_damage,
            'selected_ext_car_damages_full' => $selected_ext_car_damages_full,
            'selected_int_car_damages_full' => $selected_int_car_damages_full, 'is_until_reg_end' => $is_until_reg_end
        ];



        return $databag;
    }
}
