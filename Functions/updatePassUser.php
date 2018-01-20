<?php

require_once 'MysqlManager.php';

$funzioniMysql = new MysqlClass();
$conn = $funzioniMysql->connetti();

$username = filter_input(INPUT_GET, 'username');

$vecchiaPassword = filter_input(INPUT_POST, 'password');
$vecchiaPassword = md5($vecchiaPassword);

$nuovaPassword = filter_input(INPUT_POST, 'password1');
$nuovaPassword = md5($nuovaPassword);

$query = ("SELECT * FROM utente WHERE username = '$username'");
$result = mysqli_query($conn, $query);
$resultPwd = mysqli_fetch_array($result);

if ( $resultPwd ['password'] == $vecchiaPassword ) {

    $query2 = ("UPDATE utente SET password = '$nuovaPassword' WHERE username = '$username'");
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
            <a class='btn btn-primary' type='submit' href='../homePageUser.php'>Ok</a>
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
            <h3>Vecchia password errata</h3>
            <a class='btn btn-primary' type='submit' href='../homePageUser.php'>Ok</a>
    </div>
</body>";
}

$conn = $funzioniMysql->disconnetti();