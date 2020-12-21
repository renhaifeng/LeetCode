<?php

/**
 * 
 */

function minCostClimbingStairs($cost)
{
    $count = count($cost);
    $dp    = array_fill(0, $count + 1, 0);
    for ($i = 2; $i < $count + 1; $i++) {
        $dp[$i] = min($dp[$i - 1] + $cost[$i - 1], $dp[$i - 2] + $cost[$i - 2]);
    }

    return end($dp);
}

function minCostClimbingStairs2($cost) {
    $c1 = 0;
    $c2 = 0;

    $count = count($cost);
    for($i = 0; $i < $count; $i++)
    {
        $temp = $cost[$i] + min($c1, $c2);
        $c1   = $c2;
        $c2   = $temp;
    }
    return min($c1, $c2);
}

echo minCostClimbingStairs([10, 15, 20]) . PHP_EOL;
echo minCostClimbingStairs2([1, 100, 1, 1, 1, 100, 1, 1, 100, 1]) . PHP_EOL;
