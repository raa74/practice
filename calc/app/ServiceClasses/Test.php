<?php


namespace App\ServiceClasses;

use Illuminate\Http\Request;
use App\Http\Requests\SubmitRequest;
class Test
{
    //public static function calculated(float $a, float $b, string $oper){

   // }
    public static function calc(SubmitRequest $request)
    {
        $expr = (string)($request->input); // вытаскивается значение из поля ввода и переводится в строку
       // $arr = explode(["+", "-"], $expr);

        $check = strpos($expr, $); // выполнение проверки
        $result = "";
        $b = (float)substr($expr, strpos($expr, $oper) + 1, strlen($expr));
        $oper = substr($expr, strpos($expr, $oper) + 1, strlen($expr));
        $a = (float)($request->input);
        switch ($oper) {
            case "+": $result = $a + $b; break;
            case "-": $result = $a - $b; break;
            default: $result = "Ошибка";
        };
            return view('calc', ['result' => $result]);
           // if ($check === true) {
         //   $b = (int)substr($expr, strpos($expr, '+') + 1, strlen($expr));
         //   $a = (int)($request->input);
          //  $result = $a + $b;
         //   return view('calc', ['result' => $result]);
        }
        //else {
     //       $ty = (int)substr($expr, strpos($expr, '-') + 1, strlen($expr));
      //      $fg = (int)($request->input('input'));
       //     $result = $fg - $ty;
      //      return view('calc', ['result' => $result]);
      //  }
      //  $arr = explode(['+', '-'], $request->input);

       // $result = Test::calc(15, 10, '+');
    }
   // public static function minus(SubmitRequest $request){
   //     $expr = (string)($request->input); // вытаскивается значение из поля ввода
//
   //     $pos = strpos($expr, '+'); // выполнение проверки на наличие знака "+"
  //      $result = "";
   //     if ($pos === true) {
   //         $ty = (int)substr($expr, strpos($expr, '+') + 1, strlen($expr));
   //         $fg = (int)($request->input('input'));
   //         $result = $fg + $ty;
   //         return view('calc', ['result' => $result]);
  //      }
    //}
}
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
    /* if (isset($_POST['submit'])) {
         $a = $_POST ['a'];
         $oper = $_POST ['oper'];
         $b = $_POST['b'];
     }
 }*/
}