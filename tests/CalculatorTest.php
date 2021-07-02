<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    /**
     * Initializer
     */
    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $expected
     * @dataProvider addWithNonNegativeNumbersProvider
     * @dataProvider addWithNegativeNumbersProvider
     */
    public function testAdd(float $a, float $b, float $expected): void
    {
        $this->assertEquals($expected, $this->calculator->add->calculate($a, $b));
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $expected
     * @dataProvider subtractWithNonNegativeNumbersProvider
     * @dataProvider subtractWithNegativeNumbersProvider
     */
    public function testSubtract(float $a, float $b, float $expected): void
    {
        $this->assertEquals($expected, $this->calculator->subtract->calculate($a, $b));
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $expected
     * @dataProvider multiplyWithNonNegativeNumbersProvider
     * @dataProvider multiplyWithNegativeNumbersProvider
     */
    public function testMultiply(float $a, float $b, float $expected): void
    {
        $this->assertEquals($expected, $this->calculator->multiply->calculate($a, $b));
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $expected
     * @dataProvider divideWithNonNegativeNumbersProvider
     * @dataProvider divideWithNegativeNumbersProvider
     */
    public function testDivide(float $a, float $b, float $expected): void
    {
        $this->assertEquals($expected, $this->calculator->divide->calculate($a, $b));
    }

    public function addWithNonNegativeNumbersProvider(): array
    {
        return [
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }

    public function addWithNegativeNumbersProvider(): array
    {
        return [
            [-1, 1, 0],
            [-1, -1, -2],
            [1, -1, 0]
        ];
    }

    public function subtractWithNonNegativeNumbersProvider(): array
    {
        return [
            [0, 1, -1],
            [5, 2, 3],
            [3, 1, 2]
        ];
    }

    public function subtractWithNegativeNumbersProvider(): array
    {
        return [
            [-1, 1, -2],
            [-1, -1, 0],
            [1, -1, 2]
        ];
    }

    public function multiplyWithNonNegativeNumbersProvider(): array
    {
        return [
            [0, 1, 0],
            [1, 0, 0],
            [3, 1, 3]
        ];
    }

    public function multiplyWithNegativeNumbersProvider(): array
    {
        return [
            [-1, 1, -1],
            [-1, -1, 1],
            [1, -3, -3]
        ];
    }

    public function divideWithNonNegativeNumbersProvider(): array
    {
        return [
            [0, 1, 0],
            [1, 2, 0.5],
            [3, 1, 3]
        ];
    }

    public function divideWithNegativeNumbersProvider(): array
    {
        return [
            [-1, 1, -1],
            [-1, -1, 1],
            [-3, -10, 0.3]
        ];
    }
}
