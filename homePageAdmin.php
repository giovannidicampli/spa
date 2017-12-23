<?php

include('Functions/SessionManager.php');

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Admin home</title>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php
$selector = 4 ;
include 'nav.php';
?>

<h3>Benvenuto <?php echo $_SESSION['username']; ?>!</h3>

</body>
</html>