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
                Zakupodavac vozila iz prethodnog stava daje zakupcu u cilju pružanja test vožnji.
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
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

                Zakupodavac daje zakupcu motorno vozilo iz člana 1. ovog ugovora u zakup.
                Iznos mesečne zakupnine (u daljem tekstu: Zakupnina) za korišćenje Vozila je
                {{$databag->reservation->anPrice}}
                EUR (slovima: {{$databag->price_text}} ) u dinarskoj protivvrednosti po srednjem kursu Narodne Banke
                Srbije na dan
                fakturisanja uvećan za pripadajući PDV obračunat po stopi važećoj na dan fakturisanja i uplaćuje se na
                račun Zakupodavca broj 330-4006391-89 kod Banke Credit Agricole Srbija AD Novi Sad.
                {{$databag->dodaci}}


                @if($databag->reservation->anExpenses && $databag->reservation->anExpenses != 0 )
                Ugovorne strane ugovaraju plaćanje zakupnine na sledeći način i to:
                Ukupno placanje na pocetku za administrativne troskove je {{$databag->reservation->anExpenses}} eur sa
                PDV-om po srednjem kursu NBS na dan
                fakturisanja.

                @endif


            </td>
        </tr>




        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>




        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 3.</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">

                Ovaj ugovor o zakupu zaključuje se na period od {{$databag->reservation->anQty}} meseci.
                Ugovor stupa na snagu danom potpisivanja, a period zakupa počinje teći od momenta preuzimanja u posed
                predmeta zakupa od strane zakupca.
                Po isteku ugovorenog roka zakupac se obavezuje da predmet zakupa iz člana 1. ovog ugovora vrati
                zakupodavcu u ispravnom stanju, uzimajući u obzir redovnu upotrebu predmeta zakupa.



            </td>
        </tr>






        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>




        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 4.</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">

                Period zakupa na koji je ovaj ugovor zaključen može biti kraći ili duži uz obostranu pismenu saglasnost
                ugovornih strana, što će biti regulisano posebnim anexom ugovora.



            </td>
        </tr>





        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>




        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 5.</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">
                Predmet zakupa zakupodavac je dužan isporučiti u ispravnom stanju koje odgovara upotrebi vozila i svrsi
                za koju se ovaj ugovor zaključuje.
                Zakupodavac je dužan osigurati zakupcu svu neophodnu prateću dokumentaciju za predmet zakupa što
                podrazumeva: saobraćajnu dozvolu, kopiju polise obaveznog osiguranja, zelena karta.


            </td>
        </tr>



        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>




        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 6.</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">
                Zakupodavac će neposredno pre isporuke vozila napraviti zapisnik o stanju istog, koji zapisnik će
                zakupac potpisati prilikom prijema navedenog vozila.
            </td>
        </tr>


        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>




        <tr>
            <td style="text-align: center">
                <span style="font-weight: bold">Član 7.</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td class="indent">
                Zakupac se obavezuje da će se prema predmetu ovog ugovora odnositi kao dobar i savestan domaćin imajući
                u vidu prirodu posla u čijem cilju se
                ovaj ugovor zaključuje.
            </td>
        </tr>



    </tbody>


</table>