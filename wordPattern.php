<?php

function wordPattern($pattern, $s)
{
    $patternLen = strlen($pattern);
    $strArr     = array_filter(explode(' ', $s));
    $strLen     = count($strArr);
    // 长度规则不一致，返回 false
    if ($patternLen !== $strLen) {
        return false;
    }
    $patternValNum = array_count_values($strArr);
    // 规则出现次数不一致，返回 false
    if (count(array_unique(str_split($pattern))) !== count($patternValNum)) {
        return false;
    }
    for ($i = 0; $i < $patternLen; $i++) {
        if (false !== $offset = strpos($pattern, $pattern[$i], $i + 1)) {
            if ($strArr[$i] !== $strArr[$offset]) {
                return false;
            }
        }
    }
    return true;
}

echo wordPattern('abba', 'dog cat cat dog') . PHP_EOL;
echo wordPattern('abbb', 'dog cat cat cat') . PHP_EOL;
echo wordPattern('bbbb', 'cat cat cat cat') . PHP_EOL;
echo wordPattern('aabb', 'cat cat cat cat') . PHP_EOL;
echo wordPattern('cccc', 'cat cat cat cat cat') . PHP_EOL;
echo wordPattern('ddddd', 'cat cat cat cat cat') . PHP_EOL;
echo wordPattern('ddcdd', 'cat cat dog cat cat') . PHP_EOL;
