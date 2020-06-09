<table style="width:100%">
    <tr>
        <table id="top_header" style="width:100%">
            <tr>
                <td align="left" width="30%" id="logotd">
                    <img id="logo" src="/images/logo.png" style="height:55px" />
                </td>
                <td style="font-size: 12px;text-align: right;vertical-align: top ">
                    <span style="font-size: 22px;font-weight: bold;">{{$databag->company_info->acName}}</span>


                    <br />Matični broj: {{$databag->company_info->acRegNo}}
                    <br />PIB: {{$databag->company_info->acCode}}
                    <br />{{$databag->company_info->acAddress}},{{$databag->company_info->acPost}}
                    {{$databag->company_info->acCity}}
                    <br />Tel: {{$databag->company_info->acPhone}}
                    <br />Fax: {{$databag->company_info->acFax}}
                    <br />TR:{{$databag->company_info->acAccontNr}}
                </td>
            </tr>
        </table>
    </tr>



    <tr style="margin-top:1px">
        <td>

            <table id="kupac_table" style="font-size:8pt; margin-top: -1px;table-layout: fixed;width:100%;"
                class="table_border">

                <colgroup>
                    <col style="width:45%">
                    <col style="width:20%">
                    <col style="width:20%">
                    <col style="width:15%">
                </colgroup>

                <tr>

                    <td rowspan="3" style="vertical-align: top;border-bottom:none">

                        <div
                            style="font-size:10pt;border-collapse: collapse; width:100% ;padding-left: 5px;padding-top: 5px;">
                            <span style="font-size:12pt; font-weight: bold;">Klijent:</span>
                            <div>{{$databag->invoice_header->acName}}</div>
                            <div>{{$databag->invoice_header->acAddress}}</div>
                            <div>{{$databag->invoice_header->acPost}}
                                {{$databag->invoice_header->acCity}}
                            </div>
                            <div>PIB: {{$databag->invoice_header->acCode}}</div>
                            <div>Matični broj: {{$databag->invoice_header->acRegNo}}</div>
                        </div>

                    </td>

                    <td colspan="4" style="font-size:16pt;padding-top: 7px;">RAČUN &nbsp;&nbsp;&nbsp;
                        {{$databag->invoice_header->acKey}}
                    </td>

                </tr>
                <tr>

                    <td colspan="3">
                        <div style="text-align:left">Datum i mesto računa:</div>
                        <div style="text-align:center">{{$databag->invoice_header->adDate}} Beograd</div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div style="text-align:left">Način plaćanja:</div>
                        <div style="text-align:center">{{$databag->invoice_header->acPayType}}</div>
                    </td>
                    <td>
                        <div style="text-align:left">Uslov plaćanja:</div>
                        <div style="text-align:center">{{$databag->invoice_header->acPayCondition}}</div>
                    </td>
                    <td>
                        <div style="text-align:left">Stranica:</div>
                        <div style="text-align:center">#strana#</div>
                    </td>
                </tr>



                <tr>
                    <td style="vertical-align: bottom;border-top: none;">

                    </td>
                    <td colspan="3">
                        <div style="text-align:left">Usluzio vas je:</div>
                        <div style="text-align:center">{{$databag->invoice_header->acUser}}</div>
                    </td>


                </tr>
            </table>

            @if($databag->car)
            <table>
                <tr>
                    <td style="line-height: 5px;">&nbsp;</td>
                </tr>
            </table>
            <table id="vozilo_table" class="table_border"
                style="font-size:8pt;border-collapse: collapse;    margin-top: -1px; width:100%;border:1px solid black">

                <tr>
                    <td style=";width:45%; padding-left:5px">
                        <div style="text-align:left">Vozilo:</div>
                        <div style="text-align:center">{{$databag->car->acName}}</div>
                    </td>
                    <td style=";width:25%">
                        <div style="text-align:left">Registarska oznaka:</div>
                        <div style="text-align:center">{{$databag->car->acRegNo}}</div>
                    </td style=";width:20%">

                    <td>
                        <div style="text-align:left">Sasija:</div>
                        <div style="text-align:center">{{$databag->car->acChasis}}</div>
                    </td>
                </tr>

            </table>
            @endif
            <table>
                <tr>
                    <td style="line-height: 5px;">&nbsp;</td>
                </tr>
            </table>
        </td>


    </tr>



</table>
