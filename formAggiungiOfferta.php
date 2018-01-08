<?php
require_once 'Manager/SessionManager.php';

if ( $is_authorized ) { ?>

    <!DOCTYPE html>
    <html lang="it">
    <head>
        <title>Form Prezzi e Pacchetti | VillaSalus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" type="text/css" media="all">

    </head>
    <body>

    <?php
    $selector = 5;
    include 'nav.php';
    ?>

    <div class="col-md-6 col-md-offset-3">

        <form class="form-horizontal" id="formOfferta" role="form" method="post" action="Functions/insertPrezzi.php">
            <h2>Inserisci Offerta</h2>

            <div class="form-group">
                <input type="text" name="nome" id="nome" tabindex="1"
                       class="form-control form-input"
                       placeholder="Nome" value="" required="required">
            </div>

            <div class="form-group">
                <label for="dataInizo">Valida dal</label>
                <input type="date" name="dataInizo" id="dataInizo" tabindex="2"
                       class="form-control form-input" required="required">
            </div>

            <div class="form-group">
                <label for="dataFine">fino al</label>
                <input type="date" name="dataFine" id="dataFine" tabindex="3"
                       class="form-control form-input" required="required">
            </div>

            <div class="form-group">
                <textarea name="user-message" tabindex="4" form="formOfferta" id="descrizione" class="form-control"
                          cols="20" rows="10" placeholder="Cosa comprende l'offerta?"></textarea>
            </div>


<!--            <div class="form-group">-->
<!--                <input type="text" name="descrizione" id="descrizione" tabindex="4"-->
<!--                       class="form-control form-input" placeholder="Descrizione">-->
<!--            </div>-->

            <div class="form-group">
                <input type="text" name="prezzo" id="prezzoOfferta" tabindex="5"
                       class="form-control form-input"
                       placeholder="Prezzo" value="" required="required">
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <a href="editPrezzi.php" class="btn btn-primary btn-block">Indietro</a>
                    <button type="submit" id="submitOfferta" class="btn btn-primary btn-block">Salva</button>
                </div>
            </div>
        </form>
    </div>


    <!--****************-->
    <!--*****Footer*****-->
    <!--****************-->


    </body>
    </html>

<?php } else {
    header("Location: ./loginPage.php");
    //aggiungere messaggio
} ?>