<?php

/**
 * 1. 两数之和 https://leetcode-cn.com/problems/two-sum/
 */

function twoSum($nums, $target)
{
    $count = count($nums);
    for ($i = 0; $i < $count; $i++) {
        $a = $target - $nums[$i];
        if (false === $offset = array_search($a, $nums)) {
            continue;
        }
        if ($offset === $i) {
            continue;
        }
        return [$i, $offset];
    }
    return [];
}

// 双指针法
function twoSum2($nums, $target)
{
    $count = count($nums);
    $i = 0;
    $j = $count - 1;

    while ($i < $j) {
        $sum = $nums[$i] + $nums[$j];
        if ($sum < $target) {
            $i++;
        } elseif ($sum > $target) {
            $j--;
        } else {
            return [$i, $j];
        }
    }
    return [];
}

// 暴力解法（穷举）
function twoSum3($nums, $target)
{
    $count = count($nums);
    for ($i = 0; $i < $count - 1; $i ++) {
        for ($j = $i + 1; $j < $count; $j ++) {
            if ($nums[$i] + $nums[$j] == $target) {
                return [$i, $j];
            }
        }
    }
    return [];
}

// 哈希表解法
function twoSum4($nums, $target)
{
    $hash = [];
    $n = count($nums);
    for ($i = 0; $i < $n; ++$i) {
        $diff = $target - $nums[$i];
        if (isset($hash[$diff])) {
            return [$i, $hash[$diff]];
        }
        $hash[$nums[$i]] = $i;
    }
    return [];
}

echo implode(',', twoSum([1, 3, 4, 2], 6)) . PHP_EOL;
echo implode(',', twoSum([2, 7, 11, 15], 9)) . PHP_EOL;
echo implode(',', twoSum([2, 7, 11, 15], 13)) . PHP_EOL;
echo implode(',', twoSum([2, 7, 11, 15], 17)) . PHP_EOL;
echo implode(',', twoSum2([2, 7, 11, 15], 18)) . PHP_EOL;
echo implode(',', twoSum2([2, 7, 11, 14, 11], 22)) . PHP_EOL;
echo implode(',', twoSum2([-1, -2, -3, -4, -5], -8)) . PHP_EOL;
echo implode(',', twoSum2([3, 2, 4], 6)) . PHP_EOL;
