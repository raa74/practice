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
                $v += 1;
                $h = array_search(")", $ded);        //и символа ")"
                for ($y = $v; $y !== $h; $y++) {              //Цикл заносит все остальные символы из скобок в новый массив
                    $you[$y] = $ded[$v++];
                }
            }
            else {
                return $ded;
            }
            return $you;                                   //и возвращает массив с выражением внутри скобок.
        }
    }
    public static function Filtr ($ded)
    {
        $v=0;
        $h=0;
        while ($h =='FALSE'||$v=="FALSE")
        {
            $v = array_search("(", $ded);
            $h = array_search(")", $ded);
            for ($d = 0; $d !== count($ded); $d++) {
                if ($ded[$d] === "(") {
                    $h = array_search(")", $ded);
                    for($v = array_search("(", $ded);$v !== $h; $v++)
                    {
                        unset($ded[$v]);
                    }
                    return $ded;
                }
                else
                    {
                        return $ded;
                    }
                }
            }
    }
}
