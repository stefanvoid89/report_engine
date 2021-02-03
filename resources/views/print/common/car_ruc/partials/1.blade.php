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
            <th style="width:100px;text-align: left">Tip </th>
            <th style="width:80px;text-align: right">Trosak EUR</th>
            <th style="width:80px;text-align: right">Fakturisano EUR</th>
            <th style="width:80px;text-align: right">RUC EUR</th>
            <th style="width:80px;text-align: right">Trosak RSD</th>
            <th style="width:80px;text-align: right">Fakturisano RSD</th>
            <th style="width:80px;text-align: center">RUC RSD</th>

        </tr>
    </thead>

    <tbody>

        @foreach($databag->contracts as $contract)

        <tr>
            <th style="width:100px;text-align: left">{{ $contract->Vozilo}} </th>
            <th style="text-align: left"> {{$contract->Naziv}} </th>
            <th style="width:100px;text-align: left">{{$contract->Tip}} </th>
            <th style="width:80px;text-align: right">{{number_format($contract->Trosak_EUR,2)}}</th>
            <th style="width:80px;text-align: right">{{number_format($contract->Fakturisano_EUR,2)}}</th>
            <th style="width:80px;text-align: right">{{number_format($contract->RUC_EUR,2)}}</th>
            <th style="width:80px;text-align: right">{{number_format($contract->Trosak_RSD,2)}}</th>
            <th style="width:80px;text-align: right">{{number_format($contract->Fakturisano_RSD,2)}}</th>
            <th style="width:80px;text-align: right">{{number_format($contract->RUC_RSD,2)}}</th>
        </tr>
        @endforeach

        <tr>
            <td colspan="10">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="2"></td>
            <td>Ukupno:</td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["tr_sum_eur"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["fk_sum_eur"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["ruc_eur"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["tr_sum_rsd"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["fk_sum_rsd"],2)	}} </td>
            <td style="text-align: right;font-weight:bold">{{number_format($databag->sum["ruc_rsd"],2)	}} </td>

        </tr>



    </tbody>
</table>