<?php

namespace App\Data\miservice;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class Invoice implements DataInterface
{
    public  function getData($params, $connection)
    {


        $id = $params['id'];


        $header = collect(DB::connection($connection)->select("EXEC _MiServiceHeader :id", ['id' => $id]))->first();

        $positions =  collect(DB::connection($connection)->select("EXEC _MiServicePositions :id", ['id' => $id]));

        $positions_sum = $positions->firstWhere('RBR', '1');


        $var = "";

        $title = "Stampa ugovora";

        $marka = $header->Marca; // renault motrio dacia
        $location = $header->Lokacija; // sajmiste
        $kome_faktura = "vlasnik"; // platioc
        $mesto_prometa = $header->Mesto;


        // $page_html = view("print.layouts.page_invoice", ['marka' => $marka, 'location' => $location, 'mesto_prometa' => $mesto_prometa, 'title' => $title, 'header' => $header])->render();
        // $html_to_props = view("print.content.invoice_print", [
        //     'title' => $title, 'header' => $header, 'positions' => $positions, 'positions_sum' => $positions_sum
        // ])->render();

        // return view("print.render.render", [
        //     'title' => $title, 'prop_data' => collect(['html_prop' => $html_to_props, 'page' => $page_html])
        // ]);



        $databag = [
            'title' => $title,
            'page' => (object) ['marka' => $marka, 'location' => $location, 'mesto_prometa' => $mesto_prometa, 'title' => $title, 'header' => $header],
            'content' => (object)['header' => $header, 'positions' => $positions, 'positions_sum' => $positions_sum]
        ];



        return $databag;
    }
}
