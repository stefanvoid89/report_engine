<?php

namespace App\Data\common;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class DailyInvoice extends DataInterface
{
    public  function getData($params)
    {

        $id = $params->id;

        $title = "Stampa izvestaja";


        $company_info = collect(DB::select("SELECT acName, acAddress, acCode, acRegNo, acPhone, acPost,acCity, acFax, acAccontNr,acWebSite
        from _Subjects where anId = 1"))->first();


        $databag = [
            'title' => $title, 'company_info' => $company_info
        ];



        return $databag;
    }
}
