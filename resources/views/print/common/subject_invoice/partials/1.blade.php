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
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
</table>

<table class="parent" id="pozicije_table" style="width:100%;font-size:7pt;line-height: 16px;">
    <thead style="border:1px solid black; background:lightgrey">

        <tr>
            <th style="text-align: left">Subjekat </th>
            <th style="width:65px;text-align: left"> Tip </th>
            <th style="width:90px;text-align: right">Vrednost RSD</th>
        </tr>
    </thead>

    <tbody>

        @foreach($databag->invoices as $invoice)

        <tr>

            <td style=";text-align: left"> {{$invoice->Klijent}} </td>
            <td style="width:65px;text-align: left"> {{$invoice->Tip}} </td>

            <td style="width:90px;text-align: right"> {{number_format($invoice->Total_RSD,2)	}} </td>

        </tr>
        @endforeach

        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>

        <tr>
            <td></td>
            <td>Ukupno sve:</td>
            <td style="text-align: right">{{number_format($databag->sum,2)	}} </td>
        </tr>



    </tbody>
</table>