<?php

require_once '../Manager/DbManager.php';

$db_instance = new DbManager();

$nome = filter_input(INPUT_POST, 'nome');
$cognome = filter_input(INPUT_POST, 'cognome');
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password1');
//Cripta la password
$password = md5($password);
$admin = filter_input(INPUT_POST, 'admin');
//Controllo utente
$controlloUsername = $db_instance->select(array('username'), 'utente', "username = '$username'");
$numUsername = mysqli_num_rows($controlloUsername);
$controlloMail = $db_instance->select(array('email'), 'utente', "email = '$email'");
$numMail = mysqli_num_rows($controlloMail);

if ( $numUsername != 0 ) {
    echo "Username esistente";
} else if ( $numMail != 0 ) {
    echo "Email esistente";
} else {
    $result = $db_instance->insert('utente', array('nome', 'cognome', 'username', 'email', 'password', 'is_admin'), array($nome, $cognome, $username, $email, $password, $admin));
    if ( !$result ) {
        echo "Nessun inserimento nel DB";
    } else {

        header("location: ../homePageAdmin.php");
    }
}
$db_instance->connection->close();
?>