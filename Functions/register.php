<?php
require_once 'DbManager.php';
$db_instance = new DbManager();
$nome = filter_input(INPUT_POST, 'nome');
$cognome = filter_input(INPUT_POST, 'cognome');
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
/*$password2 = filter_input(INPUT_POST, 'password2');*/
//Controllo presenza campi
/*if (!$username || !$email || !$password || !$password2) {
    header("location: ../accesso_registrazione.php?error_registrazione=campi_vuoti");
    die();
}*/
//Controllo coincidenza password
/*if ($password != $password2) {
    header("location: ../accesso_registrazione.php?error_registrazione=psw_non_coincidenti");
    die();
}*/
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
        echo "No result";
    } else {
        $oggetto = "Registrazione SPA";
        $corpo = '<html>
                  <head>

                  </head>
                  <body>
                      <img src="http://www.designfirms.org/images/portfolios/large-6465.jpg">
                      <h1> Sei stato registrato a Equilibrium. ' . $username . '</h1>
                  </body>
                  </html>';
        $html = "MIME-Version: 1.0\r\n";
        $html .= "Content-type: text/html; charset=iso-8859-1\r\n";
        if ( mail($email, $oggetto, $corpo, $html) ) {
            header("location: ../registrato.php");
            // header("location: ../index.php");
            //echo "Inserimenti effettuati correttamente.";
            //creare messaggio di benvenuto
        } else {
            echo "Email non inviata";
        }

    }
    $db_instance->connection->close();
}
    ?>