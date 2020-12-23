<?php

function firstUniqChar($s)
{
    $arr = array_keys(array_count_values(str_split($s)), 1);
    if (empty($s) || empty($arr)) {
        return -1;
    }
    return strpos($s, $arr[0]);
}

function firstUniqChar2($s)
{
    $n = strlen($s);
    if ($n == 0) return -1;
    $hash = [];
    for ($i = 0; $i < $n; ++$i) {
        $hash[$s[$i]][] = $i;
    }

    foreach ($hash as $v) {
        if (count($v) == 1) return reset($v);
    }

    return -1;
}

// echo firstUniqChar('leetcodee') . PHP_EOL;
echo firstUniqChar2('loveleetcode') . PHP_EOL;
echo firstUniqChar2('') . PHP_EOL;
