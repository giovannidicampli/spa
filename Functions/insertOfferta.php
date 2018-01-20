<?php

require_once '../Manager/DbManager.php';

$db_instance = new DBManager();


$nome = filter_input(INPUT_POST, 'nome');
$dataInizio = filter_input(INPUT_POST, 'dataInizo');
$dataFine = filter_input(INPUT_POST, 'dataFine');
$descrizione = filter_input(INPUT_POST, 'descrizione');
$price = filter_input(INPUT_POST, 'prezzo');
$prezzo = $price . " €";
$destination_path = getcwd().DIRECTORY_SEPARATOR;
$target_path = $destination_path . "immaginiOfferta/" . basename( $_FILES["immagine"]["name"]);
if (@move_uploaded_file($_FILES['immagine']['tmp_name'], $target_path))
{
    $p = "Functions/immaginiOfferta/" . basename( $_FILES["immagine"]["name"]);
}
else
{
    $p = "Nessun inserimento";
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
