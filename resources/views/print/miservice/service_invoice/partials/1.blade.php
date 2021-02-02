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


        @foreach($databag->content->positions as $position)
        <tr>
            <td style="width:120px;text-align:left" class=" {{ $position->RBR == 0 ? 'border_bottom' : '' }}">
                {{$position->Sifra}}</td>
            <td style="width:50px;padding-right:15px" align="right"
                class=" {{ $position->RBR == 0 ? 'border_bottom' : '' }}"> @if($position->RBR != 0)
                {{$position->Kolicina}} @endif </td>
            <td style="padding-left:20px;text-align:left" class=" {{ $position->RBR == 0 ? 'border_bottom' : '' }}">
                {{$position->Opis}}
            </td>
            <td style="width:100px;padding-right:15px" align="right">@if($position->RBR !=
                0){{$position->Cena}}@endif
            </td>
            <td style="width:50px;padding-right:15px" align="right">@if($position->RBR !=
                0){{$position->Popust}}@endif
            </td>
            <td style="width:100px;padding-right:15px   " align="right">@if($position->RBR !=
                0){{$position->NetoCena}}@endif
            </td>
            <td style="width:100px;padding-right:15px" align="right">@if($position->RBR !=
                0){{$position->impneto }} @endif </td>

        </tr>
        @endforeach



    </tbody>
</table>