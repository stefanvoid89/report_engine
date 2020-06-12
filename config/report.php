<?php

return [


    "GY5M3YBrHuRdN1zMjD3mTOwe1PbNvEET77MzkaCwe507yMLcFD" => [
        "connection" => "hitauto",
        "db" => "mirent_hitauto",
        "reports" => [
            'daily_contract' => ["class" => App\Data\common\DailyContract::class, "path" => null],
            'daily_invoice' => ["class" => App\Data\hitauto\DailyInvoice::class, "path" => 'hitauto/daily_invoice'],
        ]
    ],
    "QeJvjtrqGHafBsNNzYlC4jbkAVryldEudUkETAJsT2Sl8AU3gE" => [
        "connection" => "autokomerc",
        "db" => "mirent_autokomerc",
        "reports" => [
            'daily_contract' => ["class" => App\Data\autokomerc\DailyContract::class, "path" => 'autokomerc/daily_contract'],
            'daily_invoice' => ["class" => App\Data\common\DailyInvoice::class, "path" => null],
        ]
    ],

    "TcRWeZ3sjvjuYp1EOMfwX6Ksn7J5xtu4yPAblWp6aiik7kaQM1" => [
        "connection" => "autofleet",
        "db" => "mirent_autofleet",
        "reports" => [
            'daily_contract' => ["class" => App\Data\common\DailyContract::class, "path" => ""],
        ]
    ],



];
