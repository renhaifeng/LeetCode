<?php

/**
 * 135. 分发糖果 https://leetcode-cn.com/problems/candy/
 */

function candy($ratings) {
    // 每人发一颗糖
    $count = count($ratings);
    $left  = array_fill(0, $count, 1);
    $right = $left;

    // 计算左规则
    for($i = 1; $i < $count; $i++) {
        if ($ratings[$i] > $ratings[$i - 1]) {
            $left[$i] = $left[$i - 1] + 1;
        }
    }

    // 计算右规则
    for($i = $count - 1; $i >= 0; $i--) {
        if ($ratings[$i] > $ratings[$i + 1]) {
            $right[$i] = max($right[$i], $right[$i + 1] + 1);
        }
    }

    $sum = 0;
    for($i = 0; $i < $count; $i++) {
        $sum += max($left[$i], $right[$i]);
    }
    return $sum;
}

echo candy([1, 0, 2]) . PHP_EOL;
echo candy([1, 2, 2]) . PHP_EOL;
echo candy([1, 9, 1, 2, 1]) . PHP_EOL;
echo candy([1, 2, 87, 87, 87, 2, 1]) . PHP_EOL;
