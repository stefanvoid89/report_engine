<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PrintController extends Controller
{


    public function index($slug)
    {

        $slug_parsed =  preg_replace('/-/', '_', $slug);



        $title = "Stampa ugovora";



        $header = view('print.layout.headers.default', [])->render();
        $footer = view('print.layout.footers.default', [])->render();

        $page = view('print.layout.main', ['header' => $header, 'footer' => $footer, 'padding' => 15])->render();

        $config = ['conf1' => 1, "conf2" => "ovo je conf2"];


        $partials = [];
        $nodes = [];

        $path = resource_path('views\\print\\reports\\daily_invoice\\partials');

        foreach (File::allFiles($path) as $file) {
            array_push($partials, $file->getBasename('.blade.php'));
        }


        //dd($partials);
        //  dd($slug_parsed);

        foreach ($partials as $partial) {

            $rendered = view('print.reports.daily_invoice.partials.' . $partial, [])->render();

            array_push($nodes, $rendered);
        }
        // dd($nodes);





        $data = ["config" => $config, "nodes" => $nodes, "page" => $page];



        return view("print.main", ['title' => $title, 'data' => collect($data)]);
    }


    public function somefunctin()
    {

        $title = "Stampa ugovora";

        $company_info = collect(DB::select("SELECT acName, acAddress, acCode, acRegNo, acPhone, acPost,acCity, acFax, acAccontNr,acWebSite
        from _Subjects where anId = 1"))->first();

        $header = (object) ["company_info" => $company_info];


        $page_html = view("print.layouts.page_contract_daily", ['header' => $header])->render();

        $reservation = collect(DB::select("SELECT r.acKey, r.anSubjectId
        ,convert(varchar(20),r.adDateFrom,104)+' '+convert(varchar(5),convert(time,r.adDateFrom,108)) as adDateFrom
        ,convert(varchar(20),r.adDateTo,104)+' '+convert(varchar(5),convert(time,r.adDateTo,108))  as adDateTo
        ,r.anCarId , u.acName + ' ' + u.acSurname as acUser, right(convert(char(10),adDateExpCreditCard,103),7) as adDateExpCreditCard
        ,cct.acName as acCreditCard, r.acCreditCardNo, r.acCVV,r.acCreditCardHolder, r.anDeposit, r.anDriverId
        , FORMAT(anMilleageFrom,'#,0') as anMilleageFrom ,acTankFrom
        from _Reservations r inner join _Users u on r.anUserIns = u.anId
        inner join _CreditCardTypes cct on cct.anId = r.anCreditCardTypeId
        where r.anId = :id", ['id' => $id]))->first();


        $subject = collect(DB::select("SELECT s.anId, s.acName, s.anSubjectTypeId ,s.acId, s.acAddress, s.acCity, s.acPhone,s.acCode, s.acRegNo
        from _Subjects s inner join
        _SubjectTypes st on st.anId = s.anSubjectTypeId
        where s.anId = :subject_id", ['subject_id' => $reservation->anSubjectId]))->first();

        $driver = collect(DB::select("SELECT acName ,acId, acDriverLicence,acAddress,acPhone,
        convert(varchar(20),adDateOfBirth,104) as adDateOfBirth from _Drivers
        where anId = :driver_id", ['driver_id' => $reservation->anDriverId]))->first();

        $car =  collect(DB::select("SELECT acCarNameShort, acChasis,acRegNo from _v_CarExtended
        where anId = :car_id", ['car_id' => $reservation->anCarId]))->first();


        $currency = '€';

        $items = collect(DB::select("SELECT ROW_NUMBER() over(order by anNo) as anNo, acName,anQty, acUm,
        cast(anPrice as decimal(10,2)) as anPrice,cast(anValue as decimal(10,2)) as anValue  from (
        SELECT 0 as anNo, q.acName , r.anQty , q.acUm ,
        r.anPrice * ((100.00-isnull(r.anRebate,0))/100.00) as anPrice ,r.anPrice * ((100.00-isnull(r.anRebate,0))/100.00)  * r.anQty as anValue
        from _Reservations r
        inner join _Vat	 v on v.anId = r.anVatId
        cross apply (SELECT anId, acName ,acUm from _SetItem where acIdent = 'Najam')q
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
        cross apply (SELECT anId from _SetItem where acIdent = 'Dodatna oprema')q
        where r.anId = :reservation_id2
        )q", ['reservation_id1' => $id, 'reservation_id2' => $id]));


        $total_value = collect(DB::select("SELECT r.anValue,r.anVatValue,r.anTotalValue, cast(v.anVat as char) as acVat from _Reservations r
        inner join _Vat v on r.anVatId = v.anId
        where r.anId = :reservation_id", ['reservation_id' => $id]))->first();


        $selected_ext_car_damages_full = DB::select("SELECT   cli.anDamageId ,cdr.acName, cdt.acType
        FROM [dbo].[_CarDamageList] cl
        inner join  [dbo].[_CarDamageListItems] cli on cl.anId	 = cli.anCarDamageId
        inner join _CarDamageRegister cdr on cdr.anId	 = cli.anDamageId
        inner join _CarDamageType cdt on cdt.anId = cli.anTypeId
		inner join _Reservations r on r.anId = cl.anReservationId
        where 1=1
        and cdt.acIntExt = 'EXT'
        and cl.anCarId = :car_id
        and r.anId = :reservation_id", ['reservation_id' => $id, 'car_id' => $reservation->anCarId]);

        $selected_int_car_damages_full = DB::select("SELECT   cli.anDamageId ,cdr.acName, cdt.acType
        FROM [dbo].[_CarDamageList] cl
        inner join  [dbo].[_CarDamageListItems] cli on cl.anId	 = cli.anCarDamageId
        inner join _CarDamageRegister cdr on cdr.anId	 = cli.anDamageId
        inner join _CarDamageType cdt on cdt.anId = cli.anTypeId
        inner join _Reservations r on r.anId = cl.anReservationId
        where 1=1
        and cdt.acIntExt = 'INT'
        and cl.anCarId = :car_id
        and r.anId = :reservation_id", ['reservation_id' => $id, 'car_id' => $reservation->anCarId]);

        $car_damage = collect(DB::select("SELECT cl.acKey,convert(varchar(20),cl.adDate,104)+' '+convert(varchar(8),convert(time,cl.adDate,108)) as adDate
        FROM [dbo].[_CarDamageList] cl inner join _Reservations r on r.anId = cl.anReservationId
        where 1=1 and cl.anCarId = :car_id
        and r.anId = :reservation_id", ['reservation_id' => $id, 'car_id' => $reservation->anCarId]))->first();


        $selected_ext_car_damages = array_column($selected_ext_car_damages_full, 'anDamageId');

        // dd($page_html);

        $html_to_props = view("print.content.contract_daily_print", [
            'reservation' => $reservation, 'subject' => $subject, 'driver' => $driver,
            'car' => $car, 'items' => $items, 'currency' => $currency, 'total_value' => $total_value,
            'selected_ext_car_damages' => $selected_ext_car_damages, 'car_damage' => $car_damage,
            'selected_ext_car_damages_full' => $selected_ext_car_damages_full,
            'selected_int_car_damages_full' => $selected_int_car_damages_full
        ])->render();

        // dd($html_to_props);

        // $render = view("print.render.render", [
        //     'title' => $title, 'prop_data' => collect(['html_prop' => $html_to_props, 'page' => $page_html])
        // ])->render();

        // dd($render);

        // return $render;


        return view("print.render.render", [
            'title' => $title, 'prop_data' => collect(['html_prop' => $html_to_props, 'page' => $page_html])
        ]);
    }
}
