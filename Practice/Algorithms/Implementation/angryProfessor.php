<?php

// Complete the angryProfessor function below.
function angryProfessor($k, $a) {
    $attedance;
    foreach($a as $arrival)
    {
        if($arrival <= 0) $attendace++;
    }

    if($attendace < $k) return "YES";
    else return "NO";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nk_temp);
    $nk = explode(' ', $nk_temp);

    $n = intval($nk[0]);

    $k = intval($nk[1]);

    fscanf($stdin, "%[^\n]", $a_temp);

    $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = angryProfessor($k, $a);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
