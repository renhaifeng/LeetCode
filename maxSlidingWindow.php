<?php

function maxSlidingWindow($nums, $k)
{
    $count = count($nums);

    $ret = [];
    for ($i = 0; $i < $count - ($k - 1); $i++) {
        $ret[] = max(array_slice($nums, $i, $k));
    }
    return $ret;
}

echo implode(',', maxSlidingWindow([1, 3, -1, -3, 5, 3, 6, 7], 3)) . PHP_EOL;
