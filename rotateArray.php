<?php

/**
 * 189. 旋转数组 https://leetcode-cn.com/problems/rotate-array/
 */

function rotate(&$nums, $k)
{
    $count = count($nums);
    $k     = $k % $count;
    $arr   = [];
    for ($i = 0; $i < $count; $i++) {
        if ($i >= $count - $k) {
            array_push($arr, $nums[$i]);
            unset($nums[$i]);
        }
    }
    $nums = array_merge($arr, $nums);
}

$nums = [1, 2, 3, 4, 5, 6, 7];
rotate($nums, 3);

var_dump($nums) . PHP_EOL;

$nums = [1, 2,];
rotate($nums, 3);

var_dump($nums) . PHP_EOL;
