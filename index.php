<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/sticky-footer.css">

<!--*******Questi due script si trovano già in nav.php. Se li aggiungo anche qui mi danno problemi.******-->

<!--*****<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>-->
</head>
<body>

<!--****************-->
<!--*****Navbar*****-->
<!--****************-->

<?php
$selector = 0;
include 'nav.php';
?>

<!--****************-->
<!--****Carousel****-->
<!--****************-->

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4500" data-pause"hover">
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
            <img src="Images/img4.png" alt="1" >
        </div>

        <div class="item">
            <img src="Images/img2.jpg" alt="2">
        </div>

        <div class="item">
            <img src="Images/img3.jpg" alt="3">
        </div>
        <div class="item">
            <img src="Images/img1.jpg" alt="4">
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

<!--****************-->
<!--*****Footer*****-->
<!--****************-->

<footer class="footer">
    <div class="container">
        <p class="text-muted">2018 Villa Salus. All right reserved.</p>
    </div>
</footer>



</body>
</html>