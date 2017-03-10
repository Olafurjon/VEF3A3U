<?php
/**
 * Created by PhpStorm.
 * User: 3010943379
 * Date: 10.3.2017
 * Time: 08:58
 */
include "Json.php";

if($_POST != 0) {
    $newdata['Nafn'] = $_POST['Nafn'];
    $newdata['Path'] = $_POST['Path'];

    $inp = file_get_contents('../JSON/myndir.json');
    /**echo $inp;*/
    $cache = json_decode($inp);
    array_push($cache, $newdata);
    echo "<br>";
    $jsonData = json_encode($cache);
    echo $jsonData;


    if (file_exists("../JSON/myndir.json")) {
        echo "<br>";
        echo "ég er til";
        echo "<br>";
    }

    file_put_contents('../JSON/myndir.json', $jsonData);
    $put = file_put_contents('../JSON/myndir.json', $jsonData);
    echo $put . "<br>";
    $inp = file_get_contents('../JSON/myndir.json');
    echo $inp;
    header('Location: '."http://178.62.67.77/Verkefni5/sidur/Json.php");
}