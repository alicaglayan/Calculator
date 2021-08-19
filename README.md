# Calculator – It is a PHP test project.
It is a test project. This project is not maintained.

## Installation with Composer

```sh
composer install
```
## Requirements
PHP 7.3 or above

## A Simple Example

```php
<?php

use App\Calculator;

// Load Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

try {
    // Create an instance
    $calculator = new Calculator();
    
    $add = $calculator->add->calculate(5, 3);
    echo '5 + 3 = '. $add .'\n';

    $divide = $calculator->divide->calculate(5, 3);
    echo '5 / 3 = '. $divide .'\n';

    $multiply = $calculator->multiply->calculate(5, 3);
    echo '5 * 3 = '. $multiply .'\n';

    $subtract = $calculator->subtract->calculate(5, 3);
    echo '5 - 3 = '. $subtract .'\n';
} catch (Throwable $e) {
    echo $e->getMessage();
}
```
That's it.

## Tests
[Calculator tests](https://bitbucket.org/artas/calculator/src/master/tests/) use PHPUnit 7.5
```sh
./vendor/bin/phpunit --testdox tests
```
