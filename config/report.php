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
            'daily_invoice' => ["class" => App\Data\common\DailyInvoice::class, "path" => "autokomerc/daily_invoice"],
        ]
    ],

    "TcRWeZ3sjvjuYp1EOMfwX6Ksn7J5xtu4yPAblWp6aiik7kaQM1" => [
        "connection" => "autofleet",
        "db" => "mirent_autofleet",
        'logo' => "autofleet_logo.png",
        "reports" => [
            'daily_contract' => ["class" => App\Data\common\DailyContract::class, "path" => null],
            'daily_invoice' => ["class" => App\Data\hitauto\DailyInvoice::class, "path" => 'autofleet/daily_invoice'],
            'energy_net_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/energy_net_contract'],
            'fiat_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/fiat_contract'],
            'demo_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/demo_contract'],
            'fiat_offer' => ["class" => App\Data\autofleet\FiatOffer::class, "path" =>  'autofleet/fiat_offer'],
            'sr_en_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/sr_en_contract'],
        ]
    ],



];
