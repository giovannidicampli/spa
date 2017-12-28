<!DOCTYPE html>
<html lang="it">
<head>
    <title>User home | VillaSalus</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php
$selector = 6 ;
include 'nav.php';
?>

<h3>Benvenuto <?php echo $_SESSION['username']; ?>!</h3>

<!--****************-->
<!--*****Footer*****-->
<!--****************-->

<div class="footer">
    <p>2018 Villa Salus. All right reserved.</p>
</div>

</body>
</html>