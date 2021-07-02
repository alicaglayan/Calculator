<?php

namespace App\Operations;

/**
 * Class Add
 * @package App\Operations
 */
class Add implements IOperation
{
    /**
     * @param float $val1
     * @param float $val2
     * @return float
     */
    public function calculate(float $val1, float $val2): float
    {
        return ($val1 + $val2);
    }
}
