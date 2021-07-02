<?php

namespace App;

use App\Exceptions\InvalidArgumentException;
use App\Operations\IOperation;

/**
 * Class Calculator
 *
 * @property IOperation add
 * @property IOperation divide
 * @property IOperation multiply
 * @property IOperation subtract
 * @package App
 */
class Calculator
{
    /**
     * If variable does not exist in this class call it from operation
     *
     * @param string $operation
     * @return IOperation
     * @throws InvalidArgumentException
     */
    public function __get(string $operation): IOperation
    {
        if (! isset($this->{$operation})) {
            $ClassName = 'App\Operations\\'. ucwords(strtolower($operation));

            // Autoload is true
            if (! class_exists($ClassName, true)) {
                throw new InvalidArgumentException(sprintf('Operation "%s" has not been found.', $operation));
            }
            $this->{$operation} = new $ClassName();
        }
        return $this->{$operation};
    }
}
