<?php

function getMovieInfo($tala){
    $File = '../movie_metadata.csv';
    $arrResult  = array();
    $handle     = fopen($File, "r");
    if(empty($handle) === false) {
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
            $arrResult[] = $data;
        }
        fclose($handle);
    }
    $directors = [];
    $movies = [];
    $duration = [];
    $rating = [];
    for($i = 0; $i < 100; $i++)
    {
        array_push($directors,$arrResult[$i][1]);
        array_push($movies,$arrResult[$i][11]);
        array_push($duration,$arrResult[$i][3]);
        array_push($rating,$arrResult[$i][25]);
    }
    $mynd = [];
    array_push($mynd,$directors[$tala],$movies[$tala],$duration[$tala],$rating[$tala] );
    /* echo("$mynd[0], $mynd[1], $mynd[2], $mynd[3]"); */
    return $mynd;
}
$myndinfo = getMovieInfo(10);
print_r($myndinfo);



