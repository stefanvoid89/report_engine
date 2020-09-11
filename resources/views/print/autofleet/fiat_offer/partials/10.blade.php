<table cellspacing="0" cellpadding="0" class="parent" style="font-size:14px;line-height:2em;text-align :justify">
    <thead></thead>
    <tbody>


        <tr>
            <td>


                <div style="height:150px;text-align: center;">
                    <img id="logo" src="/images/{{$databag->logo}}" style="height:140px;" />
                </div>


            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-weight: bold">Zahvaljujemo Vam se na ukazanom poverenju i sa velikim
                zadovoljstvom Vam
                predstavljamo našu ponudu za
                dugoročni najam:</td>
        </tr>
        <tr>
            <td>
                <div class="spacer"></div>
            </td>
        </tr>
        <tr>
            <td>
                <table id="offer" style="font-size: 14px;margin: 0 auto;width:100%;text-align: center;">
                    <thead style="background: lightgray;">
                        <td style="padding-top:10px;padding-bottom:10px;">Vozilo</td>
                        <td>Depozit</td>
                        <td>Period najma u mesecima</td>
                        <td>Mesečni najam sa PDV-om</td>
                    </thead>
                    <tr>
                        <td style="line-height:25px">{{$databag->leasing->acCarName}}</td>
                        <td>{{number_format($databag->leasing->anParticipation,2)}} {{$databag->currency}}</td>
                        <td>{{$databag->leasing->anPeriod}}</td>
                        <td>{{number_format($databag->leasing->anValueTotalMonth,2)}} {{$databag->currency}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding-left:3px;padding-right:3px;font-weight: bold">Ovi podaci su informativni u zavisnosti od
                ponuđenih
                obezbeđenja i oceni Vašeg boniteta.</td>
        </tr>
        <tr>
            <td style="border:1px solid black;padding-left:3px;padding-right:3px;">

                <table style="width:100%;line-height:21px">
                    <tr>
                        <td style="font-size:12px">
                            Ova ponuda je informativnog karaktera. Svi iznosi na ponudi
                            prikazani su u
                            EUR.

                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:14px">
                            Davalac zakupa zadržava isključivo pravo da odluči da li će zaključiti ugovor o dugoročnom
                            najmu nakon
                            prijema zahteva za finansiranje i kompletne
                            dokumentacije primaoca zakupa koja je potrebna za proveru informacija koje je dostavio
                            primalac zakupa.
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="spacer"></div>
                        </td>
                    </tr>
                    @if($databag->leasing->acCostsText != "")
                    <tr>
                        <td style="font-size:14px">

                            U iznos zakupnine su uračunati sledeći troškovi:

                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:14px">
                            {!!nl2br($databag->leasing->acCostsText)!!}
                        </td>
                    </tr>
                    @endif

                </table>

            </td>
        </tr>




    </tbody>


</table>