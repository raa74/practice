<?php


namespace App\ServiceClasses;


use App\HistoryCalc;

class Retrieving
{
    public static function Retrieve(){
        $log = HistoryCalc::find(1);
}
}