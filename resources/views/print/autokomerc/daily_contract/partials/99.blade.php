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
        <td colspan="6"><i class="fas fa-credit-card "></i> &nbsp; KREDITNA KARTICA / CREDIT CARD</td>

    </tr>
    <tr>
        <td colspan="2">Vlasnik / Owner &nbsp; <span
                style="font-weight: bold">{{$databag->reservation->acCreditCardHolder}}</span></td>
        <td colspan="2">Broj / Number &nbsp; <span
                style="font-weight: bold">{{$databag->reservation->acCreditCardNo}}</span></td>
        <td colspan="2">Tip kartice / Card type &nbsp; <span
                style="font-weight: bold">{{$databag->reservation->acCreditCard}}</span></td>
    </tr>
    <tr>
        <td colspan="2">CVV broj / CVV number &nbsp; <span
                style="font-weight: bold">{{$databag->reservation->acCVV}}</span></td>
        <td colspan="2">Datum isteka / Expiration date &nbsp; <span
                style="font-weight: bold">{{$databag->reservation->adDateExpCreditCard}}</span></td>
        <td colspan="2"></td>
    </tr>

    <tr>
        <td colspan="6">
            <br style="line-height: 15px;">
        </td>
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