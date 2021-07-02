<?php

namespace App\Operations;

/**
 * Class Divide
 * @package App\Operations
 */
class Divide implements IOperation
{
    /**
     * @param float $val1
     * @param float $val2
     * @return float
     */
    public function calculate(float $val1, float $val2): float
    {
        return ($val1 / $val2);
    }
}
