<?php

/**
 * 830. 较大分组的位置  https://leetcode-cn.com/problems/positions-of-large-groups/
 */

function largeGroupPositions($s)
{
    $length = strlen($s);

    $ret = [];
    $num = 1;
    for ($i = 0; $i < $length - 1; $i ++) {
        if ($s[$i] != $s[$i + 1]) {
            if ($num >= 3) {
                $ret[] = [$i - $num + 1, $i];
            }
            $num = 1;
        } else {
            $num ++;
        }
    }
    return $ret;
}

var_dump(largeGroupPositions('aaa')) . PHP_EOL;
var_dump(largeGroupPositions('abbxxxxzzy')) . PHP_EOL;
var_dump(largeGroupPositions('abc')) . PHP_EOL;
var_dump(largeGroupPositions('abcdddeeeeaabbbcd')) . PHP_EOL;
var_dump(largeGroupPositions('aba')) . PHP_EOL;
