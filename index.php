<!DOCTYPE html>
<html lang="it">
<head>
    <title>Home</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
$selector = 0 ;
include 'nav.php';
print_r($_SESSION);
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

</body>
</html>


