<?php
include 'Manager/SessionManager.php';


if ( $is_authorized ) {

    ?>

    <!DOCTYPE html>
    <html lang="it">
    <head>
        <title>Modifica Prezzi e Pacchetti | VillaSalus</title>

        <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>

    <?php
    $selector = 4;
    include 'nav.php';
    ?>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="formAggiungiOfferta.php" role="button">
                        <img src="Images/aggiungi.svg"></a>
                    <div class="caption">
                        <h3> Inserisci una nuova offerta </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th colspan="7">Offerte Online</th>
            </tr>
            <tr>
                <th colspan="">Nome</th>
                <th colspan="">Data Inizio</th>
                <th colspan="">Data Fine</th>
                <th colspan="">Descrizione</th>
                <th colspan="">Prezzo</th>

            </tr>
            <?php
            require_once 'Functions/printOfferta.php';
            ?>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


    </body>
    </html>

<?php } else {
    header("Location: ./loginPage.php");
}
?>