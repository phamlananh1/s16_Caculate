<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caculateControler extends Controller
{
    public function caculate(Request $request){
        $number1 = $request->number1;
        $number2 = $request->number2;
        $caculator = $request->caculator;
        switch ($caculator) {
            case 'addition':
                $result = $number1 + $number2;
                break;
            case 'subtraction':
                $result = $number1 - $number2;
                break;
            case 'multiplication':
                $result = $number1 * $number2;
                break;
            case 'division':
                if ($number2 == 0){
                    $error = "Number2 khong the bang khong, moi nhap lai";
                }else{
                    $result = $number1 / $number2;
                }
                break;
        }
        return view('index', compact('result', 'error'));
    }
}
