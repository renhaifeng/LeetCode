<?php

/**
 * 746. https://leetcode-cn.com/problems/min-cost-climbing-stairs/
 */

function coinChange($coins, $amount)
{
    if ($amount <= 0) {
        return 0;
    }

    $dp = array_fill(1, $amount, $amount + 1);
    for ($i = 1; $i <= $amount; $i++) {
        foreach ($coins as $coin) {
            if ($coin > $i) {
                continue;
            }
            $dp[$i] = min($dp[$i], ($dp[$i - $coin] ?? 0) + 1);
        }
    }


    return $dp[$amount] > $amount ? -1 : $dp[$amount];
}

echo coinChange([1, 2, 5], 11) . PHP_EOL;
echo coinChange([2], 3) . PHP_EOL;
echo coinChange([1], 0) . PHP_EOL;
echo coinChange([1], 1) . PHP_EOL;
echo coinChange([1], 2) . PHP_EOL;
