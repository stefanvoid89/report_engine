<html lang="en">
<script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{$title}}</title>
    <link href="{{URL::asset('/css/reset.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/css/fa_all.css')}}" rel="stylesheet">
    @if($style)
    <link href="{{URL::asset('/css/'.$style)}}" rel="stylesheet"> @endif

    <style>
        @page {
            margin: 0;
            size: A4 portrait;
        }

        body {
            margin: 0;
        }

        .sheet {
            margin: 0;
            /* overflow: hidden; */
            position: relative;
            box-sizing: border-box;
            page-break-after: always;
        }

        /** Paper sizes **/
        body.A3 .sheet {
            width: 297mm;
            height: 419mm;
        }

        body.A3.landscape .sheet {
            width: 420mm;
            height: 296mm;
        }

        body.A4 .sheet {
            width: 210mm;
            height: 296mm;
        }

        body.A4.landscape .sheet {
            width: 297mm;
            height: 209mm;
        }

        body.A5 .sheet {
            width: 148mm;
            height: 209mm;
        }

        body.A5.landscape .sheet {
            width: 210mm;
            height: 147mm;
        }

        body.letter .sheet {
            width: 216mm;
            height: 279mm;
        }

        body.letter.landscape .sheet {
            width: 280mm;
            height: 215mm;
        }

        body.legal .sheet {
            width: 216mm;
            height: 356mm;
        }

        body.legal.landscape .sheet {
            width: 357mm;
            height: 215mm;
        }

        /** Padding area **/

        .sheet.padding-5-10-5mm {
            padding: 5mm 10mm 5mm;
        }

        .sheet.padding-5mm {
            padding: 5mm;
        }

        .sheet.padding-7mm {
            padding: 7 mm;
        }

        .sheet.padding-10mm {
            padding: 10mm;
        }

        .sheet.padding-15mm {
            padding: 15mm;
        }

        .sheet.padding-20mm {
            padding: 20mm;
        }

        .sheet.padding-25mm {
            padding: 25mm;
        }

        /** For screen preview **/
        @media screen {
            body {
                background: #e0e0e0;
            }

            .sheet {
                background: white;
                box-shadow: 0 0.5mm 2mm rgba(0, 0, 0, 0.3);
                margin: 5mm auto;
            }
        }

        /** Fix for Chrome issue #273306 **/
        @media print {
            body.A3.landscape {
                width: 420mm;
            }

            body.A3,
            body.A4.landscape {
                width: 297mm;
            }

            body.A4,
            body.A5.landscape {
                width: 210mm;
            }

            body.A5 {
                width: 148mm;
            }

            body.letter,
            body.legal {
                width: 216mm;
            }

            body.letter.landscape {
                width: 280mm;
            }

            body.legal.landscape {
                width: 357mm;
            }
        }
    </style>

    <style>
        @font-face {
            font-family: VWHead;
            src: url("{{URL::to('/fonts/VWHead-Regular.otf')}}") format("opentype");
        }

        @font-face {
            font-family: VWHead;
            font-weight: bold;
            src: url("{{URL::to('/fonts/VWHead-Bold.otf')}}") format("opentype");
        }

        @font-face {
            font-family: VWText;
            src: url("{{URL::to('/fonts/VWText-Regular.otf')}}") format("opentype");
        }

        @font-face {
            font-family: VWText;
            font-weight: bold;
            src: url("{{URL::to('/fonts/VWText-Bold.otf')}}") format("opentype");
        }

        @font-face {
            font-family: "RenaultLife-Bold";
            src: url("{{ URL::to('/fonts/RenaultLife-Bold.ttf')    }}") format("truetype");
            font-weight: normal;
            font-style: normal;
        }




        @font-face {
            font-family: 'RenaultLife';
            src: url("{{ URL::to('/fonts/RenaultLife.ttf')    }}") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: "RenaultLife", 'Arial';
            font-size: 12px;
        }

        #header,
        #content,
        #footer {
            width: 100%
        }

        table.parent {
            width: 100%
        }

        table.table_border {
            border: 1px black solid;
            border-collapse: collapse;
        }

        table.table_border td {
            border: 1px black solid;
            padding: 2px;
        }
    </style>
</head>


<body class="A4">



</body>




<script>
    let data =  {!!$data!!}
</script>

</html>