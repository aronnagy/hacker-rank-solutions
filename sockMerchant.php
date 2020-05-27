<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $sum_pairs = 0;
    $pairs = 0;
    foreach ($ar as $key => $value) {
        $pairs = 0;
        echo "$ar[$key], ";
        for($i=0; $i<9; $i++)
        {
            if($key != $i && $ar[$key] == $ar[$i])
            {
                $pairs++;
            }
        }
            $pairs = floor($pairs/2);
            $sum_pairs += $pairs;
            echo "WE HAD: $pairs PAIR \n";
    }
    if(bcmod($sum_pairs,2)==0){
        return $sum_pairs/2-1;}
    else {
        return floor($sum_pairs/2);}
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
