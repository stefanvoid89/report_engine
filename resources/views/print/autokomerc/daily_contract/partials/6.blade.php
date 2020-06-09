<table class="parent" style="font-size:12px;width:100%">
    @if(isset($databag->car_damage->acKey))
    <tr>
        <td colspan="3"><br></td>
    </tr>
    <tr>
        <td style="font-size:13px; font-weight: bold; text-transform: uppercase;" colspan="3">PREGLED VOZILA
            PRE IZDAVANJA: {{$databag->car_damage->acKey}}</td>
    </tr>
    <tr>
        <td>Datum i vreme: {{$databag->car_damage->adDate}}</td>
    </tr>
    <tr>
        <td colspan="3">
            <hr>
        </td>
    </tr>
    <tr>
        <td style="width:60%;vertical-align:top">
            <table style="width:100%;font-size:12px">
                <tr>
                    <td colspan="2" style="font-weight:bold">Enterijer vozila
                    </td>

                </tr>
                @if(count($databag->selected_int_car_damages_full)== 0)
                <tr>
                    <td colspan="2">Nema ostecenja
                    </td>

                </tr>
                @else
                @foreach ($databag->selected_int_car_damages_full as $int)
                <tr>
                    <td style="width:50%">{{$int->acName}} </td>
                    <td>{{$int->acType}}</td>
                </tr>
                @endforeach
                @endif
                <tr>
                    <td colspan="2"><br></td>
                </tr>

                <tr>
                    <td style="font-weight:bold">Eksterijer vozila
                    </td>

                </tr>
                @if(count($databag->selected_ext_car_damages_full) == 0)
                <tr>
                    <td colspan="2">Nema ostecenja
                    </td>

                </tr>
                @else
                @foreach ($databag->selected_ext_car_damages_full as $ext)
                <tr>
                    <td>{{$ext->acName}}</td>
                    <td>{{$ext->acType}}</td>
                </tr>
                @endforeach
                @endif
            </table>
        </td>



        <td style="width:40%">
            <table style="width:100%;font-size:12px">

                <tr>
                    <td>
                        <table id="vozilo_steta"
                            style="background-position:center; background-repeat:no-repeat; margin: 10px auto 10px auto;"
                            width="290" height="150" background="/images/vozilo_steta_print.jpg">
                            <tbody>
                                <tr>
                                    <td width="22" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="15" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="63" valign="middle" height="10" align="center">
                                        @if (in_array(10, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="20" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="70" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="15" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="47" valign="middle" height="10" align="center">
                                        <table width="47" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" align="center">

                                                        @if (in_array(76,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="15" valign="middle" align="center"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="18" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="20" valign="middle" height="10" align="center">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="22" valign="middle" height="10" align="center">
                                        @if (in_array(1, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="15" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="63" valign="middle" height="10" align="right">
                                        <table width="63" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="12" valign="middle" align="center"></td>
                                                    <td valign="middle" align="center">

                                                        @if (in_array(11,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="12" valign="middle" align="center">

                                                        @if (in_array(15,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="20" valign="middle" height="10" align="center">
                                        @if (in_array(61, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="70" valign="middle" height="10" align="center">
                                        @if (in_array(62, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="15" valign="middle" height="10" align="center">
                                        @if (in_array(63, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="47" valign="middle" height="10" align="center">
                                        <table width="47" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" align="center">

                                                        @if (in_array(75,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="15" valign="middle" align="center"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="18" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="20" valign="middle" height="10" align="center">
                                        @if (in_array(85, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td width="22" valign="bottom" height="25" align="center">
                                        @if (in_array(2, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="15" valign="middle" height="25" align="center">
                                        <table width="15" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="top" height="12" align="center">

                                                        @if (in_array(5,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="bottom" height="12" align="center">

                                                        @if (in_array(6,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="63" valign="middle" height="25" align="center">
                                        <table width="63" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="12" valign="middle" height="10" align="center">

                                                        @if (in_array(12,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="10" align="center">

                                                        @if (in_array(89,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="12" valign="middle" height="10" align="center">

                                                        @if (in_array(14,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="12" valign="middle" height="15" align="center">
                                                    </td>
                                                    <td valign="middle" height="15" align="center">

                                                        @if (in_array(13,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="12" valign="bottom" height="15" align="center">

                                                        @if (in_array(96,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="20" valign="middle" height="25" align="center">
                                        <table width="20" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(28,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(30,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="70" valign="middle" height="25" align="center">
                                        <table width="70" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(29,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="22" valign="middle" height="12" align="center">

                                                        @if (in_array(41,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="22" valign="middle" height="12" align="center">

                                                        @if (in_array(42,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(31,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="22" valign="middle" height="12" align="center">

                                                        @if (in_array(43,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="22" valign="middle" height="12" align="center">

                                                        @if (in_array(44,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="15" valign="middle" height="25" align="center">
                                        @if (in_array(67, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="47" valign="middle" height="25" align="center">
                                        <table width="47" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(92,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="15" valign="middle" height="12" align="center">

                                                        @if (in_array(69,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(68,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="12" align="center"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="18" valign="middle" height="25" align="center">
                                        @if (in_array(81, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="20" valign="bottom" height="25" align="center">

                                        @if (in_array(86, $databag->selected_ext_car_damages)) X @endif

                                    </td>
                                </tr>
                                <tr>
                                    <td width="22" valign="middle" align="center"></td>
                                    <td width="15" valign="middle" align="center">
                                        @if (in_array(7, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="63" valign="middle" align="center">
                                        <table width="63" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="32" valign="middle" height="20" align="center">

                                                        @if (in_array(16,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="20" align="center">

                                                        @if (in_array(17,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="32" valign="middle" height="20" align="center">

                                                        @if (in_array(18,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="20" align="center">

                                                        @if (in_array(19,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="32" valign="middle" height="20" align="center">

                                                        @if (in_array(20,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="20" align="center">

                                                        @if (in_array(21,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="20" valign="middle" align="center">
                                        <table width="20" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="10" align="center">

                                                        @if (in_array(32,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="15" align="center">

                                                        @if (in_array(33,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="10" align="center">

                                                        @if (in_array(34,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="15" align="center">

                                                        @if (in_array(35,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="10" align="center">

                                                        @if (in_array(36,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="70" valign="middle" align="center">
                                        <table width="70" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(55,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(56,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(95,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="17" align="center">

                                                        @if (in_array(49,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="17" align="center">

                                                        @if (in_array(50,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="17" align="center">

                                                        @if (in_array(51,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="17" align="center">

                                                        @if (in_array(52,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="17" align="center">

                                                        @if (in_array(53,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="17" align="center">

                                                        @if (in_array(54,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(57,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(58,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(94,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="15" valign="middle" align="center">
                                        <table width="15" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="20" align="center">

                                                        @if (in_array(59,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="20" align="center">

                                                        @if (in_array(93,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="20" align="center">

                                                        @if (in_array(60,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="47" valign="middle" align="center">
                                        <table width="47" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2" valign="middle" height="10" align="center">

                                                        @if (in_array(97,
                                                        $databag->selected_ext_car_damages)) X @endif





                                                        @if (in_array(98,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="25" align="center">

                                                        @if (in_array(77,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="25" align="center">

                                                        @if (in_array(79,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="25" align="center">

                                                        @if (in_array(78,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="25" align="center">

                                                        @if (in_array(80,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="18" valign="middle" align="center">
                                        <table width="18" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="30" align="center"></td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="30" align="center"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="20" valign="middle" align="center"></td>
                                </tr>
                                <tr>
                                    <td width="22" valign="top" height="25" align="center">
                                        @if (in_array(3, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="15" valign="middle" height="25" align="center">
                                        <table width="15" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="top" height="12" align="center">

                                                        @if (in_array(8,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="bottom" height="12" align="center">

                                                        @if (in_array(9,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="63" valign="middle" height="25" align="center">
                                        <table width="63" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="12" valign="middle" height="15" align="center">
                                                    </td>
                                                    <td valign="middle" height="15" align="center">

                                                        @if (in_array(25,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="12" valign="middle" height="15" align="center">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="12" valign="middle" height="10" align="center">

                                                        @if (in_array(24,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="10" align="center">

                                                        @if (in_array(90,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="12" valign="middle" height="10" align="center">

                                                        @if (in_array(26,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="20" valign="middle" height="25" align="center">
                                        <table width="20" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(37,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(39,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="70" valign="middle" height="25" align="center">
                                        <table width="70" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(38,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="22" valign="middle" height="12" align="center">

                                                        @if (in_array(45,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="22" valign="middle" height="12" align="center">

                                                        @if (in_array(46,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(40,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="22" valign="middle" height="12" align="center">

                                                        @if (in_array(47,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="22" valign="middle" height="12" align="center">

                                                        @if (in_array(48,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="15" valign="middle" height="25" align="center">
                                        @if (in_array(70, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="47" valign="middle" height="25" align="center">
                                        <table width="47" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(71,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="15" valign="middle" height="12" align="center">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(91,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td valign="middle" height="12" align="center">

                                                        @if (in_array(72,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="18" valign="middle" height="25" align="center">
                                        @if (in_array(84, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="20" valign="top" height="25" align="center">
                                        @if (in_array(87, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td width="22" valign="middle" height="10" align="center">
                                        @if (in_array(4, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="15" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="63" valign="middle" height="10" align="right">
                                        <table width="63" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="12" valign="middle" align="center"></td>
                                                    <td valign="middle" align="center">

                                                        @if (in_array(23,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="12" valign="middle" align="center">

                                                        @if (in_array(27,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="20" valign="middle" height="10" align="center">
                                        @if (in_array(64, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="70" valign="middle" height="10" align="center">
                                        @if (in_array(65, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="15" valign="middle" height="10" align="center">
                                        @if (in_array(66, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="47" valign="middle" height="10" align="center">
                                        <table width="47" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" align="center">

                                                        @if (in_array(73,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="15" valign="middle" align="center"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="18" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="20" valign="middle" height="10" align="center">
                                        @if (in_array(88, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td width="22" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="15" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="63" valign="middle" height="10" align="center">
                                        @if (in_array(22, $databag->selected_ext_car_damages)) X @endif
                                    </td>
                                    <td width="20" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="70" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="15" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="47" valign="middle" height="10" align="center">
                                        <table width="47" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" align="center">

                                                        @if (in_array(74,
                                                        $databag->selected_ext_car_damages)) X @endif




                                                    </td>
                                                    <td width="15" valign="middle" align="center"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td width="18" valign="middle" height="10" align="center">
                                    </td>
                                    <td width="20" valign="middle" height="10" align="center">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    @endif
</table>