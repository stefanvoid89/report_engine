<table class="parent reservation_items" style="font-size:12px">
    <thead>
        <tr>
            <th style=" text-align:center;width:50px">#</th>
            <th style=" text-align:center;">Opis</th>
            <th style="text-align:center;width:100px">JM</th>
            <th style="text-align:center;width:100px">Kol.</th>
            <th style="text-align:center;width:100px">Cena</th>
            <th style="text-align:center;width:100px">Vrednost</th>

        </tr>
    </thead>
    <tbody>


        @foreach($databag->items as $item)
        <tr>
            <td style="text-align:center;">
                {{$item->anNo}}
            </td>
            <td style="padding-left:10px;text-align:left">
                {{$item->acName}}
            </td>


            <td style="width:50px;text-align:center">
                {{$item->acUm}} </td>
            <td style="width:50px;text-align:center">
                {{$item->anQty}}
            </td>

            <td style="width:100px;text-align:center">
                {{$item->anPrice}}{{$databag->currency}}
            </td>

            <td style="width:100px;text-align:center">
                {{$item->anValue}}{{$databag->currency}}
            </td>


        </tr>
        @endforeach
        <tr>
            <td colspan="4" rowspan="6" style="vertical-align: top;
            padding-top: 5px;">

                <span style="font-weight:bold">Depozit</span>
                <br>Vrednost depozita: {{$databag->reservation->anDeposit}} {{$databag->currency}}

            </td>
            <td colspan=" 2">&nbsp;</td>
        </tr>
        <tr>

            <td style="text-align:center;font-weight: bold"> Vrednost: </td>
            <td style="text-align:center;font-weight: bold">{{$databag->total_value->anValue}}{{$databag->currency}}
            </td>
        </tr>
        <tr>
            <td colspan=" 2">&nbsp;</td>
        </tr>
        <tr>

            <td style="text-align:center;font-weight: bold"> PDV: {{$databag->total_value->acVat}}% </td>
            <td style=" text-align:center;font-weight: bold">{{$databag->total_value->anVatValue}}{{$databag->currency}}
            </td>
        </tr>
        <tr>
            <td colspan="2"> &nbsp;</td>
        </tr>
        <tr>

            <td style="text-align:center;font-weight: bold"> Total: </td>
            <td style=" text-align:center;font-weight: bold">
                {{$databag->total_value->anTotalValue}}{{$databag->currency}}
            </td>
        </tr>
        <tr>

    </tbody>

</table>