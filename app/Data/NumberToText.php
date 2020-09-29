<?php

namespace App\Data;

class NumberToText
{

    public static $mapiranje = [
        0 => "",
        1 => "jedan",
        2 => "dva",
        3 => "tri",
        4 => "četiri",
        5 => "pet",
        6 => "šest",
        7 => "sedam",
        8 => "osam",
        9 => "devet",
        10 => "deset",
        11 => "jedanaest",
        12 => "dvanaest",
        13 => "trianest",
        14 => "četrnaest",
        15 => "petnaest",
        16 => "šesnaest",
        17 => "sedamnaest",
        18 => "osamnaest",
        19 => "devetnaest",
        20 => "dvadeset",
        30 => "trideset",
        40 => "četrdeset",
        50 => "pedeset",
        60 => "šezdeset",
        70 => "sedamdeset",
        80 => "osamdeset",
        90 => "devedeset",
        100 => "sto",
        200 => "dvesta",
        300 => "trista",
        400 => "četristo",
        500 => "petsto",
        600 => "šestto",
        700 => "sedamsto",
        800 => "osamsto",
        900 => "devetsto",
        1000 => "hiljada",
        1000000 => "miliona"
    ];


    public static $mapiranje_en = [
        0 => "",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifthteen",
        16 => "sixteen",
        17 => "seventeeb",
        18 => "eighteen",
        19 => "nineten",
        20 => "twenty",
        30 => "thirty",
        40 => "fourty",
        50 => "fifty",
        60 => "sixty",
        70 => "seventy",
        80 => "eighty",
        90 => "ninety",
        100 => "one hundred",
        200 => "two hundred",
        300 => "three hundred",
        400 => "four hundred",
        500 => "five hundred",
        600 => "six hundred",
        700 => "seven hundred",
        800 => "eight hundred",
        900 => "nine hundred",
        1000 => "thousand",
        1000000 => "million"
    ];





    private static  function vrati_celi_broj($broj)
    {

        return floor($broj);
    }

    public  static function vrati_decimale($broj)
    {

        $celi_broj = self::vrati_celi_broj($broj);
        // return [$celi_broj, $broj];

        return floor((round($broj - $celi_broj, 2)) * 100);
    }


    private  static function stepen_broja($broj)
    {

        if ($broj == 0) return 0;
        else return 1 + self::stepen_broja(floor($broj / 10));
    }




    public static function vrati_string($broj)
    {

        if ($broj == 0) return "nula";

        $celi_broj = self::vrati_celi_broj($broj);
        $decimale = self::vrati_decimale($broj);

        $stepen = self::stepen_broja($celi_broj);

        if ($stepen > 8) return "Prevelik broj - broj veci od 999 999 999";

        $milioni = floor($celi_broj / 1000000);
        $hiljade = floor(($celi_broj - $milioni * 1000000) / 1000);
        $jedinice = floor(($celi_broj - $milioni * 1000000 - $hiljade * 1000));


        $milioni_string = ($milioni != 0) ? self::vrati_kao_stotine($milioni, 6) : "";
        $hiljade_string = ($hiljade != 0) ? self::vrati_kao_stotine($hiljade, 3) : "";
        $jedinice_string = ($jedinice != 0) ? self::vrati_kao_stotine($jedinice, 1) : "";

        $decimale_string = ($decimale != 0) ? " i " .  strval($decimale) . "/100 para" : "";


        return $milioni_string . "" . $hiljade_string . "" . $jedinice_string . $decimale_string;
    }


    public static function vrati_string_en($broj)
    {

        if ($broj == 0) return "zero";

        $celi_broj = self::vrati_celi_broj($broj);
        $decimale = self::vrati_decimale($broj);

        $stepen = self::stepen_broja($celi_broj);

        if ($stepen > 8) return "Too big number - number bigger than 999 999 999";

        $milioni = floor($celi_broj / 1000000);
        $hiljade = floor(($celi_broj - $milioni * 1000000) / 1000);
        $jedinice = floor(($celi_broj - $milioni * 1000000 - $hiljade * 1000));


        $milioni_string = ($milioni != 0) ? self::vrati_kao_stotine_en($milioni, 6) : "";
        $hiljade_string = ($hiljade != 0) ? self::vrati_kao_stotine_en($hiljade, 3) : "";
        $jedinice_string = ($jedinice != 0) ?  self::vrati_kao_stotine_en($jedinice, 1) : "";

        $decimale_string = ($decimale != 0) ? " and " .  strval($decimale) . "/100" : "";


        return $milioni_string . " " . $hiljade_string . " " . $jedinice_string . $decimale_string;
    }


    private static function vrati_kao_stotine_en($broj, $stepen)
    {

        $stotine = floor($broj / 100);
        $desetice = floor(($broj - $stotine * 100) / 10);
        $jedinice = floor(($broj - $stotine * 100 - $desetice * 10));

        $stotine_string = "";
        $desetice_string = "";
        $jedinice_string = "";


        $sufix = "";


        if ($stotine > 0) {
            $stotine_string = self::$mapiranje_en[$stotine * 100];
        }


        if ($desetice < 2) {
            $desetice_string = self::$mapiranje_en[$desetice * 10 + $jedinice];
        } else {
            $desetice_string = self::$mapiranje_en[$desetice * 10];
            $jedinice_string = self::$mapiranje_en[$jedinice];
        }


        if ($stepen == 3) {
            $sufix = self::$mapiranje_en[1000];
        }

        if ($stepen == 6) {
            $sufix = self::$mapiranje_en[1000000];
        }

        if ($stepen == 1) {
            if ($stotine > 0)   $desetice_string = "and " . $desetice_string;
        }


        // if ($stepen == 3) {
        //     if (($jedinice == 2 || $jedinice == 1) && $desetice != 1) {
        //         if ($desetice == 0) {
        //             if ($jedinice == 1) $desetice_string = "";
        //             if ($jedinice == 2) $desetice_string = "dve";
        //         } else {
        //             if ($jedinice == 1) $jedinice_string = "jedna";
        //             if ($jedinice == 2) $jedinice_string = "dve";
        //         }
        //     }
        // }


        // if ($stepen == 6) {
        //     if ($jedinice == 1 && $desetice == 0 && $stotine == 0) {
        //         $desetice_string = "";
        //     }
        // }




        return $stotine_string . " " . $desetice_string . " " . $jedinice_string . " " . $sufix;
    }


    private static function vrati_kao_stotine($broj, $stepen)
    {

        $stotine = floor($broj / 100);
        $desetice = floor(($broj - $stotine * 100) / 10);
        $jedinice = floor(($broj - $stotine * 100 - $desetice * 10));

        $stotine_string = "";
        $desetice_string = "";
        $jedinice_string = "";


        $sufix = "";


        if ($stotine > 0) {
            $stotine_string = self::$mapiranje[$stotine * 100];
        }


        if ($desetice < 2) {
            $desetice_string = self::$mapiranje[$desetice * 10 + $jedinice];
        } else {
            $desetice_string = self::$mapiranje[$desetice * 10];
            $jedinice_string = self::$mapiranje[$jedinice];
        }


        if ($stepen == 3) {
            $sufix = self::$mapiranje[1000];
            if (($jedinice == 2 || $jedinice == 3) && $desetice != 1) {
                $sufix = "hiljade";
            }
            if ($desetice == 0 && $stotine == 0 && $jedinice == 1) {
                $sufix = "hiljadu";
            }
        }

        if ($stepen == 6) {
            $sufix = self::$mapiranje[1000000];
            if ($jedinice == 1 && $desetice != 1) {
                $sufix = "milion";
            }
        }



        if ($stepen == 3) {
            if (($jedinice == 2 || $jedinice == 1) && $desetice != 1) {
                if ($desetice == 0) {
                    if ($jedinice == 1) $desetice_string = "";
                    if ($jedinice == 2) $desetice_string = "dve";
                } else {
                    if ($jedinice == 1) $jedinice_string = "jedna";
                    if ($jedinice == 2) $jedinice_string = "dve";
                }
            }
        }


        if ($stepen == 6) {
            if ($jedinice == 1 && $desetice == 0 && $stotine == 0) {
                $desetice_string = "";
            }
        }




        return $stotine_string . "" . $desetice_string . "" . $jedinice_string . "" . $sufix . "";
    }
}
