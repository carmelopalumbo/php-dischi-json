<?php

$string = file_get_contents('db.json');

$disklist = json_decode($string, true);

header('Content-Type: application/json');
echo json_encode($disklist);
