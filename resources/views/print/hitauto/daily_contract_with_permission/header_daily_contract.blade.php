<table style="width:100%;font-family: Arial, Helvetica, sans-serif">
    <tr>
        <td align="left" width="35%" id="logotd">
            <div style="display: flex;justify-content: space-between;align-items: center">
                <div>
                    <img id="logo" src="/images/renault_logo.png" style="height:85px" />
                </div>
                <div style="font-size: 1.75rem;font-weight:700">
                    HIT AUTO
                </div>
            </div>


        </td>
        <td style="font-size: 12px;text-align: right;vertical-align: top ">

            <div><span style="font-size: 17px;font-weight: bold;">{{$databag->company_info->acName}}</span>
            </div>
            <div style="font-size: 0.7rem">Ovlašćeni prodavac i servis za vozila Renault, Nissan i Dacia</div>

            <div style="line-height: 1.5rem">{{$databag->company_info->acAddress}}, {{$databag->company_info->acPost}}
                {{$databag->company_info->acCity}}</div>
            <div>tel: {{$databag->company_info->acPhone}}</div>
            <div>fax: {{$databag->company_info->acFax}}</div>



        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div style="height:30px"></div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <hr>
        </td>

    </tr>

</table>