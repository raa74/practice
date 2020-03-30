<?php


namespace App\ServiceClasses;

use http\Exception;
class CheckMas
{
    public static function Check ($ded)
    {
        $you = array();
        for ($d = 0; $d !== count($ded); $d++) {             //Цикл длиться пока $d не достигнет кол-во размера массива.
            if ($ded[$d] === "(") {                          //Если ячейка массива ровна "("
                $v = array_search("(", $ded);        //считывает нахождение символа "("
                $v+=1;
                $h = array_search(")", $ded);        //и символа ")"
                for ($y=$v;$y!==$h;$y++) {              //Цикл заносит все остальные символы из скобок в новый массив
                    $you[$y]=$ded[$v++];
                }
            } else {
                return;
            }
            return $ded;                                   //и возвращает массив с выражением внутри скобок.
        }
    }
}
