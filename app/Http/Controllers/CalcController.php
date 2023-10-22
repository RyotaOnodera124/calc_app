<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calcs($value1, $operator, $value2)
    {
        if ($operator == "addition") {
            $answer = $value1 + $value2;
        } elseif ($operator == "subtraction") {
            $answer = $value1 - $value2;
        } elseif ($operator == "multiplication") {
            $answer = $value1 * $value2;
        } elseif ($operator == "division") {
            $answer = $value1 / $value2;
        } else {
            $answer = " ";
        }

        return view("calcs", ["answer" => $answer]);
    }
}
