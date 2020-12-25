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
        <td>&nbsp;</td>
    </tr>
</table>

<table class="parent" id="pozicije_table" style="width:100%;font-size:7pt;line-height: 16px;">
    <thead style="border:1px solid black; background:lightgrey">

        <tr>
            <th style="width:100px;text-align: left">Vozilo </th>
            <th style="text-align: left"> Marka i model </th>
            <th style="width:100px;text-align: left">Ugovor </th>
            <th style="width:120px;text-align: left">Datum od</th>
            <th style="width:120px;text-align: left">Datum do</th>
            <th style="width:60px;text-align: center">Km od</th>
            <th style="width:60px;text-align: right">Km do</th>
            <th style="width:60px;text-align: right">Km</th>
            <th style="width:60px;text-align: right">Total</th>
            <th style="width:60px;text-align: right">Total RSD</th>

        </tr>
    </thead>

    <tbody>

        @foreach($databag->contracts as $contract)

        <tr>
            <th style="width:100px;text-align: left">{{$contract->reg_br}} </th>
            <th style="text-align: left"> {{$contract->vozilo}} </th>
            <th style="width:100px;text-align: left"> {{$contract->ugovor}} </th>
            <th style="width:120px;text-align: left"> {{$contract->datum_od}} </th>
            <th style="width:120px;text-align: left">{{$contract->datum_do}} </th>
            <th style="width:60px;text-align: right">{{number_format($contract->km_od,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->km_do,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->km,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->vrednost_eur,2)}}</th>
            <th style="width:60px;text-align: right">{{number_format($contract->vrednost_rsd,2)}}</th>
        </tr>
        @endforeach

        <tr>
            <td colspan="10">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td colspan="3">Ukupno:</td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["sum_eur"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["sum_rsd"],2)	}} </td>



        </tr>



    </tbody>
</table>