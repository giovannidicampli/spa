<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | VillaSalus</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>
<?php
$selector = 7;
include 'nav.php';
?>


<div class="container">
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Login</div>
                <div><a href="index.php"></a>
                </div>
            </div>

            <div class="panel-body">

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form" method="post" action="Functions/login.php">

                    <div id="bottom" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value=""
                               placeholder="Username" required="required">
                    </div>

                    <div id="bottom" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password"
                               placeholder="Password" required="required">
                    </div>

                    <div class="alert alert-danger">
                        <strong>Attenzione!</strong> Username o Password errata.
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-primary">Login</button>
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


<div class="footer">
    <?php
    include 'footer.php';
    ?>
</div>


</body>
</html>