<table id="pozicije_table" class="parent"
    style="font-size:8pt;border-collapse: collapse; margin-top: -1px;table-layout: fixed; text-align:center;width:100%">


    <colgroup>
        <col style="width:120px">
        <col style="width:50px">
        <col>
        <col style="width:100px">
        <col style="width:50px">
        <col style="width:100px">
        <col style="width:100px">
    </colgroup>


    <thead style="border:1px solid black;">


        <tr>
            <th colspan="3" style="text-align:left">Datum prometa dobara i usluga:
                {{$databag->content->header->Datumprometa}}
            </th>
            <th colspan="4" style="width:350px">Broj fiskalnog isečka: {{$databag->content->header->BIR}}</th>
        </tr>

        <tr>


            <th style="width:120px">Šifra</th>
            <th style="width:50px">Količina</th>
            <th>Opis</th>
            <th style="width:100px">Jedinična cena {{$databag->content->curr_sufix}}</th>
            <th style="width:50px">Pop%</th>
            <th style="width:100px">Neto cena {{$databag->content->curr_sufix}}</th>
            <th style="width:100px">Ukupna vrednost {{$databag->content->curr_sufix}}</th>

        </tr>

    </thead>
    <tbody>

        <tr>
            <td colspan="7">&nbsp;</td>
        </tr>
        @foreach($databag->content->positions as $position)
        <tr style="line-height: 14px; ">
            <td style="width:120px;text-align:left">
                {{$position->Sifra}}</td>
            <td style="width:50px;padding-right:15px" align="right">
                {{$position->Kolicina}} </td>
            <td style="padding-left:20px;text-align:left">
                {{$position->Opis}}
            </td>
            <td style="width:100px;padding-right:15px" align="right">{{$position->Cena}}
            </td>
            <td style="width:50px;padding-right:15px" align="right">{{$position->Popust}}
            </td>
            <td style="width:100px;padding-right:15px   " align="right">{{$position->NetoCena}}
            </td>
            <td style="width:100px;padding-right:15px" align="right">{{$position->impneto }} </td>

        </tr>
        @endforeach



    </tbody>
</table>