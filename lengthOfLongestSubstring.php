<?php

/**
 * 3. https://leetcode-cn.com/problems/longest-substring-without-repeating-characters/
 */

function lengthOfLongestSubstring($s)
{
    $left = 0;
    $max  = 0;
    $map  = [];
    $sLen = strlen($s);
    for ($i = 0; $i < $sLen; $i++) {
        $char = $s[$i];
        if (isset($map[$char])) {
            $left = max($left, $map[$char] + 1);
        }
        $max        = max($max, $i - $left + 1);
        $map[$char] = $i;
    }
    return $max;
}

echo lengthOfLongestSubstring('abcabcbb') . PHP_EOL;
echo lengthOfLongestSubstring('pwwkew') . PHP_EOL;
echo lengthOfLongestSubstring('a') . PHP_EOL;
