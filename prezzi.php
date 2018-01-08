<!DOCTYPE html>
<html lang="it">
<head>

    <title>Prezzi e Pacchetti | VillaSalus</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" media="all">
    <link href="bootstrap-3.3.7-dist/css/main.css" rel="stylesheet" media="all">

</head>
<body>

<?php
$selector = 2;
include 'nav.php';
echo "pagina dei prezzi";
?>


<section id="portfolio" class="two">
    <div class="container">

        <header>
            <h2>Offerte</h2>
        </header>


        <!-- Galleria -->
        <div class="row">

            <?php
            require_once 'Functions/MysqlManager.php';


            $funzioniMysql = new MysqlClass();
            $conn = $funzioniMysql->connetti();

            $query = ("SELECT * FROM offerta");
            $result = mysqli_query($conn, $query);

            while ($rowC = mysqli_fetch_array($result)) {
                ?>
                <div class="4u 12u$(mobile)">
                    <article class="item">

                        <header>
                            <h3><?= $rowC['nome'] ?></h3>
                        </header>
                    </article>
                </div>
                <?php
            }
            ?>
        </div>


    </div>
</section>

<!--****************-->
<!--*****Footer*****-->
<!--****************-->

<footer class="footer" style="background-color: #0f0f0f;">
    <div class="container text-center">
        <p style="color: #777; margin-top: 5px;">&copy; 2018 Villa Salus. All right reserved.</p>
        <ul class="list-inline">
            <li><a href="#" style="color: rgba(0,183,252,0.43)">Twitter</a></li>
            <li><a href="#" style="color: rgba(0,183,252,0.43)">Facebook</a></li>
            <li><a href="#" style="color: rgba(0,183,252,0.43)">YouTube</a></li>
        </ul>
    </div>
</footer>

</body>
</html>