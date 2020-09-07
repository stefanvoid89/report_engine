<table style="width:100%">
    <tr>
        <td align="left" width="30%" id="logotd">
            <img id="logo" src="/images/{{$databag->logo}}" style="height:55px" />
        </td>
        <td style="font-size: 12px;text-align: right;vertical-align: top ">
            <span style="font-size: 17px;font-weight: bold;">{{$databag->company_info->acName}}</span>


            <br />Matični broj: {{$databag->company_info->acRegNo}}
            <br />PIB: {{$databag->company_info->acCode}}
            <br />{{$databag->company_info->acAddress}},{{$databag->company_info->acPost}}
            {{$databag->company_info->acCity}}
            <br />Tel: {{$databag->company_info->acPhone}}
            <br />Fax: {{$databag->company_info->acFax}}
            <br />E-mail: {{$databag->company_info->acEmail}}
            <br />TR:{{$databag->company_info->acAccontNr}}
        </td>
    </tr>

</table>