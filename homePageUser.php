<!DOCTYPE html>
<html lang="it">
<head>
    <title>User home | VillaSalus</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="bootstrap-3.3.7-dist/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php
$selector = 6;
include 'nav.php';
?>

<h3>Benvenuto <?php echo $_SESSION['username']; ?>!</h3>

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