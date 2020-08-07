<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConvertNumberController extends Controller
{
    public function decimalToBinary(Request $request)
    {
        $biner = "";
        $decimal = $request->get('decimal');
        while ($decimal > 0 ) {
            if ($decimal % 2 == 0) {
                $biner = "0" . $biner;
            }else{
                $biner = "1" . $biner;
            }

            $decimal = floor($decimal/2);
        }

        return response()->json($biner, 200);
    }

    public function binaryToDecimal(Request $request)
    {
        $temp='';

        $biner = $request->get('biner');
        while($biner > 0){
            if($biner  < 1){ break; }
            $s=($biner % 2) ? '1' : '0';
            $temp=$s.$temp;
            $biner  /= 2;
        }

        return response()->json($temp, 200);
    }

    public function palindrome(Request $request)
    {
        $string = strtolower($request->get('string'));
        $stringWithSpace = str_replace(' ', '', $string);
        if (strrev($stringWithSpace) == $stringWithSpace){
            echo $string;
        }
        else{
            echo $string;
        }
    }
}
