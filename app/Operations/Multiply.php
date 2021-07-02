<?php

namespace App\Operations;

/**
 * Class Multiply
 * @package App\Operations
 */
class Multiply implements IOperation
{
    /**
     * @param float $val1
     * @param float $val2
     * @return float
     */
    public function calculate(float $val1, float $val2): float
    {
        return ($val1 * $val2);
    }
}
