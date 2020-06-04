<?php

// Complete the hourglassSum function below.
function hourglassSum($arr) {
    $max_sum = -1000;
    for($row=0; $row <= 3; $row++)
    {
        for($column=0; $column <= 3; $column++){
            $sum = 0;
            for($i=0; $i < 3; $i++)
            {
                for($j=0; $j < 3; $j++)
                {
                    if($i == 1 && $j == 0) {}
                    else if($i == 1 && $j == 2) {}
                    else $sum += $arr[$row + $i][$column + $j];
                }
            }
            if($sum > $max_sum) $max_sum = $sum;
        }
    }
    return $max_sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$arr == array();

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = hourglassSum($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
