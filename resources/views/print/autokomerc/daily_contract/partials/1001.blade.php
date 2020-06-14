<table class="parent" style="font-size: 10px;border-collapse:separate;
border-spacing:0 2px;">
    <colgroup>
        <col style="width:32%">
        <col style="width:2%">
        <col style="width:32%">
        <col style="width:2%">
        <col style="width:15%">
        <col style="width:2%">
        <col style="width:15%">
    </colgroup>

    <!-- HEADER -->
    <tr>
        <td colspan="7">&nbsp;</td>
    </tr>

    <tr>
        <td>
            <table style="width:100%;border:1px black solid;font-size: 10px">
                <tr>
                    <td style="border:1px black solid">
                        <div style="width:100%;height:20px;padding-left:2px">No. </div>
                        <div style="width:100%;height:10px;padding-left:2px"> {{$databag->reservation->acKey}}</div>
                    </td>
                    <td style="border:1px black solid">
                        <div style="width:100%;height:20px;padding-left:2px">Reg No.</div>
                        <div style="width:100%;height:10px;padding-left:2px">{{$databag->car->acRegNo}}</div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div style="width:100%;height:10px;padding-left:2px">Service required</div>
                    </td>


                    <td>
                        <div style="display:flex;justify-content:space-around">
                            <div> Yes </div>
                            <div> No </div>
                        </div>
                    </td>
                </tr>
            </table>

        </td>
        <td></td>
        <td>
            <table style="width:100%;border:1px black solid;font-size: 10px">
                <tr>
                    <td style="border:1px black solid">
                        <div style="width:100%;height:20px;padding-left:2px">Type </div>
                        <div style="width:100%;height:10px;padding-left:2px"></div>
                    </td>
                    <td style="border:1px black solid">
                        <div style="width:100%;height:20px;padding-left:2px">Car Group</div>
                        <div style="width:100%;height:10px;padding-left:2px"></div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div style="width:100%;height:10px;padding-left:2px">End of registration</div>
                    </td>


                    <td>
                        <div style="display:flex;justify-content:space-around">
                            {{$databag->car->adDateRegistrationExpiration}}
                        </div>
                    </td>
                </tr>
            </table>
        </td>
        <td></td>
        <td>
            <table style="width:100%;border:1px black solid;font-size: 10px">
                <tr>
                    <td style="border:1px black solid">
                        <div style="width:100%;height:20px;padding-left:2px">Milleage</div>
                        <div style="width:100%;height:20px;padding-left:2px">{{$databag->reservation->anMilleageFrom}}
                        </div>

                    </td>


                </tr>

            </table>
        </td>
        <td></td>

        <td>
            <table style="width:100%;border:1px black solid;font-size: 10px">
                <tr>
                    <td style="border:1px black solid">
                        <div style="width:100%;height:20px;padding-left:2px">Service booklet</div>
                        <div style="width:100%;height:20px;padding-left:2px">
                            <div class="check">
                            </div>

                    </td>


                </tr>

            </table>
        </td>

    </tr>

    <!-- BODY -->
    <tr>
        <td class="big_font">Interior + Controls</td>
        <td></td>
        <td class="big_font">Exterior</td>
        <td></td>
        <td colspan="3" class="big_font">Under-hood</td>

    </tr>

    <tr>
        <td class="big_font">Unutrašnjost + Komande</td>
        <td></td>
        <td class="big_font">Spoljašnost</td>
        <td></td>
        <td colspan="3" class="big_font">Ispod haube</td>

    </tr>



    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Ignition & starter switch / Paljenje i kontakt
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>Hub, trunk, doors / Hauba, gepek, vrata
        </td>
        <td></td>
        <td colspan="3">
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Motor and transmission oil / Ulje u motoru i menjaču</div>
            </div>

        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Acceleration action / Kontrola ubrzanja
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>Number plates / Tablice
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Radiator / Hlaldnjak
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Gear level action / Provera stepena prenosa
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>All lights / Sva svetla
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Antifreeze / Rashladna tečnost motora
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Brake action / Kontrola kočnice
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>Wheel cap / Ratkapne
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Battery / Akumulator
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Emergency brake / Provera ručne kočnice
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>Antenna / Antena
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Windshieldwasher / Tečnost za pranje stakala
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Indicators / Migavci
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>Wipers (F+B) condition / Stanje brisača P+Z
        </td>
        <td></td>
        <td colspan="3" class="big_font">
            Accessories
        </td>

    </tr>



    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Horn / Sirena
        </td>
        <td></td>
        <td class="big_font">
            Tyres
        </td>
        <td></td>
        <td colspan="3" class="big_font">
            Pribor
        </td>

    </tr>


    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Radio / Radio
        </td>
        <td></td>
        <td class="big_font">
            Gume
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Triangle / Trougao
        </td>

    </tr>


    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Air condition / Klima uređaj
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>Air pressure / Pritisak u gumama
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>First aid kit / Prva pomoć
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Heater / Grejanje
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>General condition / Opšte stanje
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Spare lamps / Rezervne sijalice
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Fan / Ventilator kabine
        </td>
        <td></td>
        <td>

            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Tools / Alat(dizalica, ključ dizalice, ključ za točkove)</div>
            </div>
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Towrope / Sajla za vuču
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Cabine light / Svetlo u kabini P + Z
        </td>
        <td></td>
        <td>
            <div class="check">
                &nbsp;
            </div>Tires service kit / Set za popravku guma
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Fluorescent vest / Prsluk marker
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Windshield wipers / Kontrola rada brisača
        </td>
        <td></td>
        <td>
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Spare tyre (pressure/condition) / Rezervna guma (pritisak/stanje)
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Fire extinguisher / PP aparat
        </td>

    </tr>

    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Rear view mirror / Unutrašnji retrovizor
        </td>
        <td></td>
        <td>
            <div style="display: flex">

                <div> Tyres Brand / Size / Gume Marka / Dimenzija
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Floor mats / Patosnice
        </td>

    </tr>
    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Sun visors / Kontrola rada brisača
        </td>
        <td></td>
        <td>
            <div style="display: flex">

                <div>Front / Prednje __________ Rear / Zadnje __________
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Snow chains / Lanci za sneg
        </td>

    </tr>
    <tr>
        <td>

            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>El. or manual mirrors L+R / El. ili manuelni retrovizori L+D
                </div>
            </div>

        </td>
        <td></td>
        <td>
            <div style="display: flex">

                <div>Spare / Rezervna __________
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Ski rack / Nosač za skije
        </td>

    </tr>
    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Cigarette lighter / Upaljač za cigarete
        </td>
        <td></td>
        <td class="big_font">
            Cleanliness


        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Baby seat / Sedište za bebe
        </td>

    </tr>
    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Ashtray F+B / Pepeljare P+Z
        </td>
        <td></td>
        <td class="big_font">
            Čistoća
        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Roof box / Krovni gepek
        </td>

    </tr>
    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Seatbelts F+B / Sigutnosni pojasevi P+Z
        </td>
        <td></td>
        <td>
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Exterior / Spoljašnost
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3" class="big_font">
            Operating+Performance Test
        </td>

    </tr>
    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Fronseat adjustment / Podešavanje prednjih sedista
        </td>
        <td></td>
        <td>
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Interior / Unutrašnjost
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3" class="big_font">
            Test rada i performansi
        </td>
    </tr>
    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Backseat adjustment / Podešavanje zadnjih sedišta
        </td>
        <td></td>
        <td>
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Windows / Stakla
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Engine / Motor
        </td>

    </tr>
    <tr>
        <td>
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>El./manual windows L+R / El./manuelni podizači stakla L+D
                </div>
            </div>
        </td>
        <td></td>
        <td>
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Trunk / Gepek
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Transmission / Prenos
        </td>

    </tr>
    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Rear shelf / Zadnja polica
        </td>
        <td></td>
        <td>
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Check for leaks / Provera fleka
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Steering / Upravljački mehanizam
        </td>

    </tr>
    <tr>
        <td>
            <div class="check">
                &nbsp;
            </div>Trunk light / Svetlo u gepeku
        </td>
        <td></td>
        <td>
            <div style="display: flex">
                <div class="check">
                    &nbsp;
                </div>
                <div>Spare tyre / Rezervni točak
                </div>
            </div>

        </td>
        <td></td>
        <td colspan="3">
            <div class="check">
                &nbsp;
            </div>Ratles / Buka, klaparanje
        </td>

    </tr>

    <tr>
        <td colspan="7"><br></td>
    </tr>
    <!-- DAMAGES -->
    <tr>
        <td colspan="7">
            <table style="width:100%;font-size:10px">
                <colgroup>
                    <col style="width:49%">
                    <col style="width:2%">
                    <col style="width:49%">
                </colgroup>
                <tr>
                    <td>
                        <div style="display: flex;justify-content:space-between">
                            <div>BEFORE / PRE</div>

                            <div>
                                <div style="display: inline-block">BANG IN DAMAGES / UDUBLJENJA</div>
                                <div class="check" style=" display: inline-flex;
                                justify-content: center;
                                align-items: center;">
                                    <i class="fas fa-times "></i>
                                </div>
                            </div>


                        </div>

                    </td>
                    <td></td>
                    <td>
                        <div style="display: flex;justify-content:space-between">
                            <div>
                                <div style="display: inline-block">SCRATCHES / OGREBOTINE</div>
                                <div class="check" style=" display: inline-flex;
                                justify-content: center;
                                align-items: center;">
                                    <i class="fas fa-circle "></i>
                                </div>
                            </div>

                            <div style="text-align: right;">AFTER / POSLE</div>

                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div>
                            <img src="/images/autokomerc_pregled_ostecenja.png" alt="vozilo steta" style="height:182px">
                        </div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div>
                            <img src="/images/autokomerc_pregled_ostecenja.png" alt="vozilo steta" style="height:182px">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Damage description / Opis oštećenja</td>
                    <td></td>
                    <td>Damage description / Opis oštećenja</td>
                </tr>

                <tr>
                    <td>
                        <hr class="thin" style="margin-top: 20px;">
                    </td>
                    <td></td>
                    <td>
                        <hr class="thin" style="margin-top: 20px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr class="thin">
                    </td>
                    <td></td>
                    <td>
                        <hr class="thin">
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr class="thin">
                    </td>
                    <td></td>
                    <td>
                        <hr class="thin">
                    </td>
                </tr>



                <tr>
                    <td>
                        <div style="display:flex;justify-content:space-between;margin-bottom:9px">
                            <div>
                                Checkout date / Datum preuzimanja
                            </div>
                            <div>
                                ____________________________________
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div style="display:flex;justify-content:space-between;margin-bottom:9px">
                            <div>
                                Checkout date / Datum preuzimanja
                            </div>
                            <div>
                                ____________________________________
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display:flex;justify-content:space-between;margin-bottom:9px">
                            <div>
                                Customer's signature / Potpis klijenta
                            </div>
                            <div>
                                ____________________________________
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div style="display:flex;justify-content:space-between;margin-bottom:9px">
                            <div>
                                Customer's signature / Potpis klijenta
                            </div>
                            <div>
                                ____________________________________
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display:flex;justify-content:space-between">
                            <div>
                                Checked by / Kontrolisao
                            </div>
                            <div>
                                ____________________________________
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div style="display:flex;justify-content:space-between">
                            <div>
                                Checked by / Kontrolisao
                            </div>
                            <div>
                                ____________________________________
                            </div>
                        </div>
                    </td>
                </tr>






            </table>
        </td>
    </tr>




</table>