<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c) {
    $i = 0;
    $jump = -1;
    do
    {
        if($c[$i+2] == 1)
        {
            $i++;
            $jump++;
        }
        else
        {
            $i+= 2;
            $jump++;
        }
        echo $i;
    }
    while($i <= count($c));
    return $jump;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
