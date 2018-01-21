<!DOCTYPE html>
<html lang="it">
<head>
    <title>User home | VillaSalus</title>

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
$selector = 5;
include 'nav.php';
?>

<div class="jumbotron" id="cambiaPwdUsr">
<div class="container text-center">
    <h1>Benvenuto <?php echo $_SESSION['username']; ?>!</h1>
</div>
</div><!--Fine Jumbotron-->

<br>
<!--************Form cambio password****************-->

<div class="container cambiaPwdUsr">

    <h3>Cambia password</h3>
    <br>
    <form class="form-group" id="registerForm" role="form"
          method="post" <? echo 'action="Functions/updatePassUser.php?username=' . $_SESSION['username'] . '"'; ?>>
        <div class="form-group">
            <label style="margin-right: 6px" for="nome">Vecchia Password</label>
            <input name="password" type="password" id="password" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 17px" for="cognome">Nuova Password</label>
            <input name="password1" type="password" id="password1" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <label style="margin-right: 7px" for="username">Ripeti Nuova Pass</label>
            <input type="password" name="password2" id="password2" class="form-group-sm" autofocus
                   required="required">
        </div>

        <div class="form-group">
            <button type="submit" id="submitpassword" class="btn btn-primary">Vai</button>

        </div>
    </form>
</div>

<!--****************-->
<!--*****Footer*****-->
<!--****************-->

<div class="footer">
<?php
include 'footer.php';
?>
</div>

</body>
</html>