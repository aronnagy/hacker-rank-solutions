<?php

// Complete the migratoryBirds function below.
function migratoryBirds($arr) {
    $values = array_count_values($arr);
    arsort($values);
    $popular = array_slice(array_keys($values), 0, 1, true);
    return $popular[0];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
