<?php
require "config/detalles_config.php";
require "config/Database.php";
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){

    echo 'error de token';
    exit;
}else{

    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    if($token == $token_tmp){

        $sql = $con->prepare("SELECT count(id) FROM modelos WHERE id=? AND activo=1");
        $sql->execute([$id]);
        if($sql->fetchColumn() >0){
            
        $sql = $con->prepare("SELECT nombre, descripcion, precio FROM modelos WHERE id=? AND activo=1 LIMIT 1");
        $sql->execute([$id]);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
        $precio = $row['precio'];
        }
         
    }else{
        echo 'error de token';
        exit;
    }

}

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAMHER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <?php include "Complemento/header.php";?>
    
<section>

<h2><?php echo $nombre;?></h2>
<h2><?php echo $descripcion;?></h2>
<h2><?php echo $precio;?></h2>

</section>

</body>
</html>