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
$selector = 6;
include 'nav.php';
?>

<div class="jumbotron" style="font-family: " Roboto
", Helvetica, Arial, sans-serif>
<div class="container text-center">
    <h1>Benvenuto <?php echo $_SESSION['username']; ?>!</h1>
</div>
</div><!--Fine Jumbotron-->


<!--************Form cambio password****************-->

<div class="container"
     style="max-width: 400px; float: left; margin-left: 40px; margin-bottom: 30px;  background-color: #dfdfdf;">

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

<!--****************-->
<!--*****Footer*****-->
<!--****************-->

<footer class="footer" style="background-color: #0f0f0f">
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