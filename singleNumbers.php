<?php

function singleNumbers($nums)
{
    $func = function ($item) {
        return $item == 1;
    };
    return array_keys(array_filter(array_count_values($nums), $func));
}

function singleNumbers2($nums)
{
    return array_keys(array_count_values($nums), 1);
}

echo implode(',', singleNumbers([4, 1, 4, 6])) . PHP_EOL;
echo implode(',', singleNumbers2([4, 1, 4, 6])) . PHP_EOL;