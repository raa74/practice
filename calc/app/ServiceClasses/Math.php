<?php


namespace App\ServiceClasses;


use http\Exception;

class Math
{
    public static function Plus($a,$b)
    {
    return $a+$b;
    }
    public static function Minus($a,$b)
    {
        return $a-$b;
    }
    public static function Ymno($a,$b)
    {
        return $a*$b;
    }
    public static function Del($a,$b)
    {
        if ($b== 0) {
             throw new \Exception('Деление на ноль');
        }
        else {
         return $a / $b;
        }
    }
}
