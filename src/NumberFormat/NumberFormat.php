<?php
namespace EsperoSoft\NumberFormat;

use EsperoSoft\Translate\Translate;



class NumberFormat{

    static function formatNumber($number):?string
    {
        $number = (int) $number;

        if(!is_numeric($number)){
            $number = 0;
        }
        
        $result = "";
        if($number >= 1000000000 && $number < 999999999999){
            $result .= number_format($number/1000000000, 1)."Ma";
        }else if($number >= 1000000 && $number < 999999999){
            $result .= number_format($number/1000000, 1)."M";
        }else if($number >= 1000 && $number < 999999){
            $result .= number_format($number/1000, 1)."k";
        }else{
            $result .= ($number);

        }
        
        return $result ? $result : 0;
    }

}