<?php

require_once __DIR__ . "/../database/dischiDB.php";

header('Content-Type: application/json');

echo json_encode($dischiDB);