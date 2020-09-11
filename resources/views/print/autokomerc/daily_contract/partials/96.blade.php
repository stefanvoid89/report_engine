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

        <td style="width:20%">Br. šasije / Chassis Nr:&nbsp; <span
                style="font-weight: bold">{{$databag->car->acChasis}}</span></td>
        <td style="width:30%">Reg br / Plate Nr:&nbsp; <span style="font-weight: bold">{{$databag->car->acRegNo}}</span>
        </td>
    </tr>
    @if(count($databag->replacements)>0)
    <tr>
        <td colspan="4"><i class="fas fa-car-alt "></i>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;<i
                class="fas fa-car-alt "></i> &nbsp;ZAMENA VOZILA / VEHICLE REPLACEMENT</td>
    </tr>
    @foreach($databag->replacements as $replacement)
    <tr>
        <td style="width:20%">Datum / Date: &nbsp;<span style="font-weight: bold">{{$replacement->adDate}}</span></td>
        <td style="width:30%">Model: &nbsp;<span style="font-weight: bold">{{$replacement->acCarNameShort}}</span>
        </td>

        <td style="width:20%">Br. šasije / Chassis Nr:&nbsp; <span
                style="font-weight: bold">{{$replacement->acChasis}}</span></td>
        <td style="width:30%">Reg br / Plate Nr:&nbsp; <span style="font-weight: bold">{{$replacement->acRegNo}}</span>
        </td>
    </tr>
    @endforeach
    @endif
    <tr>
        <td>
            <div style="height:15px"></div>
        </td>
    </tr>


</table>