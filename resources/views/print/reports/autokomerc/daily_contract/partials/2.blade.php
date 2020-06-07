<table class="parent" style="width:100%">
    <tr>
        <td style="width:48%">
            <table style="width:100%;font-size:12px">
                <tr>
                    <td style="font-weight:bold">Klijent
                    </td>
                </tr>
                <tr>
                    <td>@if($databag->subject->anSubjectTypeId == 1) Naziv @else Ime i prezime @endif: </td>
                    <td>{{$databag->subject->acName}}</td>
                </tr>
                <tr>
                    <td>Adresa:</td>
                    <td>{{$databag->subject->acAddress}}</td>
                </tr>
                <tr>
                    <td>Grad:</td>
                    <td>{{$databag->subject->acCity}}</td>
                </tr>
                <tr>
                    <td>@if($databag->subject->anSubjectTypeId == 1) PIB @else JMBG @endif: </td>
                    <td>@if($databag->subject->anSubjectTypeId == 1) {{$databag->subject->acCode}} @else
                        {{$databag->subject->acId}}
                        @endif: </td>
                </tr>
                @if($databag->subject->anSubjectTypeId == 1) <tr>
                    <td>Matični broj:</td>
                    <td>{{$databag->subject->acRegNo}}</td>
                </tr>
                @endif
                <tr>
                    <td>Kontakt telefon:</td>
                    <td>{{$databag->subject->acPhone}}</td>
                </tr>

            </table>
        </td>
        <td style="width:4%"></td>
        <td style="width:48%">
            <table style="width:100%;font-size:12px">
                <tr>
                    <td style="font-weight:bold">Vozač
                    </td>
                </tr>


                <tr>
                    <td>Ime i prezime: </td>
                    <td>{{$databag->driver->acName}}</td>
                </tr>

                <tr>
                    <td>Broj vozačke dozvole: </td>
                    <td>{{$databag->driver->acDriverLicence}}</td>
                </tr>

                <tr>
                    <td>LK.br./Pasoš:</td>
                    <td>{{$databag->driver->acId}}</td>
                </tr>

                <tr>
                    <td>Datum rodjenja: </td>
                    <td>{{$databag->driver->adDateOfBirth}}</td>
                </tr>


                <tr>
                    <td>Adresa:</td>
                    <td>{{$databag->driver->acAddress}}</td>
                </tr>


                <tr>
                    <td>Kontakt telefon:</td>
                    <td>{{$databag->driver->acPhone}}</td>
                </tr>

            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <hr>
        </td>
    </tr>
</table>