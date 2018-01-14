<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | VillaSalus</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" href="favIcon/favicon.ico">

</head>
<body>

<!--****************-->
<!--*****Navbar*****-->
<!--****************-->

<nav>
    <?php
    $selector = 0;
    include 'nav.php';
    ?>
</nav>

<!--****************-->
<!--****Carousel****-->
<!--****************-->
<div class="container-fluid" style="background-color: #d3c1a7">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4500" data-pause="hover">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="Images/img1.jpg" alt="1">
            </div>

            <div class="item">
                <img src="Images/img2.jpg" alt="2">
            </div>

            <div class="item">
                <img src="Images/img3.jpg" alt="3">
            </div>
            <div class="item">
                <img src="Images/img4.jpg" alt="4">
            </div>
            <div class="item">
                <img src="Images/img5.jpg" alt="5">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!--Jumbotron-->
<div class="jumbotron" style="background: #d3c1a7; font-family: " Roboto
", Helvetica, Arial, sans-serif>
<div class="container text-center">
    <h1>Benvenuto in Villa Salus</h1>
    <p>Il vostro SPA Resort in Molise ispirato dalla forza del mare.</p>
</div>
</div><!--Fine Jumbotron-->

<!--Features-->
<div class="container-fluid" align="center" style="background: #d3c1a7; margin-top: -29px; font-family: " Roboto
", Helvetica, Arial, sans-serif>
<div class="modal-header text-center" id="features">
    <h1>I nostri punti di forza</h1>
</div><!-- End Page Header -->

<div class="row">
    <div class="col-sm-8">
        <h2>Bagno turco</h2>
        <h4 style="color: #575757; ">Gli olii essenziali e le erbe disciolte nel vapore svolgono un'azione benefica su
            tutto l'organismo.
            Grazie alla sana combinazione tra umidità e calore, il corpo si rilassa e la tensione muscolare tende a
            diminuire.
            Il caldo vapore penetra nei tessuti aumentando la circolazione sanguigna a tutti gli organi, comincia
            così un processo sano e benefico che si completa con la depurazione della pelle.</h4>
    </div>
    <div class="col-sm-4">
        <img src="Images/bagnoturco.jpg" class="img-responsive" alt="image">
    </div>

</div><!-- End row -->
<br>
<div class="row">
    <div class="col-sm-8">
        <h2>Trattamenti viso</h2>
        <h4 style="color: #575757">Il viso rappresenta la parte del nostro corpo più esposta a tutti gli agenti
            atmosferici e ambientali. Per questo motivo richiede un'attenzione particolare frequente e delicata.
            Grazie ai nostri speciali trattamenti mirati per ogni tipo di pelle sarà possibile ottenere risultati
            positivi contro le rughe, l'acne o semplicemente accrescere la luminosità ed il tono della pelle del
            viso.</h4>
    </div>
    <div class="col-sm-4">
        <img src="Images/viso.jpg" class="img-responsive" alt="image">
    </div>
</div>

<br>
<div class="row">
    <div class="col-sm-8">
        <h2>Piscina panoramica</h2>
        <h4 style="color: #575757">Acqua calda, aperta tutto l'anno, splendido panorama sulle colline circostanti.
            La piscina interna e la piscina esterna sono collegate tra di loro da ed offrono vari giochi d'acqua tra
            cui rilassanti botti d'acqua dove abbandonarsi alla luce del tramonto sulla costa molisana.</h4>
    </div>
    <div class="col-sm-4">
        <img src="Images/piscina.jpg" class="img-responsive" alt="image">
    </div>
</div>
<br>
</div><!--Fine features-->

<!--****************-->
<!--*****Footer*****-->
<!--****************-->

<footer style="background-color: #0f0f0f">
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