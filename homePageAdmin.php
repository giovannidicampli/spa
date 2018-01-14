<!DOCTYPE html>
<html lang="it">
<head>
    <title>Admin home | VillaSalus</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" type="text/css">

    <!--********Serve a controllare se le password coincidono*************-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#submitpassword").click(function () {
                var password = $("#password1").val();
                var confirmPassword = $("#password2").val();
                if (password != confirmPassword) {
                    alert("La nuova password non coincide.");
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
$selector = 4;
include 'nav.php';
?>

<div class="jumbotron" style="font-family: " Roboto
", Helvetica, Arial, sans-serif>
<div class="container text-center">
    <h1>Benvenuto <?php echo $_SESSION['username']; ?>!</h1>
</div>
</div><!--Fine Jumbotron-->


<br><br>

<div class="container"
     style="max-width: 400px; float: left; margin-left: 40px; margin-bottom: 30px;  background-color: #dfdfdf;">

    <h3>Aggiungi un nuovo utente</h3>
    <br>
    <form class="form-group" id="registerForm" role="form" method="post" action="Functions/registerAdmin.php">
        <div class="form-group">
            <label style="margin-right: 39px" for="nome">Nome</label>
            <input name="nome" type="text" id="nome" placeholder="Nome" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 15px" for="cognome">Cognome</label>
            <input name="cognome" type="text" id="cognome" placeholder="Cognome" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 11px" for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 44px" for="email">Email</label>
            <input name="email" type="email" id="email" placeholder="Email" class="form-group-sm"
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 13px" for="password">Password</label>
            <input name="password" type="password" id="password" placeholder="Password" class="form-group-sm"
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 4px" for="password2">Ripeti Pass</label>
            <input type="password" id="password2" placeholder="Ripeti Password" class="form-group-sm"
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 36px" for="admin">Admin</label>
            <input type="number" name="admin" id="admin" min="0" max="1"
                   class="form-group-sm" tabindex="" value="0"/>
        </div>

        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">Inserisci</button>
        </div>
    </form> <!-- /form -->
</div>


<!--************Form cambio password****************-->

<div class="container"
     style="max-width: 400px; float: right; margin-right: 40px; margin-bottom: 30px;  background-color: #dfdfdf;">

    <h3>Cambia password</h3>
    <br>
    <form class="form-group" id="registerForm" role="form"
          method="post" <? echo 'action="Functions/updatePass.php?username=' . $_SESSION['username'] . '"'; ?>>
        <div class="form-group">
            <label style="margin-right: 6px" for="nome">Vecchia Password</label>
            <input name="password" type="text" id="password" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 17px" for="cognome">Nuova Password</label>
            <input name="password1" type="text" id="password1" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 7px" for="username">Ripeti Nuova Pass</label>
            <input type="text" name="password2" id="password2" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <button type="submit" id="submitpassword" class="btn btn-primary">Vai</button>

        </div>
    </form>
</div>

<br>
<!--****************-->
<!--*****Footer*****-->
<!--****************-->


</body>
</html>