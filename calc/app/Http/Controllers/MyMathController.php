<?php

namespace App\Http\Controllers;

use App\ServiceClasses\Test;
use Illuminate\Http\Request;
use App\Http\Requests\SubmitRequest;
use mysql_xdevapi\Exception;

class MyMathController extends Controller
{
    public function submit(SubmitRequest $request)
    {
        try {
            $oper = array('+', '-','*','/');
            $expr = $request->input; // вытаскивается значение из поля ввода и переводится в строку
            $arrOper = str_replace(['+', '-','*','/'], [' + ', ' - ',' * ', ' / '], $expr);
            $arrOper = explode(' ', trim($arrOper));
            $result = "";
            // $this->ErrorToy(count($arrOper));
            For ($y = 0; $y<=count($arrOper); $y++) {
                $check = in_array($arrOper[$y], $oper);
                if ($check === true) {
                    switch ($arrOper[1]) {
                        case "+":
                            $result = $arrOper[0] + $arrOper[2];
                            break;
                        case "-":
                            $result = $arrOper[0] - $arrOper[2];
                            break;
                        case "*":
                            $result = $arrOper[0] * $arrOper[2];
                            break;
                        case "/":
                            $result = $arrOper[0] / $arrOper[2];
                            break;
                        default:
                            $result = "Ошибка";
                    };
                    return view('calc', ['result' => $result]);
                }
            }
        }
            catch (\Exception $ex) {
            $ex='';
            return view('calc', ['result' => $ex]);
        }
    }
}
