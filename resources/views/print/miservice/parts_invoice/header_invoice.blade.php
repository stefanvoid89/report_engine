<table id="page_table" style="width:100%">
    <tr>
        <td id="header_row">
            <table id="header" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left" width="30%">

                        <img id="logo-image" src="/images/miservice/hitauto-logo.png" style="height:20mm;" />

                    </td>
                    <td
                        style="padding-left:4mm;padding-top: 2mm;padding-bottom: 2mm;font-size: 8pt;text-align: right;   ">
                        <span style="margin-bottom:0px;font-size: 17pt;font-weight: bold;">HIT Auto D.O.O</span>


                        <br>Ovlašćeni servis i prodavac
                        <br />Šifra delatnosti : 4511, Matični broj: 17455613
                        <br />PIB: 102605020
                        <br />Staro sajmište 29, 11070 N.Beograd
                        <br />Tel: +381(0)11 20 18 011
                        <br />Fax: +381(0)11 20 18 013
                        <br />TR: 275-220013667-03, 160-255686-94






                    </td>
                </tr>


            </table>

            <table width="100%" style="margin-top:1px" cellspacing="0" cellpadding="0">

                <tr>

                    <td>
                        <table id="prijem_table" style="border-collapse: collapse;table-layout: fixed;width:100%"
                            class="all_borders">

                            <colgroup>
                                <col style="width:10%">
                                <col style="width:14%">
                                <col style="width:14%">
                                <col style="width:17%">
                                <col style="width:45%">
                            </colgroup>


                            <tr>
                                <td>
                                    <div style="text-align:left">Broj naloga:</div>
                                    <div style="text-align:center">{{$databag->page->header->BrojNaloga}}&nbsp;</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Datum prijema:</div>
                                    <div style="text-align:center"> {{$databag->page->header->DatumPrijema}}&nbsp;</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Nalogodavac:</div>
                                    <div style="text-align:center"> {{$databag->page->header->NalogoDavac}}</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Predviđeno preuzimanje:</div>
                                    <div style="text-align:center">
                                        {{$databag->page->header->PredvidjeniDatumIzdavanja}}&nbsp;</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Poslužio vas je:</div>
                                    <div style="text-align:center"> {{$databag->page->header->RecepcionisatName}}</div>
                                </td>

                            </tr>

                        </table>
                    </td>
                </tr>


                <tr>
                    <td>

                        <table id="kupac_table"
                            style="font-size:8pt;border-collapse: collapse;    margin-top: -1px;table-layout: fixed;width:100%"
                            class="all_borders" cellspacing="0">

                            <colgroup>
                                <col style="width:55%">
                                <col style="width:14%">
                                <col style="width:15%">
                                <col style="width:8%">
                                <col style="width:8%">
                            </colgroup>

                            <tr>

                                <td rowspan="3" width="55%" style="vertical-align: top;border-bottom:none">

                                    <table id="klijent_table" class="none_border"
                                        style="font-size:8pt;border-collapse: collapse; width=:100% ">
                                        <tr>
                                            <td> {{$databag->page->header->ImeKupcaSif}}</td>
                                        </tr>
                                        <tr>
                                            <td> {{$databag->page->header->AdresaSif}} &nbsp;
                                                {{$databag->page->header->PostaSif}} &nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>{{$databag->page->header->MestoSif}}</td>
                                        </tr>
                                        <tr>
                                            <td> PIB: {{$databag->page->header->PibSif}}</td>
                                        </tr>

                                        <tr>
                                            <td> Matični broj: {{$databag->page->header->MaticniSif}}</td>
                                        </tr>
                                    </table>


                                </td>

                                <td colspan="2" style="font-size:16pt;">{{$databag->page->header->OPisDokumena}}</td>
                                <td colspan="2">{{$databag->page->header->BrojRacuna}}</td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="text-align:left">Broj dokumenta:</div>
                                    <div style="text-align:center">{{$databag->page->header->BrojRacuna}}</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Datum i mesto računa:</div>
                                    <div style="text-align:center">{{$databag->page->header->DatumRacuna}}
                                        {{$databag->page->header->Mesto}}</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Uslov plaćanja:</div>
                                    <div style="text-align:center">{{$databag->page->header->NacinPlacanjaNaziv}}</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Stranica:</div>
                                    <div style="text-align:center">#strana#</div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div style="text-align:left">Šifra kupca:</div>
                                    <div style="text-align:center">{{$databag->page->header->KupacNaFakturi}}</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Broj telefona:</div>
                                    <div style="text-align:center">{{$databag->page->header->Telefon}}&nbsp;</div>
                                </td>
                                <td colspan="2">
                                    <div style="text-align:left">Način plaćanja:</div>
                                    <div style="text-align:center">{{$databag->page->header->NacinPlacanjaNaziv}}</div>
                                </td>

                            </tr>

                            <tr>
                                <td style="vertical-align: bottom;border-top: none;">
                                    Broj odobrenja: {{$databag->page->header->brojOdobrenja}}
                                </td>
                                <td>
                                    <div style="text-align:left">Datum 1. registracije:</div>
                                    <div style="text-align:center">{{$databag->page->header->datumPrveReg}}&nbsp;</div>
                                </td>
                                <td>
                                    <div style="text-align:left">Stanje KM:</div>
                                    <div style="text-align:center">{{$databag->page->header->Kilom}}&nbsp;</div>
                                </td>
                                <td colspan="2">
                                    <div style="text-align:left">Prijemni broj:</div>
                                    <div style="text-align:center">{{$databag->page->header->BrojPrijema}}&nbsp;</div>
                                </td>

                            </tr>
                        </table>
                    </td>


                </tr>
                <tr>
                    <td>
                        <div style="line-height: 5px">&nbsp;</div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <table id="vozilo_table" class="all_borders"
                            style="font-size:8pt;border-collapse: collapse;margin-top: -1px;width:100%;"
                            cellspacing="0">


                            <tr>

                                <td width="30%">
                                    <div style="text-align:left">Marka i model:</div>
                                    <div style="text-align:center">{{$databag->page->header->MarkaModel}}&nbsp;</div>
                                </td>
                                <td width="20%">
                                    <div style="text-align:left">Registarska oznaka:</div>
                                    <div style="text-align:center">{{$databag->page->header->RegBroj}}&nbsp;</div>
                                </td>
                                <td width="30%">
                                    <div style="text-align:left">Šasija broj:</div>
                                    <div style="text-align:center">{{$databag->page->header->Sasija}}&nbsp;</div>
                                </td>
                                <td width="20%">
                                    <div style="text-align:left">Proizvodni broj:</div>
                                    <div style="text-align:center">{{$databag->page->header->ProizvodniBroj}}&nbsp;
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="line-height: 5px">&nbsp;</div>
                    </td>
                </tr>

            </table>


        </td>
    </tr>
</table>