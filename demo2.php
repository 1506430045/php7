<?php

function funcSum(array $arr): int {
	return array_sum($arr);
} 

function arraySum(array ...$arrs): array {
	return array_map('funcSum', $arrs);
}

$arr1 = [1, 2, 3];
$arr2 = [2, 3, 4];
$arr3 = [3, 4, 5];

print_r(arraySum($arr1, $arr2, $arr3));
