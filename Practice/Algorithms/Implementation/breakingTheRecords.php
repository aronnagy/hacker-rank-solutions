<?php

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $lowest = $scores[0];
    $l_count = 0;
    $highest = $scores[0];
    $h_count = 0;
    foreach($scores as $score)
    {
        if($score > $highest)
        {
            $h_count++;
            $highest = $score;
        }
        if($score < $lowest)
        {
            $l_count++;
            $lowest = $score;
        } 
    }

    $result = array(($h_count),($l_count));

    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
