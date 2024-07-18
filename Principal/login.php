<?php 
session_start();
include "./db/conexion.php"; 
if(!empty($_SESSION["id"])){
    header("location: inicio/inicio.php");
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./complemento_login/css/estilo.css">
    <title>RAMHER</title>
</head>
<body>
    <div class="contenedor-login">
        <div class="contenedor-slider">
            <div class="slider">
                <div class="slide fade">
                    <img src="./complemento_login/img/img-slider-login-1.jpg" alt="">
                    <div class="contenido-slider">
                        <div class="logo">
                        <a href="../index.php"><img src="./complemento_login/img/logo.png" alt=""></a> 
                    </div>
                    </div>
                </div>
                <div class="slide fade">
                    <img src="./complemento_login/img/img-slider-login-2.jpg" alt="">
                    <div class="contenido-slider">
                        <div class="logo">
                            <a href="../index.php"><img src="./complemento_login/img/logo.png" alt=""></a> 
                        </div>
                    </div>
                </div>
            </div>
            <a class="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="next"><i class="fas fa-chevron-right"></i></a>
            <div class="dots">
            </div>
        </div>
        <div class="contenedor-texto">
            <div class="contenedor-form">
                <h1 class="titulo">¡BIENVENIDO A RAMHER!</h1>
                <p class="descripcion">Ingresa a tu cuenta para disfrutar de tus beneficios y de las mejores promocionesque tenemos par ti.</p>
                <ul class="tabs-links">
                    <li class="tab-link active">Iniciar Sesión</li>
                    <li class="tab-link ">Registrate</li>
                </ul>
                <?php include "./db/login_conexion.php"; ?>
                <form action="" method="POST" id="formLogin" class="formulario active">
                    <input type="text" placeholder="Correo electrónico" class="input-text" name="email"> 
                    <div class="grupo-input">
                        <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                        <button type="button" class="icono fas fa-eye mostrarClave"></button>
                    </div>
                    <a href="#" class="link">¿Ovidaste tu contraseña?</a>
                    <input type="submit" class="btn" value="ingresar" name="btningresar" class="btn" id="btnLogin">
                </form>
                <?php include "./db/registro_conexion.php"; ?>
                <form action="" method="POST" id="formRegistro" class="formulario ">
                    <input type="text" placeholder="Nombre o Nombres" class="input-text" name="nombre_s" autocomplete="off"> 
                    <input type="text" placeholder="Apellido Paterno" class="input-text" name="ape_p" autocomplete="off">
                    <input type="text" placeholder="Apellido Materno" class="input-text" name="ape_m" autocomplete="off">  
                    <input type="text" placeholder="Correo electrónico" class="input-text" name="email" autocomplete="off"> 
                    <div class="grupo-input">
                        <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                        <button type="button" class="icono fas fa-eye mostrarClave"></button>                        
                    </div>
                     <label class="contenedor-cbx animate">
                        He leído y acepto los
                        <a href="#" class="link">Términos y Condiciones ¡al dar crear cuenta!</a>
                        <a href="#" class="link">y Política de privacidad </a>
                    </label>
                    <input type="submit" class="btn" id="btnRegistro" value="Crear Cuenta" name="btnregistrar1" >
                </form>
            </div>
        </div>
    </div>

    <script src="./complemento_login/js/app.js"></script>
    
</body>
</html>