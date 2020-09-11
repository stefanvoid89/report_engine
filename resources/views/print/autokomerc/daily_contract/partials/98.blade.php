<table class="parent td_margin" style="width:100%;font-size:10px">

    <tr>
        <td style="width:15%;text-align:left;font-weight:bold">USLUGA / SERVICE</td>
        <td style="width:10%;text-align:left;font-weight:bold">Jed. mere / Unit</td>
        <td style="width:10%;text-align:left;font-weight:bold">Količina / Qty</td>
        <td style=";text-align:right;font-weight:bold">Jed. cene / Unit value</td>
        <td style="width:15%;text-align:right;font-weight:bold">Iznos / Ammount</td>
        <td style="width:15%;text-align:right;font-weight:bold">PDV / VAT</td>
    </tr>
    @foreach($databag->items as $item)
    <tr>
        <td style="width:15%;text-align:left"> {{$item->acName}}</td>
        <td style="width:10%;text-align:left">{{$item->acUm}} / {{$item->acUmEN}}</td>
        <td style="width:10%;text-align:left">{{$item->anQty}}</td>
        <td style=";text-align:right"> {{$item->anPrice}}{{$databag->currency}}</td>
        <td style="width:15%;text-align:right">{{$item->anValue}}{{$databag->currency}}</td>
        <td style="width:15%;text-align:right">{{$databag->total_value->acVat}}%</td>

    </tr>
    @endforeach

    <tr>
        <td style="width:15%;text-align:left"> </td>
        <td style="width:10%;text-align:left"> </td>
        <td style="width:10%;text-align:left"></td>
        <td style=";text-align:right;font-weight:bold"> Ukupno bez PDV-a / Total without VAT</td>
        <td style="width:15%;text-align:right">{{$databag->total_value->anValueWORebate}}{{$databag->currency}}</td>
        <td style="width:15%;text-align:right"></td>

    </tr>

    <tr>
        <td style="width:15%;text-align:left"> </td>
        <td style="width:10%;text-align:left"> </td>
        <td style="width:10%;text-align:left"></td>
        <td style=";text-align:right;font-weight:bold"> Popust / Discount</td>
        <td style="width:15%;text-align:right">{{$databag->total_value->anRebate}}%</td>
        <td style="width:15%;text-align:right"></td>

    </tr>

    <tr>
        <td style="width:15%;text-align:left"> </td>
        <td style="width:10%;text-align:left"> </td>
        <td style="width:10%;text-align:left"></td>
        <td style=";text-align:right;font-weight:bold"> Ukupno sa popustom bez PDV-a / Total with discoutn without VAT
        </td>
        <td style="width:15%;text-align:right">{{$databag->total_value->anValue}}{{$databag->currency}}</td>
        <td style="width:15%;text-align:right"></td>

    </tr>

    <tr>
        <td style="width:15%;text-align:left"> </td>
        <td style="width:10%;text-align:left"> </td>
        <td style="width:10%;text-align:left"></td>
        <td style=";text-align:right;font-weight:bold">PDV / VAT</td>
        <td style="width:15%;text-align:right">{{$databag->total_value->anVatValue}}{{$databag->currency}}</td>
        <td style="width:15%;text-align:right"></td>

    </tr>

    <tr>
        <td style="width:15%;text-align:left"> </td>
        <td style="width:10%;text-align:left"> </td>
        <td style="width:10%;text-align:left"></td>
        <td style=";text-align:right;font-weight:bold"> UKUPAN OBRAČUN / AMMOUNT DUE</td>
        <td style="width:15%;text-align:right;font-weight:bold">
            {{$databag->total_value->anTotalValue}}{{$databag->currency}}</td>
        <td style=" width:15%;text-align:right"></td>

    </tr>


    <tr>
        <td>
            <div style="height:15px"></div>
        </td>
    </tr>
    <tr>
        <td>
            <div style="height:15px"></div>
        </td>
    </tr>

</table>