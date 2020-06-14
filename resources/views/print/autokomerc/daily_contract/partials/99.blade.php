<table class="parent td_margin" style="width:100%;font-size:10px">


    <tr>
        <td style="width:15%;text-align:left;font-weight:bold"></td>
        <td style="width:10%;text-align:left;font-weight:bold"></td>
        <td style="width:10%;text-align:left;font-weight:bold"></td>
        <td style=";text-align:right;font-weight:bold"></td>
        <td style="width:15%;text-align:right;font-weight:bold"></td>
        <td style="width:15%;text-align:right;font-weight:bold"></td>
    </tr>

    <tr>
        <td colspan="6"> <span style="font-weight:bold">Ukjučeno osiguranje / Included insurance</span> sa učešćem u
            šteti do / damage participation excess to 800,00{{$databag->currency}} sa učešćem u krađi do / theft
            participation excess to 800,00{{$databag->currency}} </td>

    </tr>

    <tr>
        <td colspan="4" style="font-weight:bold">PLAĆANJA / PAYMENTS</td>

        <td style="width:15%;text-align:right;font-weight:bold">Iznos / Ammount</td>
        <td style="width:15%;text-align:right;font-weight:bold"></td>
    </tr>
    <tr>
        <td colspan="4" style="font-weight:bold">Uplaćen depozit / Deposit ({{$databag->reservation->acCreditCard}})
        </td>

        <td style="width:15%;text-align:right">{{$databag->reservation->anDeposit}}{{$databag->currency}}</td>
        <td style="width:15%;text-align:right;font-weight:bold"></td>
    </tr>

    <tr>
        <td style="width:15%;text-align:left;font-weight:bold"></td>
        <td style="width:10%;text-align:left;font-weight:bold"></td>
        <td style="width:10%;text-align:left;font-weight:bold"></td>
        <td style=";text-align:right;text-align:center">Paćanje po srednjem kursu NBS na dan
            fakturisanja</td>
        <td style="width:15%;text-align:right;font-weight:bold"></td>
        <td style="width:15%;text-align:right;font-weight:bold"></td>
    </tr>



</table>