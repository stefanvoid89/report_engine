<table style="width:100%">
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
            <div>E-mail: {{$databag->company_info->acEmail}}</div>
            <div>TR:{{$databag->company_info->acAccontNr}}</div>
        </td>
    </tr>

</table>