<?php

namespace App\ServiceClasses;

use App\HistoryCalc;
use App\Log;
use App\Http\Controllers\MyMathController;
use phpDocumentor\Reflection\Types\Float_;
use PhpParser\Node\Expr\Cast\Int_;

class Recording
{
    public static function Record(Float $result, String $expression) {
        try {
            echo 'RECORD FIRST';
            $log = new HistoryCalc();
            echo 'RECORD SECOND';
            $log->Mathstring = $expression;
            $log->Date = '2001/01/01';
            $log->Result = $result;
            echo 'RECORD THIRD';
            echo $log->save();
            echo 'RECORD FOURTH';
        }
        catch (\Exception $e){
            echo $e->getMessage();
        }
    return;
}
}
