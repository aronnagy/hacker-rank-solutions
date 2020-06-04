<?php

/*
 * Complete the 'dynamicArray' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. 2D_INTEGER_ARRAY queries
 */

function dynamicArray($n, $queries) {
    for($i=0;$i<$n;$i++) $seqList[] = 0;
    for($i=0; $i<count($queries); $i++)
    {
        $seq = ($queries[$i][1] xor $lastAnswer) % $n;
        if($queries[$i][0] == 1)
        {
            $seqList[$seq] = $queries[$i][2];
        } 
        else
        {
            $lastAnswer = $queries[$i][2] % count($seq);
        }
    }
    $seqList = array(0 => $seqList[1], 1 => $seqList[0]);
    return $seqList;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$q = intval($first_multiple_input[1]);

$queries = array();

for ($i = 0; $i < $q; $i++) {
    $queries_temp = rtrim(fgets(STDIN));

    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = dynamicArray($n, $queries);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
