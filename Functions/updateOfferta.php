<?php

require_once 'MysqlManager.php';

$funzioniMysql = new MysqlClass();
$conn = $funzioniMysql->connetti();

$idOfferta = filter_input(INPUT_GET, 'id');

$nomeNew = filter_input(INPUT_POST, 'nome');
$dataInizioNew = filter_input(INPUT_POST, 'dataInizo');
$dataFineNew = filter_input(INPUT_POST, 'dataFine');
$descrizioneNew = filter_input(INPUT_POST, 'descrizione');
$prezzoNew = filter_input(INPUT_POST, 'prezzo');

$destination_path = getcwd().DIRECTORY_SEPARATOR;
$target_path = $destination_path . "immaginiOfferta/" . basename( $_FILES["immagine"]["name"]);
if (@move_uploaded_file($_FILES['immagine']['tmp_name'], $target_path))
{
    $immagineNew = "Functions/immaginiOfferta/" . basename( $_FILES["immagine"]["name"]);
}
else
{
    $immagineNew = "Nessun inserimento";
}


$query = ("UPDATE offerta SET nome = '$nomeNew', dataInizio = '$dataInizioNew', dataFine = '$dataFineNew',
 descrizione = '$descrizioneNew', prezzo = '$prezzoNew', immagine = '$immagineNew' WHERE id = '$idOfferta'");
    $result = mysqli_query($conn, $query);

if ( $result ) {
    header("location: ../editPrezzi.php");
} else {
    header("location: ../editPrezziErr.php");
}

$conn = $funzioniMysql->disconnetti();