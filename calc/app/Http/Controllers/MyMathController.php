<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyMathController extends Controller
{
    public function sumbit(Request $request)
    {
        $validat=$request->validate(
            [
                'input'=>'required|min:3'
            ]
        );
        $fy=(string)($request->input('input'));
        $pos = strpos($fy, '-');
        $ol="";
        if($pos===false){
            $ty =(int)substr($fy, strpos($fy, '+') + 1, strlen($fy));
            $fg=(int)($request->input('input'));
            $ol=$fg+$ty;
            return view('calc', ['ol' => $ol]);

        }
        else{
            $ty = (int)substr($fy, strpos($fy, '-') + 1, strlen($fy));
            $fg=(int)($request->input('input'));
            $ol=$fg-$ty;
            return view('calc', ['ol' => $ol]);
        }

    }
}
