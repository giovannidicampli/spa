<?php

include 'Manager/SessionManager.php';

if ( $is_logged ) {
    ?>

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
    $selector = 70;
    include 'nav.php';
    ?>

    <br><br><br><br>

    <?php

    require_once 'Functions/MysqlManager.php';

    $funzioniMysql = new MysqlClass();
    $conn = $funzioniMysql->connetti();
    $thisID = filter_input(INPUT_GET, 'id');

    $query = ("SELECT * FROM offerta WHERE id = '$thisID' ");

    $result = mysqli_query($conn, $query);

    $resultOfferta = mysqli_fetch_array($result);

    ?>


    <div class="container" id="checkout">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th>Prodotto</th>
                <th>Quantità</th>
                <th>Giorno</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-th="Prodotto">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="<?= $resultOfferta['immagine'] ?>" alt="..."
                                                             class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <?php echo '<h4 class="nomargin">' . $resultOfferta ["nome"] . '</h4>'; ?>
                        </div>
                    </div>
                </td>
                <form id="acquista" role="form" action="">
                    <td data-th="Quantità">
                        <input name="quantita" id="quantita" type="number" class="form-control text-center" value="1">
                    </td>
                    <td data-th="Giorno">
                        <input name="data" id="dataCheckout" type="date" class="form-control-static text-center" value="1">
                    </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td><a href="prezzi.php" class="btn btn-warning"><i class="fa fa-angle-left"></i>Continua lo
                        Shopping</a>
                </td>
                <td><input class="btn btn-success btn-block" type="submit" value="Checkout"></td>
                <td id="totale" class="hidden-xs text-center no_show"><strong> </strong></td>

            </tr>
            </form>
            </tfoot>
        </table>
    </div>

    <div class="footer">
    <?php
    include 'footer.php';
    ?>
    </div>

    </html>


<?php } else {
    header("Location: ./formRegistrazioneBuy.php");
    //aggiungere messaggio
} ?>