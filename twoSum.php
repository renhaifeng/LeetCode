<?php

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

echo implode(',', twoSum([1, 3, 4, 2], 6)) . PHP_EOL;
echo implode(',', twoSum([2, 7, 11, 15], 9)) . PHP_EOL;
echo implode(',', twoSum([2, 7, 11, 15], 13)) . PHP_EOL;
echo implode(',', twoSum([2, 7, 11, 15], 17)) . PHP_EOL;
echo implode(',', twoSum([2, 7, 11, 15], 18)) . PHP_EOL;
echo implode(',', twoSum([2, 7, 11, 14, 11], 22)) . PHP_EOL;
echo implode(',', twoSum([-1, -2, -3, -4, -5], -8)) . PHP_EOL;
