<table class="parent" id="title_table">
    <tr>
        <td style="width:50%;font-size: 14pt;font-weight:bold;vertical-align: top">
            {{$databag->title}}
        </td>
        <td style="width:50%">
            <table style="width:100%;font-size:7pt">
                <tr>
                    <td style="width:40%;vertical-align: top">Preduzeće:</td>
                    <td>
                        <div>
                            <div>{{$databag->company_info->acName}}
                            </div>
                            <div>{{$databag->company_info->acAddress}}
                            </div>
                            <div>{{$databag->company_info->acPost}}
                                {{$databag->company_info->acCity}}</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Datum ispisa:
                    </td>
                    <td> {{ date('d.m.Y H:i:s') }}</td>
                </tr>
                <tr>
                    <td>Parametri:</td>
                    <td>{{$databag->parameters}}</td>
                </tr>
            </table>

        </td>
    </tr>
</table>
@foreach($databag->invoices as $key=>$currency)
<table class="parent" id="currency_table" style="width:100%;font-size:8pt;line-height: 20px">

    <tr>
        <td style="font-weight: bold"> Valuta: {{$key}}</td>
    </tr>

</table>
<table class="parent" id="pozicije_table" style="width:100%;font-size:7pt;line-height: 16px;">
    <thead style="border:1px solid black; background:lightgrey">

        <tr>
            <th style="width:65px;text-align: center">Datum </th>
            <th style="width:90px;text-align: left"> Račun </th>
            <th style="width:90px;text-align: left"> Vozilo</th>
            <th style=";text-align: left"> Klijent </th>
            <th style="width:60px;text-align: right">Kurs</th>
            <th style="width:60px;text-align: right">Vrednost</th>
            <th style="width:60px;text-align: right">PDV</th>
            <th style="width:60px;text-align: right">Total</th>
            <th style="width:90px;text-align: right">Vrednost RSD</th>
            <th style="width:90px;text-align: right">PDV RSD</th>
            <th style="width:90px;text-align: right">Total RSD</th>
        </tr>
    </thead>

    <tbody>

        @foreach($currency as $invoice)

        <tr>
            <td style="width:65px;text-align: center"> {{$invoice->Datum}} </td>
            <td style="width:90px;text-align: left"> {{$invoice->Racun	}} </td>
            <td style="width:90px;text-align: left"> {{$invoice->Vozilo}} </td>
            <td style=";text-align: left"> {{$invoice->Dobavljac}} </td>
            <td style="width:60px;text-align: right"> {{number_format($invoice->Kurs,2)}} </td>
            <td style="width:60px;text-align: right"> {{number_format($invoice->Vrednost,2)}} </td>
            <td style="width:60px;text-align: right"> {{number_format($invoice->PDV,2)	}} </td>
            <td style="width:60px;text-align: right"> {{number_format($invoice->PDV_RSD,2)	}} </td>
            <td style="width:90px;text-align: right"> {{number_format($invoice->Vrednost_RSD,2)	}} </td>
            <td style="width:90px;text-align: right"> {{number_format($invoice->PDV_RSD,2)	}} </td>
            <td style="width:90px;text-align: right"> {{number_format($invoice->Total_RSD,2)	}} </td>
        </tr>
        @endforeach

        @php
        $anValueRSD = (isset($anValueRSD) ? $anValueRSD : 0) + $currency->sum('Vrednost_RSD') ;
        $anVatValueRSD = (isset($anVatValueRSD) ? $anVatValueRSD : 0) + $currency->sum('PDV_RSD') ;
        $anTotalValueRSD = (isset($anTotalValueRSD) ? $anTotalValueRSD : 0) + $currency->sum('Total_RSD') ;
        @endphp
        <tr>
            <td colspan="3"></td>
            <td style="text-align: left;font-weight:bold">Ukupno {{$key}}:</td>
            <td> </td>
            <td style="width:60px;text-align: right;font-weight:bold"> {{number_format($currency->sum('Vrednost'),2)}}
            </td>
            <td style="width:60px;text-align: right;font-weight:bold">
                {{number_format($currency->sum('PDV'),2)	}} </td>
            <td style="width:60px;text-align: right;font-weight:bold">
                {{number_format($currency->sum('Total'),2)	}} </td>
            <td style="width:90px;text-align: right;font-weight:bold">
                {{number_format($currency->sum('Vrednost_RSD'),2)	}} </td>
            <td style="width:90px;text-align: right;font-weight:bold">
                {{number_format($currency->sum('PDV_RSD'),2)	}} </td>
            <td style="width:90px;text-align: right;font-weight:bold">
                {{number_format($currency->sum('Total_RSD'),2)	}} </td>
        </tr>
    </tbody>
</table>
@endforeach
<table class="parent" style="width:100%;font-size:7pt">
    <tbody>
        <tr>
            <td colspan="11">&nbsp;</td>
        </tr>
        <tr>
            <td style="width:67px;text-align: center"> </td>
            <td style="width:92px;text-align: left"> </td>
            <td style="width:92px;text-align: left"> </td>
            <td style="text-align: left;font-weight:bold">Ukupno sve:</td>
            <td style="width:60px;text-align: right"></td>
            <td style="width:60px;text-align: right;font-weight:bold">
            </td>
            <td style="width:60px;text-align: right;font-weight:bold">
            </td>
            <td style="width:60px;text-align: right;font-weight:bold">
            </td>

            <td style="width:90px;text-align: right;font-weight:bold">
                {{number_format($anValueRSD ?? 0,2)	}} </td>
            <td style="width:90px;text-align: right;font-weight:bold">
                {{number_format($anVatValueRSD ?? 0,2)	}} </td>
            <td style="width:90px;text-align: right;font-weight:bold">
                {{number_format($anTotalValueRSD ?? 0,2)	}} </td>
        </tr>
    </tbody>
</table>