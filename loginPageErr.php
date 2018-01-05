<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login | VillaSalus</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$selector = 7;
include 'nav.php';
?>

<div class="container">
    <div id="loginbox" style="margin-top:50px;  " class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Login</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="index.php">Password
                        dimenticata?</a>
                </div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form" method="post" action="Functions/login.php">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value=""
                               placeholder="Username" required="required">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password"
                               placeholder="Password" required="required">
                    </div>

                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Ricordami
                            </label>
                        </div>
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <div class="alert alert-danger">
                        <strong>Attenzione!</strong> Username o Password errata.
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Non hai un account?
                                <a href="formRegistrazione.php">Registrati!</a>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
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