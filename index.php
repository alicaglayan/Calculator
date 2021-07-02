<?php

use App\Calculator;

require __DIR__ . '/vendor/autoload.php';

try {
    $calculator = new Calculator();
    $add = $calculator->add->calculate(5, 3);
    echo '5 + 3 = '. $add .'\n';

    $divide = $calculator->divide->calculate(5, 3);
    echo '5 / 3 = '. $divide .'\n';

    $multiply = $calculator->multiply->calculate(5, 3);
    echo '5 * 3 = '. $multiply .'\n';

    $subtract = $calculator->subtract->calculate('aa', 3);
    echo '5 - 3 = '. $subtract .'\n';
} catch (Throwable $t) {
    echo $t->getMessage();
}
