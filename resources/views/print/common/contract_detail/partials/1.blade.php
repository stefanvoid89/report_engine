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
            <th style="width:95px;text-align: left">Dokument </th>
            <th style="width:90px;text-align: left"> Tip ugovora </th>
            <th style="width:90px;text-align: left"> Vozilo</th>
            <th style=";text-align: left"> Klijent </th>
            <th style="width:60px;text-align: left">Datum od</th>
            <th style="width:60px;text-align: left">Datum do</th>
            <th style="width:30px;text-align: center">JM</th>
            <th style="width:60px;text-align: right">Kol</th>
            <th style="width:60px;text-align: right">Cena</th>
            <th style="width:60px;text-align: right">Vrednost</th>
            <th style="width:60px;text-align: right">Vr. dodataka</th>
            <th style="width:60px;text-align: right">PDV</th>
            <th style="width:60px;text-align: right">Total</th>
            <th style="width:90px;text-align: center">Status</th>
        </tr>
    </thead>

    <tbody>

        @foreach($databag->contracts as $contract)

        <tr>
            <th style="width:95px;text-align: left">{{$contract->Dokument}} </th>
            <th style="width:90px;text-align: left"> {{$contract->Tip}} </th>
            <th style="width:90px;text-align: left"> {{$contract->Vozilo}} </th>
            <th style=";text-align: left"> {{$contract->Klijent}} </th>
            <th style="width:60px;text-align: left">{{$contract->Od}} </th>
            <th style="width:60px;text-align: left">{{$contract->Do}} </th>
            <th style="width:30px;text-align: center">{{$contract->JM}} </th>
            <th style="width:60px;text-align: right">{{number_format($contract->Kol,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->Cena,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->Vrednost,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->Dodatak,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->PDV,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->Total,2)}}</th>
            <th style="width:90px;text-align: center">{{$contract->Status}}</th>
        </tr>
        @endforeach

        <tr>
            <td colspan="14">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="6"></td>
            <td colspan="3">Ukupno sve:</td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["sum_value"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["sum_additional"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["sum_pdv"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["sum_total"],2)	}} </td>



        </tr>



    </tbody>
</table>