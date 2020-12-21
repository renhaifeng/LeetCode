<?php

/**
 * 389. https://leetcode-cn.com/problems/find-the-difference/
 */

function findTheDifference($s, $t)
{
    $s = array_count_values(str_split($s));
    $t = array_count_values(str_split($t));

    foreach ($t as $key => $item) {
        if (! isset($s[$key]) || $item != $s[$key]) {
            return $key;
        }
    }
}

function findTheDifference2($s, $t)
{
    $t_ASC_sum = array_sum(array_map('ord', str_split($t)));
    $s_ASC_sum = array_sum(array_map('ord', str_split($s)));

    return chr($t_ASC_sum - $s_ASC_sum);
}

function findTheDifference3($s, $t)
{
    $ans  = substr($t, -1, 1);
    $sLen = strlen($s);
    for ($i = 0; $i < $sLen; ++$i) {
        $ans ^= substr($s, $i, 1) ^ substr($t, $i, 1);
    }
    return $ans;
}

echo findTheDifference('abcd', 'abcde') . PHP_EOL;
echo findTheDifference2('a', 'aa') . PHP_EOL;
echo findTheDifference3('ae', 'aea') . PHP_EOL;