<?php

/*
 * Complete the 'checkMagazine' function below.
 *
 * The function accepts following parameters:
 *  1. STRING_ARRAY magazine
 *  2. STRING_ARRAY note
 */

function checkMagazine($magazine, $note) {
    $response = 'Yes';
    $magazine_count_values = array_count_values($magazine);
    $note_count_values = array_count_values($note);
    $magazine_words = array_keys($magazine_count_values);
    $note_words = array_keys($note_count_values);
    foreach($note_count_values as $note_word => $note_word_count) {
        if(!in_array($note_word,$magazine_words)) {
            $response = 'No';
        } else {
            if($note_word_count > $magazine_count_values[$note_word]) {
                $response = 'No'; 
            }
        }
    }
    echo $response;
}

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$m = intval($first_multiple_input[0]);

$n = intval($first_multiple_input[1]);

$magazine_temp = rtrim(fgets(STDIN));

$magazine = preg_split('/ /', $magazine_temp, -1, PREG_SPLIT_NO_EMPTY);

$note_temp = rtrim(fgets(STDIN));

$note = preg_split('/ /', $note_temp, -1, PREG_SPLIT_NO_EMPTY);

checkMagazine($magazine, $note);
