<?php

namespace App\Exceptions;

use InvalidArgumentException as Exception;

class InvalidArgumentException extends Exception implements CalculatorThrowable {}

