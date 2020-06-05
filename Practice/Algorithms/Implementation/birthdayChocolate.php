<?php

// Complete the birthday function below.
function birthday($s, $d, $m) {
    var_dump($s); //candels
    var_dump($d); //age
    var_dump($m); //count of candles
    $result = 0;
    for($i=0; $i < count($s); $i++)
    {
        $sum = 0;
        for($j=$i; $j<($i+$m); $j++)
        {
            if($j == count($s)) break;
            $sum += $s[$j];
        }
        if($sum == $d) $result++;
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$dm = explode(' ', rtrim(fgets(STDIN)));

$d = intval($dm[0]);

$m = intval($dm[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
