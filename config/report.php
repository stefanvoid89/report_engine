<?php

return [


    "GY5M3YBrHuRdN1zMjD3mTOwe1PbNvEET77MzkaCwe507yMLcFD" => [
        "connection" => "hitauto",
        "db" => "mirent_hitauto",
        'logo' => "hitauto_logo.png",
        "reports" => [
            'daily_contract' => ["class" => App\Data\hitauto\DailyContract::class, "path" => 'hitauto/daily_contract'],
            'daily_contract_with_permission' => ["class" => App\Data\hitauto\DailyContract::class, "path" => 'hitauto/daily_contract_with_permission'],
            'daily_invoice' => ["class" => App\Data\hitauto\DailyInvoice::class, "path" => 'hitauto/daily_invoice'],
            'permission' => ["class" => App\Data\hitauto\Permission::class, "path" => 'hitauto/permission'],
            'sr_en_contract' => ["class" => App\Data\hitauto\LongTermContract::class, "path" =>  'hitauto/sr_en_contract'],
            'longterm_contract' => ["class" => App\Data\hitauto\LongTermContract::class, "path" =>  'hitauto/longterm_contract'],

            'invoice_detail' => ["class" => App\Data\common\InvoiceDetail::class, "path" =>  'common/invoice_detail'],
            'invoice_ident_sum' => ["class" => App\Data\common\InvoiceIdentSum::class, "path" =>  'common/invoice_ident_sum'],
            'invoice_rec_detail' => ["class" => App\Data\common\InvoiceRecDetail::class, "path" =>  'common/invoice_rec_detail'],
            'invoice_rec_pay' => ["class" => App\Data\common\InvoiceRecPay::class, "path" =>  'common/invoice_rec_pay'],
            'subject_invoice' => ["class" => App\Data\common\SubjectInvoice::class, "path" =>  'common/subject_invoice'],
            'subject_invoice_rec' => ["class" => App\Data\common\SubjectInvoiceRec::class, "path" =>  'common/subject_invoice_rec'],
            'contract_detail' => ["class" => App\Data\common\ContractDetail::class, "path" =>  'common/contract_detail'],
            'int_res_detail' => ["class" => App\Data\common\InternalReservationDetail::class, "path" =>  'common/int_res_detail'],
            'car_invoice_km' => ["class" => App\Data\common\CarInvoiceKm::class, "path" =>  'common/car_invoice_km'],


        ]
    ],
    "QeJvjtrqGHafBsNNzYlC4jbkAVryldEudUkETAJsT2Sl8AU3gE" => [
        "connection" => "autokomerc",
        "db" => "mirent_autokomerc",
        'logo' => "autokomerc_logo.png",
        "reports" => [
            'daily_contract' => ["class" => App\Data\autokomerc\DailyContract::class, "path" => 'autokomerc/daily_contract'],
            'daily_invoice' => ["class" => App\Data\autokomerc\DailyInvoice::class, "path" => "autokomerc/daily_invoice"],
            'permission' => ["class" => App\Data\autokomerc\Permission::class, "path" => 'autofleet/permission'],

            'invoice_detail' => ["class" => App\Data\common\InvoiceDetail::class, "path" =>  'common/invoice_detail'],
            'invoice_ident_sum' => ["class" => App\Data\common\InvoiceIdentSum::class, "path" =>  'common/invoice_ident_sum'],
            'invoice_rec_detail' => ["class" => App\Data\common\InvoiceRecDetail::class, "path" =>  'common/invoice_rec_detail'],
            'invoice_rec_pay' => ["class" => App\Data\common\InvoiceRecPay::class, "path" =>  'common/invoice_rec_pay'],
            'subject_invoice' => ["class" => App\Data\common\SubjectInvoice::class, "path" =>  'common/subject_invoice'],
            'subject_invoice_rec' => ["class" => App\Data\common\SubjectInvoiceRec::class, "path" =>  'common/subject_invoice_rec'],
            'contract_detail' => ["class" => App\Data\common\ContractDetail::class, "path" =>  'common/contract_detail'],
            'int_res_detail' => ["class" => App\Data\common\InternalReservationDetail::class, "path" =>  'common/int_res_detail'],
            'car_invoice_km' => ["class" => App\Data\common\CarInvoiceKm::class, "path" =>  'common/car_invoice_km'],
        ]
    ],

    "TcRWeZ3sjvjuYp1EOMfwX6Ksn7J5xtu4yPAblWp6aiik7kaQM1" => [
        "connection" => "autofleet",
        "db" => "mirent_autofleet",
        'logo' => "autofleet_logo.png",
        "reports" => [
            'daily_contract' => ["class" => App\Data\autofleet\DailyContract::class, "path" => "autofleet/daily_contract"],
            'daily_invoice' => ["class" => App\Data\autofleet\DailyInvoice::class, "path" => 'autofleet/daily_invoice'],
            'energy_net_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/energy_net_contract'],
            'fiat_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/fiat_contract'],
            'demo_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/demo_contract'],
            'fiat_offer' => ["class" => App\Data\autofleet\FiatOffer::class, "path" =>  'autofleet/fiat_offer'],
            'sr_en_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/sr_en_contract'],
            'suez_contract' => ["class" => App\Data\autofleet\LongTermContract::class, "path" =>  'autofleet/suez_contract'],
            'permission' => ["class" => App\Data\autofleet\Permission::class, "path" => 'autofleet/permission'],

            'invoice_detail' => ["class" => App\Data\common\InvoiceDetail::class, "path" =>  'common/invoice_detail'],
            'invoice_ident_sum' => ["class" => App\Data\common\InvoiceIdentSum::class, "path" =>  'common/invoice_ident_sum'],
            'invoice_rec_detail' => ["class" => App\Data\common\InvoiceRecDetail::class, "path" =>  'common/invoice_rec_detail'],
            'invoice_rec_pay' => ["class" => App\Data\common\InvoiceRecPay::class, "path" =>  'common/invoice_rec_pay'],
            'subject_invoice' => ["class" => App\Data\common\SubjectInvoice::class, "path" =>  'common/subject_invoice'],
            'subject_invoice_rec' => ["class" => App\Data\common\SubjectInvoiceRec::class, "path" =>  'common/subject_invoice_rec'],
            'contract_detail' => ["class" => App\Data\common\ContractDetail::class, "path" =>  'common/contract_detail'],
            'int_res_detail' => ["class" => App\Data\common\InternalReservationDetail::class, "path" =>  'common/int_res_detail'],
            'car_invoice_km' => ["class" => App\Data\common\CarInvoiceKm::class, "path" =>  'common/car_invoice_km'],
        ]
    ],

];
