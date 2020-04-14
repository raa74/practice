<?php

namespace App\ServiceClasses;

use App\HistoryCalc;
use http\Exception;
use App\Http\Controllers\MyMathController;

class Recording
{
    public static function Record(Float $result, String $expression) {
        try {
            $log = new HistoryCalc();
            $log->Mathstring = $expression;
            $log->Date = date("Y-m-d");
            $log->Result = $result;
            $log->save();
        }
        catch (\Exception $e){
            echo $e->getMessage();
        }
    return;
}
}
