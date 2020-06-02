<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    $final_grades = array();
    var_dump($grades);
    foreach($grades as $grade)
    {
        echo $grade . "\n";
        if($grade < 38) $final_grades[] = $grade;
        else
        {
            if(substr($grade, -1) == "8" || substr($grade, -1) == "3")
            {
                $final_grades[] = $grade + 2;
            }
            else if(substr($grade, -1) == "4" || substr($grade, -1) == "9")
            {
                $final_grades[] = $grade + 1;
            }
            else $final_grades[] = $grade;
        }
    }
    return $final_grades;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
