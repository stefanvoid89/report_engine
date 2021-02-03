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

<table class="parent" id="pozicije_table" style="width:100%;font-size:7pt;line-height: 16px;table-layout: fixed;">

    <colgroup>

        <col style="width: 80px;">
        <col style="width: 60px;">
        <col>
        <col style="width: 70px">
        <col style="width: 70px">
        <col style="width: 70px">
        <col style="width: 70px">
        <col style="width: 70px">
        <col style="width: 70px;">


    </colgroup>

    @foreach($databag->contracts as $key=>$lines)
    <tr>
        <td style="font-weight:bold">{{$lines->first()->Vozilo}}</td>
        <td colspan="2" style="font-weight:bold"> {{$lines->first()->Naziv}} </td>
        <td colspan="6"></td>

    </tr>

    <tr style="border:1px solid black; background:lightgrey">

        <td>Dokument</td>
        <td>Datum</td>
        <td>Subjekat</td>
        <td style=";text-align: right">Trosak EUR</td>
        <td style=";text-align: right">Trosak RSD</td>
        <td style=";text-align: right">Fakt. EUR</td>
        <td style=";text-align: right">Fakt. RSD</td>
        <td style=";text-align: right">RUC EUR</td>
        <td style=";text-align: right">RUC RSD</td>

    </tr>
    @foreach ($lines as $line)
    <tr>

        <td>{{$line->Dokument}}</td>
        <td>{{$line->Datum}}</td>
        <td>
            <div style="overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap; ">{{$line->Subjekat}}</div>
        </td>
        <td style=";text-align: right">{{number_format($line->Trosak_EUR,2)}}</td>
        <td style=";text-align: right">{{number_format($line->Trosak_RSD,2)}}</td>
        <td style=";text-align: right">{{number_format($line->Fakturisano_EUR,2)}}</td>
        <td style=";text-align: right">{{number_format($line->Fakturisano_RSD,2)}}</td>
        <td style=";text-align: right"></td>
        <td style=";text-align: right"></td>

    </tr>
    @endforeach
    <tr>
        <td colspan="3"></td>
        <td style=";text-align: right;font-weight:bold">{{number_format($lines->sum('Trosak_EUR'),2)}}</td>
        <td style=";text-align: right;font-weight:bold">{{number_format($lines->sum('Trosak_RSD'),2)}}</td>
        <td style=";text-align: right;font-weight:bold">{{number_format($lines->sum('Fakturisano_EUR'),2)}}</td>
        <td style=";text-align: right;font-weight:bold">{{number_format($lines->sum('Fakturisano_RSD'),2)}}</td>
        <td style=";text-align: right;font-weight:bold">
            {{number_format($lines->sum('Fakturisano_EUR') - $lines->sum('Trosak_EUR'),2)}}</td>
        <td style=";text-align: right;font-weight:bold">
            {{number_format($lines->sum('Fakturisano_RSD') - $lines->sum('Trosak_RSD'),2)}}</td>
    </tr>
    <tr>
        <td colspan="9" style="line-height: 5px">&nbsp;</td>
    </tr>

    @endforeach

    <tr>
        <td colspan="3" style=";text-align: right;font-weight:bold">Ukupno:</td>
        <td style=";text-align: right;font-weight:bold">{{number_format($databag->sum["tr_sum_eur"],2)}}</td>
        <td style=";text-align: right;font-weight:bold">{{number_format($databag->sum["tr_sum_rsd"],2)}}</td>
        <td style=";text-align: right;font-weight:bold">{{number_format($databag->sum["fk_sum_eur"],2)}}</td>
        <td style=";text-align: right;font-weight:bold">{{number_format($databag->sum["fk_sum_rsd"],2)}}</td>
        <td style=";text-align: right;font-weight:bold">
            {{number_format($databag->sum["ruc_eur"],2)}}</td>
        <td style=";text-align: right;font-weight:bold">
            {{number_format($databag->sum["ruc_rsd"],2)}}</td>
    </tr>
</table>