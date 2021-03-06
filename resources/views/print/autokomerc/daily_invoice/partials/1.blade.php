<table id="pozicije_table" class="parent"
    style="font-size:8pt;border-collapse: collapse;table-layout: fixed; text-align:center;width:100%">


    <colgroup>
        <col style="width:50px">
        <col style="width:60px">
        <col>
        <col style="width:50px">
        <col style="width:50px">
        <col style="width:100px">
        <col style="width:100px">
        <col style="width:100px">
    </colgroup>


    <thead style="border:1px solid black;">


        <tr>
            <th colspan="4" style="text-align:left">Broj fiskalnog isečka:
            </th>
            <th colspan="4">
            </th>
        </tr>

        <tr>

            <th style="width:50px;text-align:left;padding:2px 0px 2px 10px;">R.Br.</th>
            <th style="width:60px;text-align:left;padding::2px 0px 2px 20px">Šifra</th>
            <th style="padding-left:40px;text-align:left">Opis</th>
            <th style=" width:50px">Količina</th>
            <th style="width:50px;padding-right:15px;text-align:right">JM</th>
            <th style="width:100px;padding-right:15px;text-align:right">Jedinična cena</th>
            <th style="width:50px;padding-right:15px;text-align:right">Popust %</th>
            <th style="width:100px;padding-right:15px;text-align:right">Vrednost</th>

        </tr>

    </thead>
    <tbody>

        <tr>
            <td>
                <div style="height:12px"></div>

            </td>
        </tr>

        @foreach($databag->positions as $position)
        <tr>
            <td style="width:50px;text-align:left;padding:2px 0px 2px 10px;">
                {{$position->anNo}}
            </td>
            <td style="width:60px;text-align:left;padding::2px 0px 2px 20px">
                {{$position->acIdent}}
            </td>
            <td style="text-align:left">
                {{$position->acName}}
            </td>
            <td style="width:50px;text-align:left;padding:2px 0px 2px 10px;">{{$position->anQty}}
            </td>
            <td style="width:50px;padding-right:15px;text-align:right">
                {{$position->acUm}} </td>

            <td style="width:100px;padding-right:15px;text-align:right">
                {{number_format($position->anPrice, 2)}}{{$databag->currency}}
            </td>
            <td style="width:50px;padding-right:15px;text-align:right">
                {{$position->anRebate}}
            </td>
            <td style="width:100px;padding-right:15px;text-align:right">
                {{number_format($position->anValue,2)}}{{$databag->currency}}
            </td>


        </tr>
        @endforeach


        <tr>
            <td colspan="8">
                <hr class="thin_without_margin">
            </td>
        </tr>

    </tbody>
</table>