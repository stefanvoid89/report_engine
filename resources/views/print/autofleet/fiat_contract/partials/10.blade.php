<table cellspacing="0" cellpadding="0" class="parent" style="font-size:11px;line-height:15px;text-align :justify">
    <thead></thead>
    <tbody>

        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">UGOVOR O ZAKUPU VOZILA br. {{$databag->reservation->acWorkOrder}}</span>
            </td>
        </tr>
        <td>
            <div class="spacer"></div>
        </td>
        <tr>
            <td>
                Ovaj ugovor o zakupu vozila br. {{$databag->reservation->acWorkOrder}}, (u daljem tekstu: Ugovor),
                zaključen je u Beogradu, dana {{$databag->reservation->adDateFrom}}.godine, između sledećih
                ugovornih strana:
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-weight: bold">{{$databag->company_info->acName}}</span> ,
                {{$databag->company_info->acCity}} ,
                {{$databag->company_info->acAddress}} ,
                MB:
                {{$databag->company_info->acRegNo}} ,
                PIB: {{$databag->company_info->acCode}} (u daljem tekstu: Zakupodavac) koga zastupa Dejan Dodić,
                direktor
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                i
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-weight: bold">{{$databag->subject->acName}}</span>,
                {{$databag->subject->acAddress}},{{$databag->subject->acCity}} ,
                MB:{{$databag->subject->acRegNo}} ,
                PIB: {{$databag->subject->acCode}} (u daljem tekstu: Zakupac) koga zastupa
                {{$databag->reservation->acCreditCardHolder}} , direktor
            </td>
        </tr>
        <tr>
            <td>
                (u daljem tekstu Zakupodavac i Zakupac će se zajednički označavati kao
                Ugovorne strane, a pojedinačno kao Ugovorna strana)
            </td>
        </tr>

        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold"> PRI ČEMU:</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">
                Zakupodavac je privredno društvo čija je osnovna delatnost davanje u zakup motornih vozila i druge
                opreme trećim licima (korisnicima) za određenu naknadu.
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">

                U cilju unapređenja svoje poslovne delatnosti Zakupodavac je ušao u odnos poslovne saradnje sa
                privrednim društvom CA Leasing Srbija, članicom Credit Agricole Groupe.
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">
                Zakupac je u potpunosti upoznat sa gore navedenim i voljan da uđe u pravni odnos sa Zakupodavcem, u
                skladu
                sa odredbama ovog Ugovora.
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">
                    IMAJUĆI U VIDU GORE NAVEDENO, UGOVORNE STRANE SU SE SPORAZUMELE KAKO SLEDI:
                </span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">

            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">PREDMET UGOVORA</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 1.</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td>
                Zakupodavac daje, a Zakupac uzima u zakup pod uslovima određenim ovim
                Ugovorom sledeći predmet zakupa:
            </td>
        </tr>
        <tr>

            <td>
                Vozilo novo: {{$databag->car->acCategory}}
            </td>
        </tr>
        <tr>
            <td>
                Marka: {{$databag->car->marka}}
            </td>
        </tr>
        <tr>
            <td>
                Boja: {{$databag->car->acColor}}
            </td>
        </tr>
        <tr>
            <td>
                Snaga: {{$databag->car->acPower}}
            </td>
        </tr>
        <tr>
            <td>
                Zapremina: {{$databag->car->zapremina}}
            </td>
        </tr>
        <tr>
            <td>
                Broj šasije: {{$databag->car->acChasis}}
            </td>
        </tr>
        <tr>
            <td>
                Broj motora: {{$databag->car->acEngine}}
            </td>
        </tr>
        <tr>
            <td>
                Godina proizvodnje: {{$databag->car->anYearOfManufacture}}
            </td>
        </tr>
        <tr>
            <td>
                Broj sedišta: {{$databag->car->anSeatsNo}}
            </td>
        </tr>
        <tr>
            <td>
                (u daljem tekstu: Vozilo)
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">TRAJANJE ZAKUPA I UPOTREBA VOZILA</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <strong> </strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 2.</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">
                Zakup počinje da teče danom potpisivanja ovog Ugovora i preuzimanja vozila
                i traje <span style="font-weight: bold">{{$databag->reservation->anQty}}</span> meseci.
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        @if($databag->reservation->anExpenses && $databag->reservation->anExpenses != 0 )
        <tr>
            <td class="indent">
                Prilikom potpisivanja Ugovora, Zakupac je dužan da uplati administrativne troškove za zakup Vozila, u
                iznosu od {{$databag->reservation->anExpenses}} eur u dinarskoj protivvrednosti, obračunat po srednjem
                kursu
                Narodne Banke Srbije sa pripadajućim PDV-om obračunat po važećoj stopi.
            </td>
        </tr>
        @endif
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">
                Za Vozilo iz ovog Ugovora godišnja kilometraža je ograničena {{$databag->reservation->anKmYear}} km na
                godišnjem nivou odnosno maksimalno {{$databag->reservation->anKmPeriod}} km za za ceo period trajanja
                zakupa.
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">
                U slučaju pređenih više kilometara u odnosu na kilometražu definisanu u
                prethodnom stavu Zakupac se obavezuje da Zakupodavcu isplati naknadu koja
                će se obračunati na sledeći način:
            </td>
        </tr>
        <tr>
            <td>
                Obračun više pređene km:
            </td>
        </tr>
        <tr>
            <td class="indent">
                Za vozilo <span style="font-weight: bold"> {{$databag->car->marka}}</span> je iznos od 0.10 u eur koji
                se obračunava po svakom više pređenom
                km.Tolerancija za čitav period trajanja svakog Ugovora o zakupu pojedinačno koja se ne računa već se
                klijentu priznaje je + 500 km.
            </td>
        </tr>
        <tr>
            <td class="indent">
                Po isteku Ugovora, Zakupac i Zakupodavac, ili od njega ovlašćeno lice
                potpisaće zapisnik o primopredaji Vozila.
            </td>
        </tr>
        <tr>
            <td>
                Zakupac ima pravo da koristi Vozilo u zemlji i inostranstvu.
            </td>
        </tr>

    </tbody>


</table>