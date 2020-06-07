<?php

/*
 * Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a) {
    $arrays;
    $counts = array_count_values($a);
    foreach($a as $firstNum)
    {
        foreach($a as $secondNum)
        {
            if(abs($firstNum-$secondNum) <= 1)
            {
                if($firstNum == $secondNum)
                {
                    $arrays[] = $counts[$firstNum];
                }
                else $arrays[] = ($counts[$firstNum] + $counts[$secondNum]);
                break;
            }
        }
    }
    return max($arrays);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = pickingNumbers($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
