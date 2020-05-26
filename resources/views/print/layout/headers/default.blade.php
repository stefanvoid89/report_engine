<table id="header" style="width:100%">
    <tr>
        <td align="left" width="30%">

            <img id="logo-image" src="/images/logo.png" style="height: 15mm;" />

        </td>
        <td
            style="padding-left:4mm;padding-top: 2mm;padding-bottom: 2mm;font-size: 4pt;text-align: right;vertical-align: top ">
            <span style="margin-bottom:0px;font-size: 16pt;font-weight: bold;">{{$databag->company_info->acName}}</span>


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