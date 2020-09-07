<table class="parent" style="width:100%;font-size:12px">
    <tr>
        <td style="width:68%;vertical-align: top;">
            <table style="width:100%;font-size:12px">
                <tr>
                    <td style="font-weight:bold">Vozilo</td>
                </tr>
                <tr>
                    <td>Vozilo(marka,model,verzija)</td>
                    <td>{{$databag->car->acCarNameShort}}</td>
                </tr>
                <tr>
                    <td>Broj šasije:</td>
                    <td>{{$databag->car->acChasis}}</td>
                </tr>
                <tr>
                    <td>
                        Registarske oznake:
                    </td>
                    <td>{{$databag->car->acRegNo}}</td>
                </tr>

            </table>
        </td>
        <td style="width:4%"></td>

        <td style="width:38%;vertical-align: top;">
            <table style="width:100%;font-size:12px">
                <tr>
                    <td style="font-weight:bold">Stanje izdavanja</td>
                </tr>
                <tr>

                    <td>Km izlaz: </td>
                    <td>{{$databag->reservation->anMilleageFrom}}</td>
                </tr>
                <tr>
                    <td>Rezervoar:</td>
                    <td>{{$databag->reservation->acTankFrom}}</td>
                </tr>


            </table>
        </td>

    </tr>
    <tr>
        <td colspan="3">
            <hr class="thin">
        </td>
    </tr>


</table>