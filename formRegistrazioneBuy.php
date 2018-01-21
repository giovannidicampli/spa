<!DOCTYPE html>
<html lang="it">
<head>
    <title>Registrati | VillaSalus</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" type="text/css">

    <!--********Serve a controllare se le password coincidono*************-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#submitpassword").click(function () {
                var password = $("#password").val();
                var confirmPassword = $("#password2").val();
                if (password != confirmPassword) {
                    alert("Le password non coincidono.");
                    return false;
                }
                return true;
            });
        });
    </script>
    <!--******************************************************************-->
</head>
<body>

<?php
$selector = 6;
include 'nav.php';
?>

<br>

<div class="container-fluid eseguiLogin">
    <div class="alert alert-success">
            <strong>Attenzione!</strong> Per proseguire con l'acquisto sei pregato di registrarti oppure di effettuare il login.
    </div>
</div>

<br>

<div class="container" id="register">
    <form class="form-horizontal" id="registerForm" role="form" method="post" action="Functions/register.php">
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome</label>
            <div class="col-sm-9">
                <input name="nome" type="text" id="nome" placeholder="Nome" class="form-control" autofocus
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Cognome</label>
            <div class="col-sm-9">
                <input name="cognome" type="text" id="cognome" placeholder="Cognome" class="form-control" autofocus
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
                <input type="text" name="username" id="username" placeholder="Username" class="form-control" autofocus
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input name="email" type="email" id="email" placeholder="Email" class="form-control"
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input name="password" type="password" id="password" placeholder="Password" class="form-control"
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Ripeti Password</label>
            <div class="col-sm-9">
                <input type="password" id="password2" placeholder="Ripeti Password" class="form-control"
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" required="required">Dichiaro di aver letto e accettato i <a
                            href="termsOfUse.php">termini</a>
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="newsletter" name="newsletter" value="1" >Iscriviti alla Newsletter per non perdere sconti e
                        offerte!</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3" style="margin-bottom: 2px">
                <button type="submit" id="submitpassword" class="btn btn-primary btn-block">Registrati</button>
            </div>
        </div>
    </form> <!-- /form -->
</div>

<br><br><br><br>

<!--****************-->
<!--*****Footer*****-->
<!--****************-->

<?php
include 'footer.php';
?>

</body>
</html>