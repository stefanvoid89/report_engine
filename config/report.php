<?php

return [


    "GY5M3YBrHuRdN1zMjD3mTOwe1PbNvEET77MzkaCwe507yMLcFD" => [
        "connection" => "hitauto",
        "db" => "mirent_hitauto",
        'logo' => "hitauto_logo.png",
        "reports" => [
            'daily_contract' => ["class" => App\Data\common\DailyContract::class, "path" => null],
            'daily_invoice' => ["class" => App\Data\hitauto\DailyInvoice::class, "path" => 'hitauto/daily_invoice'],
        ]
    ],
    "QeJvjtrqGHafBsNNzYlC4jbkAVryldEudUkETAJsT2Sl8AU3gE" => [
        "connection" => "autokomerc",
        "db" => "mirent_autokomerc",
        'logo' => "autokomerc_logo.png",
        "reports" => [
            'daily_contract' => ["class" => App\Data\autokomerc\DailyContract::class, "path" => 'autokomerc/daily_contract'],
            'daily_invoice' => ["class" => App\Data\common\DailyInvoice::class, "path" => null],
        ]
    ],

    "TcRWeZ3sjvjuYp1EOMfwX6Ksn7J5xtu4yPAblWp6aiik7kaQM1" => [
        "connection" => "autofleet",
        "db" => "mirent_autofleet",
        'logo' => "autofleet_logo.png",
        "reports" => [
            'daily_contract' => ["class" => App\Data\common\DailyContract::class, "path" => null],
            'daily_invoice' => ["class" => App\Data\common\DailyInvoice::class, "path" => null],
            'long_term_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/long_term_contract'],
        ]
    ],



];
