<?php

require_once __DIR__ . "/../database/dischiDB.php";

$genre =$_GET["genre"];

$filteredDischi = array_filter($dischiDB, function($disco) use ($genre) {
    return strtolower($disco['genre']) === $genre;
});

// var_dump($filteredDischi);

// $filteredDischi = array_filter($dischiDB, function($disco) {
//     return strtolower($disco['genre']) === strtolower('pop');
// });



header('Content-Type: application/json');
echo json_encode($filteredDischi);