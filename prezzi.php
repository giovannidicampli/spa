<!DOCTYPE html>
<html lang="it">
<head>

    <title>Prezzi e Pacchetti | VillaSalus</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" media="all">

</head>
<body id="index">

<?php
$selector = 1;
include 'nav.php';
?>


<div class="jumbotron" id="index">
<div class="container text-center">
    <h1>Offerte online</h1>
    <p>le nostre offerte scelte per te</p>
</div>
</div><!--Fine Jumbotron-->


<?php
require_once 'Manager/DbManager.php';


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
    ?>

    <div class="container-fluid" id="prezzi1">
        <div class="row">
            <div class="col-sm-8">
                <h2 id="prezzi2"><?= $resultOfferta['nome'] ?> </h2>
                <div class="col-sm-5"><br>
                    <? //Questo if serve a controllare se l'offerta ha un'immagine
                    if ($resultOfferta ['immagine'] == "Nessun inserimento") {
                        //Se non c'è l'immagine è quella di default
                        $image = 'Functions/immaginiOfferta/default.png' ;
                    } else {
                        //Altrimenti l'immagine è quella inserita
                        $image = $resultOfferta ['immagine'];
                    }
                    echo '<img src="' . $image . '" class="img-responsive" />';?>
                </div>
                <h4 id="prezzi3"> Valida dal: <?= $dataInizioFormattata ?> <br> al: <?= $dataFineFormattata ?></h4>
                <h4 id="prezzi4"><?= $resultOfferta['descrizione'] ?></h4>
                <h4>Prezzo: <? echo $resultOfferta['prezzo']; ?> €</h4>
                <h4>  <? echo '<a id="prezzi5" href="acquista.php?id=' . $resultOfferta['id'] . '" class="btn btn-default">Acquista</a>' ?> </h4>
            <br><br>
            </div>
        </div>
    </div>


<?php } ?>

<div class="prezzi"></div>

<!--****************-->
<!--*****Footer*****-->
<!--****************-->

<?php
include 'footer.php';
?>

</body>
</html>