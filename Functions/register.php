<?php

require_once '../Manager/DbManager.php';

$db_instance = new DbManager();

$nome = filter_input(INPUT_POST, 'nome');
$cognome = filter_input(INPUT_POST, 'cognome');
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
//Cripta la password
$password = md5($password);
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
    $result = $db_instance->insert('utente', array('nome', 'cognome', 'username', 'email', 'password'), array($nome, $cognome, $username, $email, $password));
    if ( !$result ) {
        echo "Nessun inserimento nel DB";
    } else {
        $oggetto = "Registrazione SPA";
        $corpo = '<html>
                  <head>

                  </head>
                  <body>
                      <img src="#">
                      <h1> Gentile ' . $username . ' sei stato registrato a Villa Salus Resort SPA.</h1>
                  </body>
                  </html>';
        $html = "MIME-Version: 1.0\r\n";
        $html .= "Content-type: text/html; charset=iso-8859-1\r\n";
        if ( mail($email, $oggetto, $corpo, $html) ) {
            header("location: ../registrato.php");
        } else {
            echo "Email non inviata";
        }

    }
    $db_instance->connection->close();
}
?>