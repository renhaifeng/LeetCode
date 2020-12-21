<?php

function maxProfit($prices, $fee)
{
    $len = count($prices);
    // 状态机：动态规划解法
    $dp       = array_fill(0, $len, array_fill(0, 2, 0));
    // 第一天无股票的最大利润
    $dp[0][0] = 0;
    // 第一天有股票的最大利润
    $dp[0][1] = -$prices[0];
    for ($i = 1; $i < $len; $i++) {
        // 当天没股票 = 昨日没股票 和 昨日有股票，然后今日卖出
        $dp[$i][0] = max($dp[$i - 1][0], ($dp[$i - 1][1] + $prices[$i] - $fee));
        // 当天有股票 = 昨日有股票 和 昨日没股票，然后今天买入
        $dp[$i][1] = max($dp[$i - 1][1], ($dp[$i - 1][0] - $prices[$i]));
    }

    return $dp[$len - 1][0];
}

echo maxProfit([1, 3, 2, 8, 4, 9, 12], 2) . PHP_EOL;
