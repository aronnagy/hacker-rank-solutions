<?php

/*
 * Complete the 'twoStrings' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s1
 *  2. STRING s2
 */

function twoStrings($s1, $s2) : string
{
    $s1_chars = str_split($s1);
    $s2_chars = str_split($s2);
    if(array_intersect($s1_chars,$s2_chars) != []) {
        return 'YES';
    } else {
        return 'NO';
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s1 = rtrim(fgets(STDIN), "\r\n");

    $s2 = rtrim(fgets(STDIN), "\r\n");

    $result = twoStrings($s1, $s2);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
