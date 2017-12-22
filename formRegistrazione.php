<!DOCTYPE html>
<html lang="it">
<head>
    <title>Registrati</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--    <script src="Functions/register.php"></script>-->
</head>
<body>
<?php
$selector = 7 ;
include 'nav.php';
?>

<br><br><br><br>

<div class="container">
    <form class="form-horizontal" id="registerForm" role="form" method="post" action="Functions/register.php">
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome</label>
            <div class="col-sm-9">
                <input name="nome" type="text" id="nome" placeholder="Nome" class="form-control" autofocus required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Cognome</label>
            <div class="col-sm-9">
                <input name="cognome" type="text" id="cognome" placeholder="Cognome" class="form-control" autofocus required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="text" name="username" id="username" placeholder="Username" class="form-control" autofocus required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input name="email" type="email" id="email" placeholder="Email" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input name="password" type="password" id="password" placeholder="Password" class="form-control" required="required">
            </div>
        </div>
        <!--<div class="form-group">
            <label class="col-sm-3 control-label">Ripeti Password</label>
            <div class="col-sm-9">
                <input type="password" id="password2" placeholder="Ripeti Password" class="form-control" required="required">
            </div>
        </div>-->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" required="required">Accetto i <a href="termsOfUse.php">termini</a>
                    </label>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Registrati</button>
            </div>
        </div>
    </form> <!-- /form
</div> <!-- ./container -->
</body>
</html>