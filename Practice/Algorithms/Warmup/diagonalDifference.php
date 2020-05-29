<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    $primary_diagonal = 0;
    $secondary_diagonal = 0;
    for($i=0; $i<count($arr); $i++)
    {
        for($j=0; $j<count($arr); $j++)
        {
            if($i == $j) $primary_diagonal += $arr[$i][$j];
            if ($i == count($arr) - $j - 1) $secondary_diagonal += $arr[$i][$j]; 
        }
    }
    return abs($primary_diagonal - $secondary_diagonal);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
