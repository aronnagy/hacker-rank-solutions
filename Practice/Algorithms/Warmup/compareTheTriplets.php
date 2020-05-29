<?php

// Complete the compareTriplets function below.
function compareTriplets($a, $b) {
    $a_points = 0;
    $b_points = 0;
    for($i=0; $i<count($a); $i++)
    {
        if($a[$i] > $b[$i])
        {
            $a_points++;
        }
        else if($a[$i] < $b[$i])
        {
            $b_points++;
        }
    }
    return array($a_points, $b_points);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
