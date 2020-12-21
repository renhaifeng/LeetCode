<?php

function romanToInt($s)
{
    $map  = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
    $map1 = ['IV' => 4, 'IX' => 9, 'XL' => 40, 'XC' => 90, 'CD' => 400, 'CM' => 900];

    $num  = 0;
    $sLen = strlen($s);
    for ($i = 0; $i < $sLen; $i++) {
        $ns = $s[$i + 1] ?? '';
        if (isset($map1[$s[$i] . $ns])) {
            $num += $map1[$s[$i] . $ns];
            $i++;
        } else {
            $num += $map[$s[$i]];
        }
    }
    return $num;
}

function romanToInt2($s)
{
    $map  = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000, 'IV' => 4, 'IX' => 9, 'XL' => 40, 'XC' => 90, 'CD' => 400, 'CM' => 900];
    $num  = 0;
    $sLen = strlen($s);
    for ($i = 0; $i < $sLen; $i++) {
        $ns = ($s[$i] ?? '') . ($s[$i + 1] ?? '');
        if (strlen($ns) == 2 && isset($map[$ns])) {
            $num += $map[$ns];
            $i++;
        } else {
            $num += $map[$s[$i]];
        }
    }
    return $num;
}

function romanToInt3($s)
{
    $map  = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
    $num  = 0;
    $sLen = strlen($s);
    for ($i = 0; $i < $sLen; $i++) {
        $n1 = $map[$s[$i]];
        $n2 = isset($s[$i + 1]) ? $map[$s[$i + 1]] : 0;
        if ($n1 < $n2) {
            $num += $n2 - $n1;
            $i++;
        } else {
            $num += $map[$s[$i]];
        }
    }
    return $num;
}

echo romanToInt('MCMXCVI') . PHP_EOL;
echo romanToInt('III') . PHP_EOL;
echo romanToInt2('IV') . PHP_EOL;
echo romanToInt2('IX') . PHP_EOL;
echo romanToInt3('LVIII') . PHP_EOL;
echo romanToInt3('MCMXCIV') . PHP_EOL;