<?php

require_once '../Manager/DbManager.php';

$db_instance = new DBManager();


$nome = filter_input(INPUT_POST, 'nome');
$dataInizio = filter_input(INPUT_POST, 'dataInizo');
$dataFine = filter_input(INPUT_POST, 'dataFine');
$descrizione = filter_input(INPUT_POST, 'descrizione');
$prezzo = filter_input(INPUT_POST, 'prezzo');


$campi = array("nome", "dataInizio", "dataFine", "descrizione", "prezzo");

$valori = array($nome, $dataInizio, $dataFine, $descrizione, $prezzo, /*'immaginiOfferta/' . $nome*/);

$result = $db_instance-> insert('offerta', $campi, $valori );
if ($result) {
    header("location: ../editPrezzi.php");
}else {
    header("location: ../index.php");}
$db_instance->connection->close();

?>
