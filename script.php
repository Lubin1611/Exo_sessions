<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 03/01/2019
 * Time: 16:20
 */
session_start();

$_SESSION["background"] = $_POST['site'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Background</title>
</head>
<body style="background-color:<?= $_SESSION["background"];?>">

Visiter pour garder la couleur sur une autre page<br><br>
<a href="index2.php">Cliquez ici pour visiter index2.php</a>

</body>
</html>

