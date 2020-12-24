<?php

/**
 * 7. 整数反转
 */

function reverse($x) {
    $num = intval(strrev(abs($x)));
    if ($num < pow(-2, 31) || $num > pow(2, 31) - 1) {
        return 0;
    }
    return $x < 0 ? -$num : $num;
}

function reverse2($x) {
    $num = 0;
    while ($x) {
        $num = $num * 10 + $x % 10;
        $x = intval($x / 10);
    }
    if ($num < pow(-2, 31) || $num > pow(2, 31) - 1) {
        return 0;
    }
    return $num;
}

echo reverse(123) . PHP_EOL;
echo reverse(-123) . PHP_EOL;
echo reverse(120) . PHP_EOL;
echo reverse2(123) . PHP_EOL;
echo reverse2(-123) . PHP_EOL;
echo reverse2(120) . PHP_EOL;
