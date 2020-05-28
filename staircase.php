<?php

// Complete the staircase function below.
function staircase($n) {
    $stair = "";
    $stair_element = "";
    for($i=0;$i<$n;$i++)
    {
         $stair .= " ";
    }

    for($i=0;$i<$n;$i++)
    {
         $stair = substr($stair, 0, -($i+1));
         $stair_element .= "#";
         $stair .= $stair_element;
         echo $stair . "\n";
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
