<table id="pozicije_sum_table" class="parent footer"
    style="font-size:8pt;border-collapse: collapse;margin-top: -1px;margin-left:auto;margin-right:auto;margin-bottom:10pt;width:100% ">

    <tr>
        <td colspan="4">
            <hr class="thin_without_margin">
        </td>
    </tr>


    <tr style="line-height: 20px; ">

        <td style="padding-left:50px;font-family:RenaultLife-Bold"> Osnova za PDV </td>
        <td> </td>
        <td> </td>
        <td style="text-align:right;padding-right:80px;">{{number_format($databag->positions_sum->anValue, 2) }}
            {{$databag->currency}} </td>


    </tr>
    <tr style="line-height: 20px; ">

        <td style="padding-left:50px;font-family:RenaultLife-Bold"> PDV {{$databag->invoice_header->anVat}} %
        </td>
        <td> </td>
        <td> </td>
        <td style="text-align:right;padding-right:80px;"> {{number_format($databag->positions_sum->anVatValue, 2) }}
            {{$databag->currency}}</td>


    </tr>
    <tr style="line-height: 20px; ">

        <td style="padding-left:50px;font-family:RenaultLife-Bold"> UKUPNO ZA NAPLATU </td>
        <td> </td>
        <td> </td>
        <td style="text-align:right;padding-right:80px;">
            {{number_format($databag->positions_sum->anTotalValue, 2) }} {{$databag->currency}}
        </td>


    </tr>


    <tr>
        <td colspan="8">
            <div style="height: 12px"></div>
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <hr class="thin_without_margin">
        </td>
    </tr>
    @if($databag->invoice_header->acComment)
    <tr>
        <td colspan="8" style="padding-left:50px;font-size:12px">
            <span style="font-family:RenaultLife-Bold">Napomena:</span>&nbsp;
            {{$databag->invoice_header->acComment}}
        </td>

    </tr>
    <tr>
        <td colspan=" 8">
            <hr class="thin_without_margin">
        </td>
    </tr>

    @endif

    <tr>
        <td colspan="8">Račun je izdat na osnovu člana 5. stav 3, tačka 1 Zakona o PDV-u, a u skladu sa članom 4a
            Pravilnika o određivanju slučajeva u
            kojima nema obaveze izdavanja računa i o računima kod kojih se mogu izostaviti pojedini podaci
            Račun je validan bez pečata i potpisa
        </td>
    </tr>

    <tr>
        <td colspan="8">
            <div style="height: 12px"></div>
        </td>
    </tr>
</table>