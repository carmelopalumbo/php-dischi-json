<?php

$string = file_get_contents('db.json');

$disklist = json_decode($string, true);




if (isset($_GET['descr'])) {
    $disklist = [
        "genre" => $disklist[$_GET["descr"]]["genre"],
        "author" => $disklist[$_GET["descr"]]["author"],
        "year" => $disklist[$_GET["descr"]]["year"],
        "title" => $disklist[$_GET["descr"]]["title"],
        "poster" => $disklist[$_GET["descr"]]["poster"],
    ];
}

header('Content-Type: application/json');
echo json_encode($disklist);
