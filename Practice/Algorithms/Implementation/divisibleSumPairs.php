<?php

// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar) {
    $pairs = 0;
    for($i=0; $i<$n; $i++)
    {
        for($j=0; $j<$n; $j++)
        {
            if($i < $j)
            {
                if(($ar[$i]+$ar[$j]) % $k == 0) $pairs++;
            }
        }
    }
    return $pairs;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisibleSumPairs($n, $k, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
