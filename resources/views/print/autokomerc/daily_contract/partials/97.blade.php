<table class="parent td_margin" style="width:100%;font-size:10px">
    <tr>
        <td style="width:20%"> <i class="fas fa-road "></i> &nbsp; KILOMETRAŽA / KMS</td>
        <td style="width:20%">Izlaz / Out &nbsp; <span
                style="font-weight: bold">{{$databag->reservation->anMilleageFrom}} </span></td>
        <td style="width:20%">Ulaz / In &nbsp; <span
                style="font-weight: bold">{{$databag->reservation->anMilleageTo}}</span></td>
        <td style="width:20%">Pređeno / Driven</td>
        <td style="width:20%">Preko / Over</td>
    </tr>
    <tr>
        <td style="width:20%"><i class="fas fa-filter"></i> &nbsp;GORIVO / FUEL</td>
        <td style="width:20%">Izlaz / Out &nbsp;<span
                style="font-weight: bold">{{$databag->reservation->acTankFrom}}</span></td>
        <td style="width:20%">Ulaz / In &nbsp;<span style="font-weight: bold">{{$databag->reservation->acTankTo}}</span>
        </td>
        <td style="width:20%">Utrošeno / Consumed</td>
        <td style="width:20%"></td>
    </tr>

    <tr>
        <td>
            <div style="height:15px"></div>
        </td>
    </tr>

</table>