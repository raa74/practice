<?php


namespace App\ServiceClasses;


use http\Exception;
use phpDocumentor\Reflection\Types\Null_;

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
        try {
            if ($b == 0) {
                throw new \Exception('Деление на ноль');
            } else {
                return $a / $b;
            }
        }
        catch (\Exception $e){
        echo $e->getMessage();
    }
    return Null;
    }
}