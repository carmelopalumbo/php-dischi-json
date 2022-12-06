<?php

//primo set db dischi
$string = file_get_contents('db.json');

$disklist = json_decode($string, true);



//restituisce descrizione dettagliata disco
if (isset($_GET['descr'])) {
    $disklist = [
        "genre" => $disklist[$_GET["descr"]]["genre"],
        "author" => $disklist[$_GET["descr"]]["author"],
        "year" => $disklist[$_GET["descr"]]["year"],
        "title" => $disklist[$_GET["descr"]]["title"],
        "poster" => $disklist[$_GET["descr"]]["poster"],
    ];
}

//aggiunge nuovo disco se sono presenti tutti i campi richiesti
if (!empty($_POST['name']) && !empty($_POST['genre']) && !empty($_POST['author']) && !empty($_POST['year']) && !empty($_POST['poster'])) {
    $newAlbum = [
        "title" => $_POST["name"],
        "author" => $_POST["author"],
        "year" => $_POST["year"],
        "poster" => $_POST["poster"],
        "genre" => $_POST["genre"]
    ];

    $disklist[] = $newAlbum;
    file_put_contents("db.json", json_encode($disklist));
}

//elimina disco selezionato
if (isset($_POST['indexAlbum'])) {
    array_splice($disklist, $_POST['indexAlbum'], 1);

    file_put_contents('db.json', json_encode($disklist));
}


//stampa json del array
header('Content-Type: application/json');
echo json_encode($disklist);
