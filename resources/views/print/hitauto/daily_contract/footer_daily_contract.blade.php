<table style="font-size:12px; text-align:left;width:100%;opacity: 0.5;">



    <tr>
        <td>
            <div style="display: flex; justify-content:space-around">
                <div><span style="font-size: 12px;font-weight: bold;">{{$databag->company_info->acName}}</span></div>
                <div>Tel:
                    {{$databag->company_info->acPhone}}</div>
                <div> E-mail: {{$databag->company_info->acEmail}}</div>
                <div> Adresa:
                    {{$databag->company_info->acAddress}} {{$databag->company_info->acCity}}</div>

            </div>

        </td>


    </tr>

</table>