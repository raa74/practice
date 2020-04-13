<?php

namespace App\Http\Controllers;

use App\ServiceClasses\Recording;
use App\ServiceClasses\Test;
use Illuminate\Http\Request;
use App\Http\Requests\SubmitRequest;
use mysql_xdevapi\Exception;
use PhpParser\Node\Stmt\Foreach_;
use App\ServiceClasses\Math;

class MyMathController extends Controller
{
    public function submit(SubmitRequest $request)
    {
        try {
            $a = '';
            $op = '';
            $b = '';
            $oper = array('+', '-', '*', '/', '(', ')'); // задаётся массив используемых знаков операций
            $expr = $request->input;
            $arrOper = str_replace(['+', '-', '*', '/', '(', ')'], [' + ', ' - ', ' * ', ' / ', '(', ')'], $expr); // добавляются пробелы к операторам
            $arrOper = explode(' ', trim($arrOper)); // создаётся разделитель по пробелам, удаляются пробелы в начале и конце строки

            foreach ($arrOper as $value ){

                if (in_array($value,$oper)) {
                    $op = $value;
                }
                else {
                    if ($a == ''){
                      $a = $value;
                    }
                    else {
                        $b = $value;
                    }
                }
                if ($a !='' && $b != '' && $op != '') {
                    switch ($op ) {
                        case '+':
                            echo "$a : $b";
                           $a = Math::Plus($a,$b);
                           break;
                        case '-':
                            $a = Math::Minus($a,$b);
                            break;
                        case '*':
                            $a = Math::Ymno($a,$b);
                            break;
                        case '/':
                            $a = Math::Del($a,$b);
                            break;
                    }
                    $b = '';
                    $op = '';
                }
            }
            Recording::Record($a, $expr);
            return view('calc', ['result' => $a]);



        } catch (\Exception $ex) {
            $ex = '';
            return view('calc', ['result' => $ex]);
        }
    }
}
