<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $numb1, int $numb2)
    {
        return $numb1 * $numb2;
    }

    public function isHeven(int $numb)
    {
        if ($numb % 2 === 0) {
            return true;
        } else {
            return false;
        }
    }
}