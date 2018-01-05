<?php
include 'Manager/SessionManager.php';

if ( $is_authorized ){

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
    $selector = 5;
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
                        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button>
                        <button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>
                        </button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--****************-->
    <!--*****Footer*****-->
    <!--****************-->

    <footer class="footer" style="background-color: #0f0f0f">
        <div class="container text-center">
            <p style="color: #777; margin-top: 5px">&copy; 2018 Villa Salus. All right reserved.</p>
            <ul class="list-inline">
                <li><a href="#" style="color: rgba(0,183,252,0.43)">Twitter</a></li>
                <li><a href="#" style="color: rgba(0,183,252,0.43)">Facebook</a></li>
                <li><a href="#" style="color: rgba(0,183,252,0.43)">YouTube</a></li>
            </ul>
        </div><!-- end Container-->
    </footer>

    </body>
    </html>

<?php }  else {
    header("Location: ./loginPage.php");
    //aggiungere messaggio
}
?>