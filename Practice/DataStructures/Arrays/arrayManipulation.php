<?php

// Complete the arrayManipulation function below.
function arrayManipulation($n, $queries) {
    $arr;
    //array creation
    for($i=0; $i<$n; $i++)
    {
        $arr[$i] = 0;
    }
    for($i=0; $i<count($queries); $i++)
    {
        $a = $queries[$i][0]-1;
        $b = $queries[$i][1]-1;
        $k = $queries[$i][2];

        for($j=$a; $j<=$b; $j++)
        {
            $arr[$j] += $k;
        }
    } 
    return max($arr);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

$queries == array();

for ($i = 0; $i < $m; $i++) {
    fscanf($stdin, "%[^\n]", $queries_temp);
    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = arrayManipulation($n, $queries);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
