<?php

function findContentChildren($g, $s) {
    sort($g);
    sort($s);
    $i = $j = 0;
    while ($i < count($g) && $j < count($s)) {
        if ($g[$i] <= $s[$j]) {
            $i++;
        }
        $j++;
    }

    return $i;
}

echo findContentChildren([1, 2, 3], [1, 1]) . PHP_EOL;
echo findContentChildren([1, 2, 3], [1, 1, 2, 3]) . PHP_EOL;
echo findContentChildren([1, 2], [1, 2, 3]) . PHP_EOL;
