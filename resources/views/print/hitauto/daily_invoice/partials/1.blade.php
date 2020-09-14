<table id="pozicije_table" class="parent"
    style="font-size:8pt;border-collapse: collapse; margin-top: -1px;table-layout: fixed; text-align:center;width:100%">


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


    <thead style="border:1px solid black;background: #dfe5f2;height: 30px;">




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
                <div style="height:8px"></div>
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

                @if($databag->invoice_header->anTypeId != 3)
                <div> {{$position->acName}}</div>
                <div>Ugovor: {{$position->acWorkOrder}}</div>
                <div>Vozilo: {{$position->acRegNo}}</div>
                @else
                {{$position->acName}} - {{$position->acRegNo}}
                @endif

            </td>
            <td style="width:50px;text-align:left;padding:2px 0px 2px 10px;">{{$position->anQty}}
            </td>
            <td style="width:50px;padding-right:15px;text-align:right">
                {{$position->acUm}} </td>

            <td style="width:100px;text-align:center">

                {{number_format($position->anPrice, 2)}}{{$databag->currency}}
            </td>
            <td style="width:50px;padding-right:15px;text-align:right">
                {{$position->anRebate}}
            </td>
            <td style="width:100px;text-align:center">
                {{number_format($position->anValue,2)}}{{$databag->currency}}
            </td>


        </tr>

        <tr>
            <td colspan="8">
                <hr class="thin_without_margin">
            </td>
        </tr>
        @endforeach

        @if($databag->invoice_header->anTypeId == 3)

        <tr>
            <td></td>
            <td colspan="3" style="text-align: left;font-size:12px">
                <div>
                    <div style="font-weight:bold">Podaci o vozilu</div>
                    <div>Kategorija: <span style="font-weight:bold">{{$databag->car->category}}</span> </div>
                    <div>Marka: <span style="font-weight:bold">{{$databag->car->brand}}</span> </div>
                    <div>Model: <span style="font-weight:bold">{{$databag->car->model}}</span> </div>
                    <div>Verzija: <span style="font-weight:bold">{{$databag->car->version}}</span> </div>
                    <div>Broj šasije: <span style="font-weight:bold">{{$databag->car->acChasis}}</span> </div>
                    <div>Broj motora: <span style="font-weight:bold">{{$databag->car->acEngine}}</span> </div>
                    <div>Snaga motora: <span style="font-weight:bold">{{$databag->car->acPower}}</span> </div>
                    <div>Zapremina motora: <span style="font-weight:bold">{{$databag->car->zapremina}}</span> </div>
                    <div>Boja vozila: <span style="font-weight:bold">{{$databag->car->acColor}}</span> </div>
                    <div>Broj sedišta: <span style="font-weight:bold">{{$databag->car->anSeatsNo}}</span> </div>
                    <div>Godina proizvodnje: <span
                            style="font-weight:bold">{{$databag->car->anYearOfManufacture}}</span> </div>
                </div>

            </td>
        </tr>



        @endif



    </tbody>
</table>