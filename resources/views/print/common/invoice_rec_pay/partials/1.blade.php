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

<table class="parent" id="pozicije_table" style="width:100%;font-size:7pt;line-height: 16px;">
    <thead style="border:1px solid black; background:lightgrey">

        <tr>
            <th style="width:65px;text-align: center">Datum </th>
            <th style="width:90px;text-align: left"> Račun </th>
            <th style="width:90px;text-align: left"> Vozilo</th>
            <th style="width:90px;text-align: left"> Tip</th>
            <th style=";text-align: left"> Klijent </th>
            <th style="width:60px;text-align: left">Valuta</th>
            <th style="width:60px;text-align: right">Kurs</th>
            <th style="width:60px;text-align: right">Vrednost Valuta</th>
            <th style="width:90px;text-align: right">Vrednost RSD</th>
        </tr>
    </thead>

    <tbody>

        @foreach($databag->invoices as $invoice)

        <tr>
            <td style="width:65px;text-align: center"> {{$invoice->adDateDue}} </td>
            <td style="width:90px;text-align: left"> {{$invoice->acKey	}} </td>
            <td style="width:90px;text-align: left"> {{$invoice->acRegNo}} </td>
            <td style=";text-align: left"> {{$invoice->acType}} </td>
            <td style=";text-align: left"> {{$invoice->acName}} </td>
            <td style=";text-align: left"> {{$invoice->acCurrency}} </td>

            <td style="width:60px;text-align: right"> {{number_format($invoice->anFxRate,2)}} </td>

            <td style="width:90px;text-align: right"> {{number_format($invoice->anValue,2)	}} </td>
            <td style="width:90px;text-align: right"> {{number_format($invoice->anValueRSD,2)	}} </td>

        </tr>
        @endforeach

        <tr>
            <td colspan="9">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td colspan="3">Ukupno sve:</td>
            <td style="text-align: right">{{number_format($databag->sum,2)	}} </td>
        </tr>



    </tbody>
</table>