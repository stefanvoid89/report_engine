<table id="permission_table" class="parent"
    style="font-size:8pt;border-collapse: collapse; margin-top: -1px;table-layout: fixed; text-align:center;width:100%">


    <tbody>

        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>


        <tr>
            <td style="text-align:center;font-size:16px;font-weight:bold">OVLAŠĆENJE-DOZVOLA ZA
                KORIŠĆENJE PREDMETA ZAKUPA-VOZILA

            </td>
        </tr>
        <tr>
            <td style="text-align:center;font-size:16px;font-weight:bold">
                U ZEMLJI I INOSTRANSTVU
            </td>
        </tr>
        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>
        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>
        <tr>
            <td style="text-align:left;font-size:14px;">



                <div>Kategorija vozila: <span style="font-weight: bold">{{$databag->car->acType}}</span></div>
                <div>Marka: <span style="font-weight: bold">{{$databag->car->acBrand}}</span></div>
                <div>Model: <span style="font-weight: bold">{{$databag->car->acModel}}</span></div>
                <div> Broj šasije:<span style="font-weight: bold">{{$databag->car->acChasis}}</span> </div>
                <div>Broj motora: <span style="font-weight: bold">{{$databag->car->acEngine}}</span> </div>
                <div>Snaga motora: <span style="font-weight: bold">{{$databag->car->acPower}}</span> </div>
                <div>Zapremina motora: <span style="font-weight: bold">{{$databag->car->zapremina}}</span> </div>
                <div>Boja vozila: <span style="font-weight: bold">{{$databag->car->acColor}}</span> </div>
                <div>Broj sedišta: <span style="font-weight: bold">{{$databag->car->anSeatsNo}}</span> </div>
                <div>Godina proizvodnje: <span style="font-weight: bold">{{$databag->car->anYearOfManufacture}}</span>
                </div>

            </td>
        </tr>

        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>
        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>

        <tr>
            <td style="text-align: justify;font-size:14px;">
                Ovim putem dajemo dozvolu-ovlašćenje primaocu zakupa iz Ugovora o zakupu, preduzeću
                {{$databag->subject->acName}} {{$databag->subject->acCity}}
                , {{$databag->subject->acAddress}}, , MB: {{$databag->subject->acRegNo}}, PIB:
                {{$databag->subject->acCode}}, da može koristiti napred navedeni predmet zakupa – vozilo u zemlji i
                inostranstvu .
            </td>
        </tr>

        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>
        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>


        @if($databag->permission->acIsOnSubject == "F")
        <tr>
            <td style="text-align: justify;font-size:14px;">
                Pravo upravljanja vozilom ima {{$databag->driver->acName}} : lični broj {{$databag->driver->acId}}, broj
                vozačke dozvole:{{$databag->driver->acDriverLicence}}
                , adresa {{$databag->driver->acAddress}} , broj telefona {{$databag->driver->acPhone}}

                zaposleni u preduzeću {{$databag->subject->acName}} {{$databag->subject->acCity}}, koji je deleregirani
                od strane odgovornog lica u pravnom licu {{$databag->subject->acName}} {{$databag->subject->acCity}}.
            </td>
        </tr>
        <tr>
            <td style="text-align: justify;font-size:14px;">
                Ovo ovlašćenje se daje na korišćenje vozila u zemlji i inostranstvu.
            </td>
        </tr>

        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>
        <tr>
            <td style="text-align: justify;font-size:14px;">
                Imenovani je dužan da se u navedenom periodu pridržava svih odredbi Ugovora o zakupu vozila.
            </td>
        </tr>


        @else

        <tr>
            <td style="text-align: justify;font-size:14px;">
                Pravo upravljanja vozilom imaja iključivo zaposleni u preduzeću DELHAIZE SERBIA d.o.o. Beograd, koji su
                deleregirani od strane odgovornog lica u pravnom licu DELHAIZE SERBIA d.o.o. Beograd.
            </td>
        </tr>
        @endif

        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>


        @if($databag->permission->acIsUntilRegExp == "T")
        <tr>
            <td style="text-align: justify;font-size:14px;">
                Ovo Ovlašćenje važi od {{$databag->permission->adDateFrom}} do isteka registracije predmetnog vozila.
            </td>
        </tr>

        @else
        <tr>
            <td style="text-align: justify;font-size:14px;">
                Ovo Ovlašćenje važi od {{$databag->permission->adDateFrom}} do {{$databag->permission->adDateTo}}
            </td>
        </tr>

        @endif
        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>

        <tr>
            <td style="text-align: justify;font-size:14px;">
                Beograd, {{$databag->permission->adDate}}
            </td>
        </tr>

        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>


        <tr>
            <td style="text-align: right;font-size:14px;">
                AUTO FLEET MANAGEMENT D.O.O.
            </td>
        </tr>
        <tr>
            <td>
                <br class="spacer">
            </td>
        </tr>
        <tr>
            <td style="text-align: right;font-size:14px;">
                _________________________________
            </td>
        </tr>

    </tbody>


</table>