<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    sort($arr);
    $mini = 0;
    $max = 0;
    for($i=0; $i<count($arr); $i++)
    {
        if($i > 0)
        {
            $max += $arr[$i];
        }
        if($i < count($arr)-1)
        {
            $mini += $arr[$i];
        }
    }

    print $mini . " " . $max;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
