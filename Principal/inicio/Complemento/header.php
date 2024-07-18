<?php
if (empty($_SESSION["id"])) {
    header("location: ../login.php");
    exit();
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Complemento/CSS/style.css">
    <link rel="stylesheet" href="./Complemento/CSS/estilos.css">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="navb-logo">
                <img src="./Complemento/img/logo_trasp.png" alt="Logo">
            </div>
            <div class="navb-items d-none d-xl-flex">
                <div style="font-size: 17px;" class="item">
                    <a href="/RAMHER/Principal/login.php">Home</a>
                </div>
                <div style="font-size: 17px;" class="item">
                    <a href="/RAMHER/Principal/inicio/Modelos/Modelos.php">Modelos</a>
                </div>
                <div style="font-size: 17px;" class="item">
                    <a href="/cases">Servicio</a>
                </div>
                <div style="font-size: 17px;" class="item">
                    <a href="/about">Cotización</a>
                </div>
                <div class="item-button">
                    <a href="/RAMHER/Principal/login.php" style="font-size: 19px;" type="button"><img src="./Complemento/img/usuario.png" width="28%" style="padding-right: 6%;" alt=""><?php echo $_SESSION["nombre_s"];?></a>
                </div>
            </div>
            <div class="menu1">
                <a href="#" class="hero__cta"><img width="50px" src="./Complemento/img/menu.png" alt=""></a>
            </div>
         </div>
    </header>

    <section class="modal">
        <div class="modal__container">
            <img src="images/modal.svg" class="modal__img">
            <h2 class="modal__title">¡Bienvenido al sitio!</h2>
            <p class="modal__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nobis nisi quibusdam doloremque expedita quae ipsam accusamus quisquam quas, culpa tempora. Veniam consectetur deleniti maxime.</p>
            <a href="#" class="modal__close">Cerrar Modal</a>
        </div>
    </section>

    <script src="./Complemento/JS/main.js"></script>
</body>
</html>