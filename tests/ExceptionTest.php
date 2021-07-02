<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;

final class ExceptionTest extends TestCase
{
    public function testException(): void
    {
        $this->expectException(TypeError::class);
        $calculator = new Calculator();
        $calculator->add->calculate('a', 5);
    }
}
