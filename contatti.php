<!DOCTYPE html>
<html lang="it">
<head>
    <title>Contatti | VillaSalus</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="favIcon/favicon.ico">

</head>
<body>

<?php
$selector = 2;
include 'nav.php';
?>

<div class="jumbotron" style="background-color: #FFFFFF">
    <div class="container text-center">

        <h1>Dove Siamo</h1>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2964.9807639618557!2d14.994421115444963!3d42.00068837921275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1330cd054f7367fd%3A0x97471fa14f85a4cb!2sCorso+Fratelli+Brigida%2C+86039+Termoli+CB!5e0!3m2!1sit!2sit!4v1514134872099"
                    width="900" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="contact-form">

        <div class="col-md-6 contact-top" style="font-family: Roboto, Helvetica, Arial, sans-serif">

            <h3>Indirizzo </h3>

            <div class="address">
                <div class=" address-grid">
                    <i class="glyphicon glyphicon-map-marker"></i>
                    <div class="address1">
                        <h3>Indirizzo</h3>
                        <p>Corso Fratelli Brigida,</p>
                        <p>Termoli (CB)</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class=" address-grid ">
                    <i class="glyphicon glyphicon-phone"></i>
                    <div class="address1">
                        <h3>Telefono
                            <h3>
                                <p> 0875 701234</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class=" address-grid ">
                    <i class="glyphicon glyphicon-envelope"></i>
                    <div class="address1">
                        <h3>Email:</h3>
                        <p><a href="mailto:info@example.com"> info@villasalus.it</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class=" address-grid ">
                    <i class="glyphicon glyphicon-bell"></i>
                    <div class="address1">
                        <h3>Orario di apertura</h3>
                        <p>Tutti i giorni dalle 6 alle 23</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

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