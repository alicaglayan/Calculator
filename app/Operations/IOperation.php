<?php

namespace App\Operations;

/**
 * Interface IOperation
 * @package App\Operations
 */
interface IOperation
{
    /**
     * @param float $val1
     * @param float $val2
     * @return float
     */
    public function calculate(float $val1, float $val2): float;
}
