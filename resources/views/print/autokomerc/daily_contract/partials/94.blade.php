<table class="parent" style="width:100%;font-size:10px">

    <tr>

        <td style="width:50%">
            Datum ugovora / Agreement date: {{ substr($databag->reservation->adDateFrom, 0, 10)   }}

        </td>
        <td style="width:50%;border:1px solid black">

            <div style="text-align: center;padding:2px; ">
                {{$databag->subject->acName}}
            </div>

            <div style="text-align: center; padding:2px;">
                {{$databag->subject->acAddress}}
            </div>


            <div style="text-align: center; padding:2px;">
                @if($databag->subject->anSubjectTypeId == 1) PIB / VAT @else JMBG / PIN
                @endif:{{$databag->subject->acCode}}
            </div>


        </td>
    </tr>


    <tr>
        <td>
            <br style="line-height: 10px;">
        </td>
    </tr>
</table>