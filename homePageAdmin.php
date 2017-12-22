<?php

include('Functions/SessionManager.php');

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Admin home</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php
$selector = 4 ;
include 'nav.php';
?>


<!--<nav class="navbar navbar-default">-->
<!--    <div class="container-fluid">-->
<!--        <!-- Brand and toggle get grouped for better mobile display -->-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"-->
<!--                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a class="navbar-brand" href="index.php">-->
<!--                <img style="max-width:100px; margin-top: -20px;"-->
<!--                     src="Images/logo.jpg">-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!--        <!-- Collect the nav links, forms, and other content for toggling -->-->
<!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active"><a href="struttura.php">La struttura <span class="sr-only">(current)</span></a></li>-->
<!--                <li><a href="#">Link</a></li>-->
<!--            </ul>-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li><a href="loginPage.php">Login</a></li>-->
<!--            </ul>-->
<!--        </div><!-- /.navbar-collapse -->-->
<!--    </div><!-- /.container-fluid -->-->
<!--</nav>-->

<h3>Benvenuto <?php echo $_SESSION['username']; ?>!</h3>


<!--<form id="logoutform" class="form-horizontal" role="form" action="Functions/logout.php">-->
<!--<div style="margin-top:10px" class="form-group">-->
<!--    <!-- Button -->-->
<!---->
<!--    <div class="col-sm-5 form-control-static">-->
<!--        <button type="submit" class="btn btn-primary">Logout</button>-->
<!--    </div>-->
<!--</div>-->
<!--</form>-->

</body>
</html>