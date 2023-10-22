<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calcs($value1, $operator, $value2)
    {
        if ($operator == "addition") {
            $result = $value1 + $value2;
        } elseif ($operator == "subtraction") {
            $result = $value1 - $value2;
        } elseif ($operator == "multiplication") {
            $result = $value1 * $value2;
        } elseif ($operator == "division") {
            $result = $value1 / $value2;
        } else {
            $result = " ";
        }

        return view("calcs", ["result" => $result]);
    }
}
