<table cellspacing="0" cellpadding="0" class="parent" style="font-size:14px;line-height:2em;text-align :justify">
    <thead></thead>
    <tbody>


        <tr>
            <td>


                <div style="height:150px;text-align: center;">
                    <img id="logo" src="/images/{{$databag->logo}}" style="height:150px;" />
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
                <table id="offer" style="font-size: 14px;margin: 0 auto;width:100%;text-align: center;">
                    <thead>
                        <td style="padding-top:10px;padding-bottom:10px;">vozilo</td>
                        <td>depozit</td>
                        <td>period najma u mesecima</td>
                        <td>mesečni najam sa PDV-om</td>
                    </thead>
                    <tr>
                        <td>{{$databag->leasing->acCarName}}</td>
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

                <table style="width:100%;">
                    <tr style="line-height: 1.2em">
                        <td style="font-size:12px">
                            Svi iznosi na ponudi
                            prikazani su u
                            EUR.

                        </td>
                    </tr>
                    <tr style="line-height: 1.2em">
                        <td style="font-size:12px">
                            Davalac zakupa zadržava isključivo pravo da odluči da li će zaključiti ugovor o dugoročnom
                            najmu nakon
                            prijema zahteva za finansiranje i kompletne
                            dokumentacije primaoca zakupa koja je potrebna za proveru informacija koje je dostavio
                            primalac zakupa
                        </td>
                    </tr>

                    <tr>
                        <td>

                            @if($databag->leasing->acCostsText != "")
                            *U iznos zakupnine su uračunati sledeći troškovi:
                            @endif


                        </td>
                    </tr>


                    <tr>
                        <td>
                            {!!nl2br($databag->leasing->acCostsText)!!}
                        </td>
                    </tr>


                </table>

            </td>
        </tr>




    </tbody>


</table>