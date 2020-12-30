<?php

function lastStoneWeight($stones) {
    while (count($stones) > 1) {
        rsort($stones);
        $s1 = array_shift($stones);
        $s2 = array_shift($stones);
        if ($s1 !== $s2) $stones[] = $s1 - $s2;
    }

    $n = count($stones);
    if ($n === 0) return 0;
    if ($n === 1) return $stones[0];
}

function lastStoneWeight2($stones) {
    $n = count($stones);
    if ($n === 0) return 0;
    if ($n === 1) return $stones[0];
    
    $heap = new SplMaxHeap();
    foreach ($stones as $stone) {
        $heap->insert($stone);
    }

    while ($heap->count() > 1) {
        $s1 = $heap->extract();
        $s2 = $heap->extract();
        if ($s1 !== $s2) {
            $heap->insert($s1 - $s2);
        }
    }

    return $heap->count() === 0 ? 0 : $heap->extract();
}

echo lastStoneWeight([2, 7, 4, 1, 8, 1]) . PHP_EOL;
echo lastStoneWeight2([2, 7, 4, 1, 8, 1]) . PHP_EOL;
