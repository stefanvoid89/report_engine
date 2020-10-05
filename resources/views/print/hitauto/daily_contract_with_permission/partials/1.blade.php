<table cellspacing="0" cellpadding="0" class="parent whole_page " style="font-family: Arial, Helvetica, sans-serif">
    <tbody>
        <tr>
            <td>
                <div style="height: 100px"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-weight:600;font-size:1.1rem;letter-spacing:10px">
                OVLAŠĆENJE
            </td>
        </tr>

        <tr>
            <td>
                <div style="height:100px"></div>
            </td>
        </tr>

        <tr>
            <td style="text-align:justify ">
                Ovlašćuje se <span style="font-weight: bold">{{$databag->driver->acName}}</span> , JMBG <span
                    style="font-weight: bold">{{$databag->driver->acId}}</span>
                , br vozačke <span style="font-weight: bold">{{$databag->driver->acDriverLicence}}</span>,
                važi do <span style="font-weight: bold">{{$databag->driver->adDriverLicenceExpDate}}</span>
                ,{{$databag->driver->acAddress}},
                da može koristiti kao test vozilo, naše službeno motorno vozilo :
            </td>
        </tr>

        <tr>
            <td>
                <div style="height:30px"></div>
            </td>
        </tr>


        <tr>
            <td>
                <div style="padding-left:20px">
                    <div> - <span style="font-weight: bold">{{$databag->car->acCarNameShort}}</span></div>
                    <div>- reg br <span style="font-weight: bold">{{$databag->car->acRegNo}}</span> </div>
                    <div>- šasija <span style="font-weight: bold">{{$databag->car->acChasis}}</span> </div>
                    <div>- kilometraža <span style="font-weight: bold">{{$databag->reservation->anMilleageFrom}}
                            km</span>
                    </div>
                </div>


            </td>
        </tr>

        <tr>
            <td>
                <div style="height:30px"></div>
            </td>
        </tr>



        <tr>
            <td style="font-weight: bold">
                Ovlašćenje važi od {{$databag->reservation->adDate}}. god od {{$databag->reservation->adTime}} h do
                isteka registracije na teritoriji Republike Srbije.
            </td>
        </tr>

        <tr>
            <td>
                <div style="height:30px"></div>
            </td>
        </tr>



        <tr>
            <td>
                Ovlašćeno lice se obavezuje da poštuje preporuke proizvođača {{$databag->car->acBrand}} o kvalitetu
                sipanog goriva
                @if($databag->car->anFuelTypeId == 1) (<span style="font-weight: bold"> ISKLJUČIVO BENZIN</span> )
                @elseif($databag->car->anFuelTypeId == 2)
                (<span style="font-weight: bold">ISKLJUČIVO DIZEL</span> ) @endif i da čuva primerke računa o
                sipanom gorivu.

            </td>
        </tr>
        <tr>
            <td>
                <div style="height:30px"></div>
            </td>
        </tr>



        <tr>
            <td>
                Korisnik se obavezuje da poštuje pravila u saobraćaju i prilikom parkiranja u gradskim zonama. Sve
                eventualne kazne nastale za vreme korišćenja vozila snosi isključivo Korisnik.

            </td>
        </tr>


        <tr>
            <td>
                <div style="height:90px"></div>
            </td>
        </tr>

        <tr>
            <td>
                <div style="display: flex; justify-content: space-between">
                    <div>
                        <div style="text-align: center">Primio vozilo (potpis/datum) </div>
                        <div style="height:30px"></div>
                        <div>.............................................................</div>
                        <div style="text-align: center;line-height: 1.5rem">Beograd, {{$databag->reservation->adDate}}.
                            god, vreme
                            {{$databag->reservation->adTime}}h </div>
                    </div>
                    <div>
                        <div style="text-align: center">Vratio vozilo (potpis/datum) </div>
                        <div style="height:30px"></div>
                        <div>..............................................................</div>
                        <div style="text-align: center;line-height: 1.5rem">Beograd, .................. god, vreme
                            ............ </div>
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div style="height:50px"></div>
            </td>
        </tr>


        <tr>
            <td>
                <div style="display: flex; justify-content: center">
                    <div>
                        <div style="text-align: center">Izdao vozilo (potpis/datum) </div>
                        <div style="height:30px"></div>
                        <div>.............................................................</div>
                        <div style="text-align: center">HIT AUTO</div>
                    </div>

                </div>
            </td>
        </tr>










    </tbody>
</table>