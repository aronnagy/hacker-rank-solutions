<?php

// Complete the matchingStrings function below.
function matchingStrings($strings, $queries) {
    $arr = array();
    $i=0;
    foreach($queries as $query)
    {
        foreach($strings as $string)
        {
            if(!in_array($query, $strings)) $arr[$i] = 0;
            else if($query == $string) $arr[$i]++;
        }
        $i++;
    }
    return $arr;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $strings_count);

$strings = array();

for ($i = 0; $i < $strings_count; $i++) {
    $strings_item = '';
    fscanf($stdin, "%[^\n]", $strings_item);
    $strings[] = $strings_item;
}

fscanf($stdin, "%d\n", $queries_count);

$queries = array();

for ($i = 0; $i < $queries_count; $i++) {
    $queries_item = '';
    fscanf($stdin, "%[^\n]", $queries_item);
    $queries[] = $queries_item;
}

$res = matchingStrings($strings, $queries);

fwrite($fptr, implode("\n", $res) . "\n");

fclose($stdin);
fclose($fptr);
