<table class="parent td_margin" style="width:100%;font-size:10px">

    <tr>

        <td style="width:60%;font-weight: bold">
            <i class="fas fa-user"></i> &nbsp; VOZAČ / DRIVER
        </td>
        <td style="width:60%;font-weight: bold">
            <i class="fas fa-user"></i> &nbsp; DODATNI VOZAC / ADDITIONAL DRIVER
        </td>
    </tr>
    <tr>
        <td>
            <table style="width:100%;table-layout: fixed;font-size:10px">
                <tr>
                    <td>Ime / Name: {{$databag->driver->acName}}</td>
                    <td>Broj vozačke / Driver licence No:{{$databag->driver->acDriverLicence}}</td>

                </tr>


                <tr>
                    <td>Adresa / Address: {{$databag->driver->acAddress}}</td>
                    <td>Datum izdavanja / Data of issue:{{$databag->driver->adDriverLicenceIssueDate}}</td>


                </tr>
                <tr>
                    <td>Datum rođenja / Date of birth: {{$databag->driver->adDateOfBirth}}</td>
                    <td>Važi do / Valid to:{{$databag->driver->adDriverLicenceExpDate}}</td>

                </tr>
                <tr>
                    <td>Id: {{$databag->driver->acId}}</td>
                    <td>Mesto izdavanja / Place of issue:{{$databag->driver->acDriverLicenceIssuePlace}}</td>

                </tr>


            </table>
        </td>
    </tr>
    <tr>
        <td>
            <div style="height:15px"></div>
        </td>
    </tr>
</table>