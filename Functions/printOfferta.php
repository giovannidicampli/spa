<?php
require_once __DIR__ . '/../Manager/DbManager.php';

$db_instance = new DbManager();


$result = $db_instance->select([], 'offerta', "");


while ($resultOfferta = mysqli_fetch_array($result)) {

    //Formattano rispettivamente la data inizio e la data fine così gg/mm/aaaa
    $temp1 = explode(" ", $resultOfferta['dataInizio']);
    $temp2 = explode("-", $temp1[0]);
    $dataInizioFormattata = $temp2[2] . "/" . $temp2[1] . "/" . $temp2[0];

    $temp1 = explode(" ", $resultOfferta['dataFine']);
    $temp2 = explode("-", $temp1[0]);
    $dataFineFormattata = $temp2[2] . "/" . $temp2[1] . "/" . $temp2[0];


    echo '<td>' . $resultOfferta['nome'] . '</td>';
    echo '<td>';
    echo $dataInizioFormattata;'</td>';
    echo '<td>';
    echo $dataFineFormattata;'</td>';
    echo '<td>' . $resultOfferta['descrizione'] . '</td>';
    echo '<td>' . $resultOfferta['prezzo'] . ' €</td>';

    echo '<td> <a onclick="return confirm(\'Confermi?\');" href="/spa/Functions/deleteOfferta.php?id=' . $resultOfferta['id'] . '"> Elimina </a> </td>';
    echo '<td> <a href="../spa/formUpdateOfferta.php?id=' . $resultOfferta['id'] . '"> Modifica </a> </td>';

    echo "</tr>";
}
echo "</table>";


?>



