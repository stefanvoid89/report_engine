<table class="footer_table" style="width:100%">
    <tr>
        <td id="footer_row" align="center" style="font-size: 8pt;text-align:left;">
            <div>
                <table style=" font-size: 8pt;text-align:left;" width="100%">
                    <tr>
                        <td>Račun izdao: </td>
                        <td>Odgovorno lice:</td>
                        <td>Račun primio:</td>
                    </tr>
                    <tr>
                        <td>____________________________________</td>
                        <td>____________________________________</td>
                        <td>____________________________________</td>
                    </tr>

                    <tr>
                        <td colspan="3"> <br> </td>
                    </tr>
                    <tr>
                        @if( $databag->page->header->BezPdv == "1")
                        <td colspan="3"> Usluga ne podleže PDVu po Članu 12. Stav 4 Zakona o PDVu. </td>
                        @endif

                    </tr>
                    <tr>
                        <td colspan="3"> Garantni rok za sve originalne delove i rad iznosi 12 meseci od datuma
                            izdavanja računa. </td>
                    </tr>
                    <tr>
                        <td colspan="3">Vlasnik vozila preuzima obavezu plaćanja računa za popravak vozila po
                            zapisniku osiguranja
                            ukoliko
                            osiguravajuće društvo iz bilo kog razloga ospori </td>
                    </tr>
                    <tr>
                        <td colspan="3">plaćanje štete odnosno izdavanje garantnog pisma. </td>
                    </tr>
                    <tr>
                        <td style="text-align:center" colspan="3"><span style="font-weight: bold">T.R:273-220013667-03;
                                250-1190000011030-05;330-4013477-74</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:center" colspan="3"><span style="font-weight: bold">www.hitauto.rs</span>
                        </td>
                    </tr>

                </table>
        </td>
    </tr>
</table>