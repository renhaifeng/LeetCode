<?php

// 状态规划算法学习

// 给定一个整数数组 nums ，找到一个具有最大和的连续子数组（子数组最少包含一个元素），返回其最大和。

function studyDp($arr)
{
    $count = count($arr);

    $currentSum = $bestSum = 0;
    for ($i = 0; $i < $count; $i++) {
        $currentSum = max($arr[$i], $currentSum + $arr[$i]);
        $bestSum    = max($currentSum, $bestSum);
    }
    return $bestSum;
}

echo studyDp([-2, 1, -3, 4, -1, 2, 1, -5, 4]) . PHP_EOL;
