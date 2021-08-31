<?php

require_once __DIR__ . "/../database/dischiDB.php";

$filteredDischi = array_filter($dischiDB, function($disco) {
    if ($disco['genre'] === 'Pop') {
        return true;
    } else {
        return false;
    }
});

header('Content-Type: application/json');
echo json_encode($filteredDischi);