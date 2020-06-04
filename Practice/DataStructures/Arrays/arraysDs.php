<?php

// Complete the reverseArray function below.
function reverseArray($a) {
    $arr = array();
    for($i=count($a); $i!=0;$i--)
    {
        $arr[] = $a[$i-1]; 
    }
    return $arr;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $arr_count);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = reverseArray($arr);

fwrite($fptr, implode(" ", $res) . "\n");

fclose($stdin);
fclose($fptr);
