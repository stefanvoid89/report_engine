<?php

namespace App\Data\miservice;

use Illuminate\Support\Facades\DB;
use App\Data\DataInterface;

class PartsInvoice implements DataInterface
{
    public  function getData($params, $connection)
    {
        $id = $params['id'];
        $currency = isset($params['currency']) ? $params['currency'] : null;
        $curr_sufix = '';


        $header = collect(DB::connection($connection)->select("EXEC _MiServicePartsHeader :id", ['id' => $id]))->first();
        $positions =  collect(DB::connection($connection)->select("EXEC _MiServicePartPositions :id", ['id' => $id]));

        if ($currency == 'eur') {
            $positions =  collect(DB::connection($connection)->select("EXEC _MiServicePartPositions :id", ['id' => $id]));
            $curr_sufix = 'EUR';
        }
        $positions_sum = $positions->firstWhere('RBR', '0');


        $var = "";

        $title = "Stampa ugovora";

        $marka = $header->Marca; // renault motrio dacia
        $location = $header->Lokacija; // sajmiste
        $kome_faktura = "vlasnik"; // platioc
        $mesto_prometa = $header->Mesto;


        $databag = [
            'title' => $title,
            'page' => (object) ['marka' => $marka, 'location' => $location, 'mesto_prometa' => $mesto_prometa, 'title' => $title, 'header' => $header],
            'content' => (object)['header' => $header, 'positions' => $positions, 'positions_sum' => $positions_sum, 'curr_sufix' => $curr_sufix]
        ];



        return $databag;
    }
}
