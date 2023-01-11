<?php

/*
 * Complete the 'makeAnagram' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. STRING a
 *  2. STRING b
 */

function makeAnagram($a, $b) {
    $a_counts = array_count_values(str_split($a));
    $b_counts = array_count_values(str_split($b));
    $deletion_steps = 0;
    foreach($a_counts as $a_char => $a_count) {
        if(!in_array($a_char,array_keys($b_counts))) {
           $deletion_steps += $a_count;
        } else {
           $deletion_steps += abs($a_count - $b_counts[$a_char]); 
        }
    }
    foreach($b_counts as $b_char => $b_count) {
        if(!in_array($b_char,array_keys($a_counts))) {
            $deletion_steps += $b_count;
        }
    }
    
    return $deletion_steps;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a = rtrim(fgets(STDIN), "\r\n");

$b = rtrim(fgets(STDIN), "\r\n");

$res = makeAnagram($a, $b);

fwrite($fptr, $res . "\n");

fclose($fptr);
