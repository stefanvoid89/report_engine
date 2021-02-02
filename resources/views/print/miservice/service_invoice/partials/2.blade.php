<table id="pozicije_sum_table" class="parent footer"
    style="font-size:8pt;border-collapse: collapse;margin-top: -1px;margin-left:auto;margin-right:auto;margin-bottom:10pt;width:90% "
    cellspacing="0">


    <tr>


        <td width="30%"> </td>

        <td colspan="3" width="70%" style="border-bottom:1px solid black;">
            <span style="margin-right:200px">Ukupno zahvat </span> {{$databag->content->positions_sum->OsnovicaZAPdv }}
            </pre>
        </td>


    </tr>

    <tr style="border-bottom:1px solid black;">

        <td width="30%"> Kategorija </td>
        <td width="30%" style="text-align:right;padding-right:80px;"> Bruto iznos </td>
        <td width="15%" style="text-align:right;padding-right:80px;"> Rabat </td>
        <td width="25%" style="text-align:right;padding-right:80px;"> Neto </td>


    </tr>
    <tr>

        {{--
        UkupnoRadBruto,as ukupnoDeoBruto,as UkupnoOstaloBruto,  as PopustUsluge,
        as PopustDeo,as PopustOstalo,as OsnovicaZAPdv,  as  UkupnoPDV,  as UkupnoRacun
        str(0.00,8,2) as RadNeto,str(0.00,8,2) as DeoNeto,str(0.00,8,2)as NetoOstalo
        --}}

        <td> Uk. usluga </td>
        <td style="text-align:right;padding-right:80px;">{{$databag->content->positions_sum->UkupnoRadBruto }} </td>
        <td style="text-align:right;padding-right:80px;">{{$databag->content->positions_sum->PopustUsluge }} </td>
        <td style="text-align:right;padding-right:80px;"> {{$databag->content->positions_sum->RadNeto }} </td>


    </tr>
    <tr>

        <td> Uk. artikli </td>
        <td style="text-align:right;padding-right:80px;"> {{$databag->content->positions_sum->ukupnoDeoBruto }} </td>
        <td style="text-align:right;padding-right:80px;">{{$databag->content->positions_sum->PopustDeo }} </td>
        <td style="text-align:right;padding-right:80px;"> {{$databag->content->positions_sum->DeoNeto }} </td>


    </tr>
    <tr style="border-bottom:1px solid black;">

        <td> Ostale usluge </td>
        <td style="text-align:right;padding-right:80px;"> {{$databag->content->positions_sum->UkupnoOstaloBruto }} </td>
        <td style="text-align:right;padding-right:80px;"> {{$databag->content->positions_sum->PopustOstalo }} </td>
        <td style="text-align:right;padding-right:80px;"> {{$databag->content->positions_sum->NetoOstalo }} </td>


    </tr>
    <tr>

        <td> Osnova za PDV </td>
        <td> </td>
        <td> </td>
        <td style="text-align:right;padding-right:80px;">{{$databag->content->positions_sum->OsnovicaZAPdv }} </td>


    </tr>
    <tr>

        <td> Osnovica PDV-PDV 20% </td>
        <td> </td>
        <td> </td>
        <td style="text-align:right;padding-right:80px;"> {{$databag->content->positions_sum->UkupnoPDV }}</td>


    </tr>
    <tr>

        <td> UKUPNO ZA NAPLATU {{$databag->content->curr_sufix}}</td>
        <td> </td>
        <td> </td>
        <td style="text-align:right;padding-right:80px;"> {{$databag->content->positions_sum->UkupnoRacun }}</td>


    </tr>
</table>