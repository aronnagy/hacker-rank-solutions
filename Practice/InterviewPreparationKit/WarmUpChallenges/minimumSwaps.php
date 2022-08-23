<?php

// Complete the minimumSwaps function below.
function minimumSwaps($arr) {
    $minSwaps = 0;
    
    for($i=0;$i<count($arr);$i++) {
        if($i+1!=$arr[$i]){
            $t = array_search($i+1,$arr);
            $temp=$arr[$t];
            $arr[$t]=$arr[$i];
            $arr[$i]=$temp;
            $minSwaps++;
        }
    }

    return $minSwaps;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = minimumSwaps($arr);

fwrite($fptr, $res . "\n");

fclose($stdin);
fclose($fptr);
