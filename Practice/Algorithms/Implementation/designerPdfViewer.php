<?php

// Complete the designerPdfViewer function below.
function designerPdfViewer($h, $word) {
    $abc = range('A', 'Z');
    $myAbc = array_combine($abc, $h);
    $letters = str_split(strtoupper($word));

    foreach($myAbc as $letter => $height)
    {
        echo "{$letter}";
        if(in_array($letter, $letters)) $letter_h[] = $height;
    }

    var_dump($letter_h);
    
    return strlen($word) * max($letter_h);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $h_temp);

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = '';
fscanf($stdin, "%[^\n]", $word);

$result = designerPdfViewer($h, $word);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
