<?php
if (!empty($_SESSION["id"])) {
    header("location: Principal/inicio/inicio.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./implenetos/CSS/style.css">
    <title>RAMHER</title>
</head>
<body>
<section>
<div class="hero1">
        <nav class="nav container">
            <div class="nav__logo">
            </div>
        </nav>
        <?php include "./Complemento/header.php";?>
        <section class="hero__container1 container55">
            <h1 class="hero__title"></h1>
            <p class="hero__paragraph"></p>

        </section>
    </div>
    <br>
    <br>
    <center><h5>HERRAMIENTAS DE COMPRAS</h5></center>
    <center><h1>Encuentra tu Ramher</h1></center>
    <br>
    <div class="button">
        <div class="num1"> 
            <center>
                <img class="im1" width="15%" src="./implenetos/img/NxW_Home_ICON_CON.webp (2).png" alt="">
                <br>
                <br>
                <h3 class="m5" style="color: rgb(104, 104, 104);">Cotiza tu Ramher</h3>
                <br>
                <br>
                <a class="boton" href="#">Buscar Ahora</a>
            </center>
        </div>
        <div class="num2">
            <center>
                <img class="im1" width="15%" src="./implenetos/img/NxW_Home_ICON_RFS.webp.png" alt="">
                <br>
                <br>
                <h3 class="m5" style="color: rgb(104, 104, 104);">Cita de Servicio</h3>
                <br>
                <br>
                <a class="boton" href="#">Agendar Ahora</a>
            </center>
        </div>
        <div class="num3">
            <center>
                <img class="im1" width="15%" src="./implenetos/img/NxW_Home_ICON_STOCK_CAR.webp.png" alt="">
                <br>
                <br>
                <h3 class="m5" style="color: rgb(104, 104, 104);">Disponibilidad</h3>
                <br>
                <br>
                <a class="boton" href="#">Configurar y Precio</a>
            </center>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php include "./implenetos/menu.php";?>
   
</section>
<?php
include "./Complemento/footer.php";
?>
</body>
</html>