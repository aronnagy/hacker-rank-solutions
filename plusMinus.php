<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $n = 0;
    $positive = 0;
    $negative = 0;
    $zero = 0;
    foreach($arr as $element)
    {
        $n++;
        if($element > 0) $positive++;
        else if($element < 0) $negative++;
        else $zero++;
    }

    print $positive/$n . "\n" . $negative/$n . "\n" . $zero/$n;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
