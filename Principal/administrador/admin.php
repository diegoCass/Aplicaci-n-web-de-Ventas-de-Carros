<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location: ../login.php");
    exit();
} else if ($_SESSION["id_cargo"] == 2) {
    header("location: ../inicio/inicio.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>hola admin</h1>
<a href="./cerrar.php">Cerrar</a>

</body>
</html>