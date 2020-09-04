<table cellspacing="0" cellpadding="0" class="parent whole_page " id="sr_en">

    <tbody>


        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td style="width:50%;text-align: center;font-weight:bold">SCOPE</td>
            <td style="width:50%;text-align: center;font-weight:bold">PREDMET UGOVORA</td>
        </tr>
        <tr>
            <td style="width:50%;text-align: center;font-weight:bold">Article 1</td>
            <td style="width:50%;text-align: center;font-weight:bold">Član 1.</td>
        </tr>

        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>

        <tr>
            <td>This Agreement provides for the Parties’ mutual rights and responsibilities arising from their
                lessor/lessee relationship.</td>
            <td>Predmet ovog Ugovora je regulisanje međusobnih prava i obaveza koji proizilaze iz zakupodavnog odnosa
                ugovornih strana. </td>
        </tr>

        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td>In accordance with the provisions of the foregoing paragraph, the Lessor shall lease the following items
                to the Lessee under the terms and conditions set out herein:</td>
            <td>U skladu sa odredbama prethodnog stava Zakupodavac daje, a Zakupac uzima u zakup pod uslovima određenim
                ovim Ugovorom sledeće predmete zakupa:</td>
        </tr>

        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>

        </tr>

        <tr>
            <td>
                <div style="font-weight:bold">{{$databag->car->marka}}</div>
                <div>Chasis number: {{$databag->car->acChasis}}</div>
                <div>Plate number: {{$databag->car->acRegNo}}</div>
                <div>Engine number: {{$databag->car->acEngine}}</div>
                <div>Engine power: {{$databag->car->acPower}}</div>
                <div>Engine displacement: {{$databag->car->zapremina}}</div>
                <div>Vehicle colour: {{$databag->car->acColor}}</div>
                <div>No. Of seats: {{$databag->car->anSeatsNo}}</div>
                <div>Year of manufacture: {{$databag->car->anYearOfManufacture}}</div>

            </td>
            <td>
                <div style="font-weight:bold">{{$databag->car->marka}}</div>
                <div>Broj šasije: {{$databag->car->acChasis}}</div>
                <div>Registarski broj: {{$databag->car->acRegNo}}</div>
                <div>Broj motora: {{$databag->car->acEngine}}</div>
                <div>Snaga motora: {{$databag->car->acPower}}</div>
                <div>Zapremina motora: {{$databag->car->zapremina}}</div>
                <div>Boja vozila: {{$databag->car->acColor}}</div>
                <div>Broj sedišta: {{$databag->car->anSeatsNo}}</div>
                <div>Godina proizvodnje: {{$databag->car->anYearOfManufacture}}</div>

            </td>
        </tr>



        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td style="width:50%;text-align: center;font-weight:bold">USE OF VEHICLES</td>
            <td style="width:50%;text-align: center;font-weight:bold">UPOTREBA VOZILA</td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td style="width:50%;text-align: center;font-weight:bold">Article 2</td>
            <td style="width:50%;text-align: center;font-weight:bold">Član 2.</td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td>This Agreement does not and cannot confer on the Lessee the title to or the sole possession of the
                leased items; instead, the Lessee shall acquire solely the right to regularly use and operate the leased
                items as their holder throughout the term of this Lease Agreement and as long as it meets its
                contractual obligations owed to the Lessor.</td>
            <td>Zakupac na osnovu ovog Ugovora ne stiče niti može steći pravo svojine, niti isključivo pravo državine
                predmeta zakupa, već samo pravo upotrebe i redovnog korišćenja predmeta zakupa kao njegov neposredni
                držalac, i to za sve vreme trajanja Ugovora o zakupu, odnosno za sve vreme njegovog izvršavanja
                ugovornih obaveza prema Zakupodavcu.</td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td>The Lessee shall use the vehicles for their intended purpose, in accordance with the manufacturer’s
                operating instructions, with the required due care. </td>
            <td>Zakupac će predmetna vozila upotrebljavati u skladu sa njihovom namenom, u skladu sa uputstvima
                proizvodjača o načinu upotrebe vozila, sa pažnjom dobrog privrednika. </td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td>The Parties agree that the mileage of the vehicles referred to in Article 1 above shall be limited per
                vehicle types as follows:</td>
            <td>Ugovorne strane su se saglasile da je kilometraža za vozila iz člana 1. Ugovora ograničena po tipovima
                vozila, i to:</td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>





        <tr>
            <td>- {{$databag->car->brand}} up to {{$databag->reservation->anKmYear}}km per year, or maximum
                {{$databag->reservation->anKmPeriod}}km over the entire vehicle lease
                term.</td>
            <td>- {{$databag->car->brand}} {{$databag->reservation->anKmYear}}km na godišnjem nivou, odnosno maksimalno
                {{$databag->reservation->anKmPeriod}}km za ceo period
                trajanja zakupa za vozilo</td>
        </tr>





    </tbody>





</table>