<?php

require_once 'MysqlManager.php';

$funzioniMysql = new MysqlClass();
$conn = $funzioniMysql->connetti();
$pid = filter_input(INPUT_GET, 'id');

$query = ("DELETE FROM offerta WHERE id = '$pid' ");

$result = mysqli_query($conn, $query);


if ( mysqli_query($conn, $query) ) {
    echo "ok";
//}
//
//    echo "<link rel='stylesheet' href='../editPrezzi.php' />
//
//<div class='container_log_out'>
//    <form id='contact' action='/editPrezzi.php' method='post'>
//        <h1>Eliminato!</h1>
//        <button type='submit'>Ok</button>
//    </form>
//</div>";

} else {

    echo "non ok";

//    echo "<link rel='stylesheet' href='../editPrezzi.php' />
//
//<div class='container_log_out'>
//    <form id='contact' action='/editPrezzi.php' method='post'>
//        <h1>Errore!</h1>
//        <h3>Riprova</h3>
//        <button name='Log_Out' type='submit' id='contact-submit' data-submit='...Log Out'>Ok</button>
//    </form>
//</div>";
}
