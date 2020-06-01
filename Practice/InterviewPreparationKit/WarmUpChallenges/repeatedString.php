<?php

// Complete the repeatedString function below.
function repeatedString($s, $n) {
    $result = 0;
    $length = strlen($s);
    $count = substr_count($s, $s[0]);
    if(
        1 <= $length
        && $length <= 100
        && 1 <= $n
        && $n <= 10^6
    )
    {
        $result = floor($n / $length) * $count;
        $end = substr($s, 0, ($n -(floor($n / $length) * $length)));
        $result += substr_count($end, $s[0]);
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

fscanf($stdin, "%ld\n", $n);

$result = repeatedString($s, $n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
