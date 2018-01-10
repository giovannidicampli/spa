<?php

require_once '../Manager/DbManager.php';

$db_instance = new DBManager();


$nome = filter_input(INPUT_POST, 'nome');
$dataInizio = filter_input(INPUT_POST, 'dataInizo');
$dataFine = filter_input(INPUT_POST, 'dataFine');
$descrizione = filter_input(INPUT_POST, 'descrizione');
$prezzo = filter_input(INPUT_POST, 'prezzo');
$uploadDir = '../immaginiOfferta';
$userfile_tmp = $_FILES['userfile']['tmp_name'];
$immagine = $_FILES['userfile']['name'];

if (move_uploaded_file($userfile_tmp, $uploadDir . $immagine))
{
    $p = "images/" . $immagine;
}
else
{
    $p = "";
}


$campi = array("nome", "dataInizio", "dataFine", "descrizione", "prezzo", "immagine");

$valori = array($nome, $dataInizio, $dataFine, $descrizione, $prezzo, $p);

$result = $db_instance->insert('offerta', $campi, $valori);
if ( $result ) {
    header("location: ../editPrezzi.php");
} else {
    header("location: ../editPrezziErr.php");
}
$db_instance->connection->close();

?>
