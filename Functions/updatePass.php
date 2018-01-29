<?php

require_once __DIR__ . '/../Manager/DbManager.php';

$db_instance = new DbManager();

$username = filter_input(INPUT_GET, 'username');

$vecchiaPassword = filter_input(INPUT_POST, 'password');
$vecchiaPassword = md5($vecchiaPassword);

$nuovaPassword = filter_input(INPUT_POST, 'nuovaPassword');
$nuovaPassword = md5($nuovaPassword);

$result = $db_instance->select([], 'utente', "username='$username'");

$resultPwd = mysqli_fetch_array($result);

if ( $resultPwd ['password'] == $vecchiaPassword ) {


    $result2 = $db_instance->update('utente', "password = '$nuovaPassword'", "username = '$username'");

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
            <h3>Vecchia password errata</h3>
            <a class='btn btn-primary' type='submit' href='../homePageAdmin.php'>Ok</a>
    </div>
</body>";
    }

$db_instance->connection->close();