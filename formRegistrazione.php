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

<br><br>


<div class="container" style="margin: -10px">
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
                        <input type="checkbox" id="newsletter">Iscriviti alla Newsletter per non perdere sconti e
                        offerte!</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" id="submitpassword" class="btn btn-primary btn-block">Registrati</button>
            </div>
        </div>
    </form> <!-- /form -->
</div>


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