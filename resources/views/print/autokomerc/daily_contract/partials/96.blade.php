<table class="parent td_margin" style="width:100%;font-size:10px">
    <tr>
        <td style="width:20%"> <i class="fas fa-map-marker-alt "></i> &nbsp; LOKACIJA / LOCATION</td>
        <td style="width:30%">Od / From: </td>
        <td style="width:30%">Do / To:</td>
        <td style="width:20%"></td>
    </tr>
    <tr>
        <td style="width:20%"><i class="fas fa-calendar-alt "></i> &nbsp;DATUMI / DATES</td>
        <td style="width:30%">Od / From: &nbsp; <span
                style="font-weight: bold">{{$databag->reservation->adDateFrom}}</span> </td>
        <td style="width:30%">Do / To: &nbsp;<span style="font-weight: bold">{{$databag->reservation->adDateTo}}</span>
        </td>
        <td style="width:20%">Dana / Days:&nbsp;<span style="font-weight: bold">{{$databag->reservation->anQty}}</span>
        </td>
    </tr>

    <tr>
        <td style="width:20%"><i class="fas fa-car-alt "></i> &nbsp;VOZILO / VEHICLE</td>
        <td style="width:30%">Model: &nbsp;<span style="font-weight: bold">{{$databag->car->acCarNameShort}}</span>
        </td>
        <td style="width:30%">Reg br / Plate Nr:&nbsp; <span style="font-weight: bold">{{$databag->car->acRegNo}}</span>
        </td>
        <td style="width:20%"></td>
    </tr>
    <tr>
        <td>
            <br style="line-height: 15px;">
        </td>
    </tr>


</table>