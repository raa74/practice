<?php

namespace App\ServiceClasses;

use App\HistoryCalc;
use App\Http\Controllers\MyMathController;

class Recording
{
    public static function Record(MyMathController $result) {
    $log = new HistoryCalc();
    $log->Mathstring = $result;
    $log->save();
}
}