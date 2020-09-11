<table style="width:100%">
    <tr>
        <table id="top_header" style="width:100%">
            <tr>
                <td align="left" width="30%" id="logotd">
                    <img id="logo" src="/images/{{$databag->logo}}" style="height:55px" />
                </td>
                <td style="font-size: 12px;text-align: right;vertical-align: top ">
                    <div><span style="font-size: 17px;font-weight: bold;">{{$databag->company_info->acName}}</span>
                    </div>
                    <div>Matični broj: {{$databag->company_info->acRegNo}}</div>
                    <div>PIB: {{$databag->company_info->acCode}}</div>
                    <div>{{$databag->company_info->acAddress}},{{$databag->company_info->acPost}}
                        {{$databag->company_info->acCity}}</div>
                    <div>Tel: {{$databag->company_info->acPhone}}</div>
                    <div>Fax: {{$databag->company_info->acFax}}</div>
                    <div>TR:{{$databag->company_info->acAccontNr}}</div>

                </td>
            </tr>
        </table>
    </tr>
    <tr>
        <td>
            <div style="height: 10px;"></div>
        </td>
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
                            style="font-size:12pt; font-weight: bold;padding-top:10px;padding-left: 10px;margin-bottom:20px">
                            Kupac:
                        </div>
                        <div style="padding-left: 45px;;padding-right:10px;font-size:12px;">
                            {{$databag->invoice_header->acName}}</div>
                        <div style="padding-left: 45px;;padding-right:10px;font-size:12px">
                            {{$databag->invoice_header->acAddress}}</div>
                        <div style="padding-left: 45px;;padding-right:10px;font-size:12px">
                            {{$databag->invoice_header->acPost}}
                            {{$databag->invoice_header->acCity}}
                        </div>
                        <div style="padding-left: 45px;;padding-right:10px;font-size:12px">PIB:
                            {{$databag->invoice_header->acCode}}</div>
                        <div style="padding-left: 45px;;padding-right:10px;font-size:12px">Matični broj:
                            {{$databag->invoice_header->acRegNo}}</div>

                    </td>

                    <td colspan="3" style="font-size:16pt;padding-top: 7px;">RAČUN &nbsp;&nbsp;&nbsp;
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



                <tr>
                    <td style=";width:45%; padding-left:5px">
                        <div style="text-align:left">Vozilo:</div>
                        <div style="text-align:center">{{$databag->car->acName}}</div>
                    </td>
                    <td style=";width:25%">
                        <div style="text-align:left">Registarska oznaka:</div>
                        <div style="text-align:center">{{$databag->car->acRegNo}}</div>
                    </td style=";width:20%">

                    <td colspan="2">
                        <div style="text-align:left">Datum prometa dobara i usluga:</div>
                        <div style="text-align:center">{{$databag->invoice_header->adDate}}</div>
                    </td>
                </tr>

            </table>


            <table>
                <tr>
                    <td style="line-height: 5px;">&nbsp;</td>
                </tr>
            </table>