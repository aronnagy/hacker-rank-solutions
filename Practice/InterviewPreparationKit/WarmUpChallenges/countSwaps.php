<?php

/*
 * Complete the 'countSwaps' function below.
 *
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function countSwaps($a) {
    $swaps = 0;
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a) - 1; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                $temp = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $temp;
                $swaps++;
            }
        }   
    }
    print('Array is sorted in '.$swaps.' swaps.'.PHP_EOL);
    print('First Element: '.$a[0].PHP_EOL);
    print('Last Element: '.$a[count($a)-1].PHP_EOL);
}

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

countSwaps($a);
