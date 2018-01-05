<?php
include 'Manager/SessionManager.php';
$print_class = 'class="active"';
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favIcon/favicon.ico">

</head>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand" style="width: 100px;">
                <img style="max-width:90px; margin-top: -10px; margin-left: -10px" class="logo"
                     src="Images/logo.svg" alt="Logo">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li <?= ($selector == 0) ? $print_class : '' ?> ><a href="index.php">Home</a></li>
                <li <?= ($selector == 1) ? $print_class : '' ?>><a href="struttura.php">Struttura</a></li>
                <li <?= ($selector == 2) ? $print_class : '' ?>><a href="prezzi.php">Prezzi e Pacchetti</a></li>
                <li <?= ($selector == 3) ? $print_class : '' ?>><a href="contatti.php">Contatti</a></li>
                <?php
                if ( $is_authorized ) {
                    ?>
                    <li <?= ($selector == 4) ? $print_class : '' ?>><a href="homePageAdmin.php">Profilo Admin</a></li>
                    <li <?= ($selector == 5) ? $print_class : '' ?>><a href="editPrezzi.php">Modifica prezzi e
                            pacchetti</a></li>
                    <?php
                }
                if ( $is_logged && !$is_authorized ) {
                    ?>
                    <li <?= ($selector == 6) ? $print_class : '' ?>><a href="homePageUser.php">Profilo</a></li>
                    <?php
                }
                ?>

            </ul>

            <?php
            if ( $is_logged ) { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="Functions/logout.php">Logout</a></li>
                </ul>
                <?php
            } else {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li <?= ($selector == 7) ? $print_class : '' ?>><a href="loginPage.php">Login</a></li>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</nav>