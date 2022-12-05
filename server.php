<?php

$string = file_get_contents('db.json');

$disklist = json_decode($string, true);


header('Content-Type: application/json');

if (isset($_GET['descr'])) {
    echo json_encode($disklist[$_GET['descr']]);
} else {
    echo json_encode($disklist);
}
