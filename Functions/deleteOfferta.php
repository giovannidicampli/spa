<?php

require_once 'MysqlManager.php';

$funzioniMysql = new MysqlClass();
$conn = $funzioniMysql->connetti();
$thisID = filter_input(INPUT_GET, 'id');

$query = ("DELETE FROM offerta WHERE id = '$thisID' ");

$result = mysqli_query($conn, $query);


if ( $result ) {

    header("location: ../editPrezzi.php");

} else {

    echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
    <title>VillaSalus</title>
    <link href=\"../bootstrap-3.3.7-dist/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
    <div class='container'>
        <form id='delete' action='../editPrezzi.php' method='post'>
            <h1>Errore!</h1>
            <h3>Riprova</h3>
            <button class='btn btn-primary' type='submit'>Ok</button>
        </form>
    </div>
</body>";
}
