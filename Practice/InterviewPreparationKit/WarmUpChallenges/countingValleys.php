<?php

// Complete the countingValleys function below.
function countingValleys($n, $s) {

    $moves = str_split($s);
    $level = 0;
    $valley = 0;
    $i=0;
 
    foreach($moves as $element)
    {
        if($element == "U") { 
            $level++;
            if($level == 0) $valley++;
        }
        else $level--;
    }

    return $valley;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
