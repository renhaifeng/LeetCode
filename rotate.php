<?php

function rotate(&$matrix)
{
	$arr = [];
	$count = count($matrix);
	$arr = array_fill(0, $count, array_fill(0, $count, 0));
	for ($i = 0; $i < $count; $i++) {
		for ($j = 0; $j < $count; $j++) {
			$arr[$j][$count - 1 - $i] = $matrix[$i][$j];

		}
	}
	$matrix = $arr;

}

function rotate2(&$matrix)
{
	$arr = $matrix;
    $n = count($matrix[0]); //nxn矩阵
    for ($i=0; $i < $n; $i++) { 
        $cow = array_reverse(array_column($arr,$i));
        $matrix[$i] = $cow;
    }
}

$matrix = [
  [1,2,3],
  [4,5,6],
  [7,8,9],
];
rotate($matrix);
var_dump($matrix) . PHP_EOL;

$matrix = [
  [ 5, 1, 9,11],
  [ 2, 4, 8,10],
  [13, 3, 6, 7],
  [15,14,12,16],
];
rotate2($matrix);
var_dump($matrix) . PHP_EOL;
