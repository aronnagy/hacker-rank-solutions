<?php

// Complete the dayOfProgrammer function below.
function dayOfProgrammer($year) {
    $days = 0;
    if($year >= 1700 && $year <= 1918)
    {
        $century = substr($year, 0, -2) . "00";
        if(intval($century) % 400 == 0)
        {
            $date = (DateTime::createFromFormat( 'Y z' , "$year 255"));
        }
        else $date = (DateTime::createFromFormat( 'Y z' , "$year 254"));
        $result = $date->format('d.m.Y');
        return $result;
    }
    else if($year > 1918 && $year <= 2700)
    {
        $date = (DateTime::createFromFormat( 'Y z' , "$year 255"));
        $result = $date->format('d.m.Y');
        return $result;
    } else print "Date out of borders!";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);
