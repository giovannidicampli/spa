<?php //TODO
/*
require_once 'MysqlManager.php';

$funzioniMysql = new MysqlClass();
$conn = $funzioniMysql->connetti();

$id = filter_input(INPUT_GET, 'id');

$nomeNew = filter_input(INPUT_POST, 'nomeNew');
$cognomeNew = filter_input(INPUT_POST, 'cognomeNew');
$usernameNew = filter_input(INPUT_POST, 'usernameNew');
$emailNew = filter_input(INPUT_POST, 'emailNew');

$controlloUsername = ("SELECT username FROM utente WHERE id = '$id'");
$result = mysqli_query($conn, $controlloUsername);
$resultControllo = mysqli_fetch_array($result);

if ( $resultControllo ['username'] != $usernameNew ) {

    $query2 = ("UPDATE utente SET nome = '$nomeNew', cognome = '$cognomeNew', username = '$usernameNew', email = '$emailNew' WHERE id = '$id'");
    $result2 = mysqli_query($conn, $query2);

    if ( $result2 ) {

        echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
    <title>VillaSalus</title>
    <link href=\"../bootstrap-3.3.7-dist/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
    <div class='container'>
            <h1>Completato con successo!</h1>
            <a class='btn btn-primary' type='submit' href='../homePageAdmin.php'>Ok</a>
    </div>
</body>";

    } else {
        echo 'errore';
    }
} else {

    echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
    <title>VillaSalus</title>
    <link href=\"../bootstrap-3.3.7-dist/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
    <div class='container'>
            <h1>Errore!</h1>
            <h3></h3>
            <a class='btn btn-primary' type='submit' href='../homePageAdmin.php'>Ok</a>
    </div>
</body>";
}

$conn = $funzioniMysql->disconnetti();*/