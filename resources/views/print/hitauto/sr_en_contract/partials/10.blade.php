<table cellspacing="0" cellpadding="0" class="parent whole_page " id="sr_en">

    <tbody>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td style="width:50%;text-align: center">
                <div style="font-weight: bold">INDIVIDUAL VEHICLE LEASE AGREEMENT</div>
                <div style="font-weight: bold"> No.{{$databag->reservation->acKey}}</div>
            </td>
            <td style="width:50%;text-align: center">
                <div style="font-weight: bold">POJEDINAČNI UGOVOR O ZAKUPU VOZILA </div>
                <div style="font-weight: bold"> br.{{$databag->reservation->acKey}}</div>
            </td>
        </tr>

        <tr>
            <td style="font-size:1px;line-height:10px;">&nbsp;</td>
            <td></td>
        </tr>


        <tr>
            <td>Entered into in Belgrade, this {{$databag->reservation->adDateFrom}} , by and between:</td>
            <td>Zaključen u Beogradu, dana {{$databag->reservation->adDateFrom}} godine, između sledećih ugovornih
                strana:</td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>

        <tr>
            <td>1. <span style="font-weight: bold">{{$databag->company_info->acName}}</span>, address:
                {{$databag->company_info->acAddress}}, registration
                number: {{$databag->company_info->acRegNo}}, TIN:
                {{$databag->company_info->acCode}},
                represented herein by Mr. Zoran Dragoj, General Manager (hereinafter referred to as <span
                    style="font-weight: bold">“the
                    Lessor”</span>)
            </td>
            <td>
                1.<span style="font-weight: bold">{{$databag->company_info->acName}}</span>, adresa:
                {{$databag->company_info->acAddress}}, matični broj:
                {{$databag->company_info->acRegNo}}, PIB: {{$databag->company_info->acCode}}
                koje
                zastupa Zoran Dragoj, direktor (u daljem tekstu: <span style="font-weight: bold">Zakupodavac</span>)
            </td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:10px;">&nbsp;</td>
            <td></td>
        </tr>

        <tr>
            <td>and</td>
            <td>i</td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:10px;">&nbsp;</td>
            <td></td>
        </tr>





        <tr>
            <td>1. <span style="font-weight: bold">{{$databag->subject->acName}}</span> {{$databag->subject->acCity}},
                {{$databag->subject->acAddress}} street,
                @if( $databag->subject->anSubjectTypeId == "1")
                Company
                registration No.
                {{$databag->subject->acRegNo}}, TIN: {{$databag->subject->acCode}}
                @else
                ID: {{$databag->subject->acCode}}
                @endif
                (hereinafter
                referred
                to as <span style="font-weight: bold">“the Lessee”</span>)</td>
            <td>1. <span style="font-weight: bold">{{$databag->subject->acName}}</span> {{$databag->subject->acCity}},
                {{$databag->subject->acAddress}},
                @if( $databag->subject->anSubjectTypeId == "1")
                Matični broj:{{$databag->subject->acRegNo}}, PIB: {{$databag->subject->acCode}}
                @else JMBG: {{$databag->subject->acCode}}
                @endif
                (u daljem
                tekstu:
                <span style="font-weight: bold">Zakupac</span>)</td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td>(The Lessor and the Lessee are hereinafter jointly referred to as “the Parties” and
                individually as
                “the
                Party”).</td>
            <td>(U daljem tekstu Zakupodavac i Zakupac će se zajednički označavati kao Ugovorne strane, a
                pojedinačno
                kao Ugovorna strana).</td>
        </tr>
        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>


        <tr>
            <td>WHEREAS the Lessee is fully aware of the foregoing and accepts and agrees to enter into a legal
                relationship with the Lessor under the terms and conditions set out herein.

            </td>
            <td>Zakupac je u potpunosti upoznat sa gore navedenim i saglasan je da uđe u pravni odnos sa Zakupodavcem,
                na način i pod uslovima utvrđenim u ovom Ugovoru. </td>
        </tr>

        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td> WHEREAS the Lessor is a company whose core business activity is leasing motor vehicles and other
                equipment to third parties (lessees) against consideration, while the Lessee is a company whose
                business activity is : {{$databag->subject->acCoreActivityEN}}.</td>
            <td>Ugovorne strane saglasno konstatuju da je Zakupodavac privredno društvo čija je delatnost
                davanje u zakup motornih vozila i druge opreme trećim licima (korisnicima) uz određenu naknadu, a
                Zakupac je privredno društvo čija je osnovna delatnost: {{$databag->subject->acCoreActivity}}.</td>
        </tr>

        <tr>
            <td style="font-size:1px;line-height:20px;">&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td>WHEREAS the Parties have entered, as the individual Agreement for a specific vehicle, as follow s:</td>
            <td>Ugovorne strane dalje konstatuju pojedinačni Ugovor za konkretno vozilo, kako sledi: </td>
        </tr>





    </tbody>





</table>