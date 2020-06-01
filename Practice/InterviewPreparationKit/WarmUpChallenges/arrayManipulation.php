<?php

// Complete the arrayManipulation function below.
function arrayManipulation($n, $queries) {
    $arr;
    //array creation
    for($i=0; $i<$n; $i++)
    {
        $arr[$i] = 0;
    }
    //operations
    $row = 0;
    echo $n;
    while($queries[$row][0] != null)
    {
        $a = $queries[$row][0];
        $b = $queries[$row][1];
        $k = $queries[$row][2];

        for($j=0; $j<$n; $j++)
        {
            echo " J: $j \n";
            if($j >= $a-1 && $j <= $b-1)
            {
                $arr[$j] += $k;
            }
        }
        $row++;
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
