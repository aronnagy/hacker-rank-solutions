<?php

// Complete the bonAppetit function below.
function bonAppetit($bill, $k, $b) {
    $sum = 0;
    for($i = 0; $i < count($bill); $i++) {
        if($i != $k) $sum += $bill[$i];
    }
    if($sum/2 == $b) print "Bon Appetit";
    else print ($b - $sum/2);
}

$nk = explode(' ', rtrim(fgets(STDIN)));

$n = intval($nk[0]);

$k = intval($nk[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);
