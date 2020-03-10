<?php

namespace App\Http\Controllers;

use App\ServiceClasses\Test;
use Illuminate\Http\Request;
use App\Http\Requests\SubmitRequest;

class MyMathController extends Controller
{
        public function submit(SubmitRequest $request)
        {
            $oper = array('+', '-',);
            $expr = $request->input; // вытаскивается значение из поля ввода и переводится в строку
           // $check = strpos($expr,$oper); // выполнение проверки
            $arrOper=str_replace(['+','-'],[' + ',' - '],$expr);
            $arrOper=explode(' ',trim($arrOper));
           // dd($arrOper);
            $check=in_array(array('+','-'),$arrOper);
            $result = "0";
            if ($check === true) {
                $b = (int)substr($expr, strpos($expr, $oper) + 1, strlen($expr));
                $a = (int)($request->input('input'));
                switch ($oper) {
                    case "+":
                        $result = $a + $b;
                        break;
                    case "-":
                        $result = $a - $b;
                        break;
                    default:
                        $result = "Ошибка";
                };
                return view('calc', ['result' => $result]);
            }
            dd($check);
        }
}
