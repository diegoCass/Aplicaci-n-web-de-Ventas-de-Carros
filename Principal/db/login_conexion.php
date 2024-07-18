<?php
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {

        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $password = $_POST["password"];

        if (!$email) {
            echo "<div class='block'><div class='errortxt'><p class='texto1'>Dirección de correo electrónico inválida</p></div></div>";
            exit;
        }

        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $datos = $result->fetch_object();
            if ($password === $datos->password){
                if($datos->id_cargo == 1){
                    $_SESSION["id_cargo"] = $datos->id_cargo;
                    $_SESSION["id"] = $datos->id;
                    $_SESSION["nombre_s"] = $datos->nombre_s;
                    $_SESSION["ape_p"] = $datos->ape_p;
                    $_SESSION["ape_m"] = $datos->ape_m;
                    $_SESSION["email"] = $datos->email;
                    $stmt->close();
                    $conexion->close();
                    header("location: ./administrador/admin.php");
                    exit();

                }else if($datos->id_cargo == 2){
                    $_SESSION["id_cargo"] = $datos->id_cargo;
                    $_SESSION["id"] = $datos->id;
                    $_SESSION["nombre_s"] = $datos->nombre_s;
                    $_SESSION["ape_p"] = $datos->ape_p;
                    $_SESSION["ape_m"] = $datos->ape_m;
                    $_SESSION["email"] = $datos->email;
                    $stmt->close();
                    $conexion->close();
                    header("location: ./inicio/inicio.php");
                    exit();

                }else if($datos->id_cargo == 3){
                    $_SESSION["id_cargo"] = $datos->id_cargo;
                    $_SESSION["id"] = $datos->id;
                    $_SESSION["nombre_s"] = $datos->nombre_s;
                    $_SESSION["ape_p"] = $datos->ape_p;
                    $_SESSION["ape_m"] = $datos->ape_m;
                    $_SESSION["email"] = $datos->email;
                    $stmt->close();
                    $conexion->close();
                    header("location: ./inicio/inicio.php");
                    exit();
                
                }else{
                    echo "<div class='block'><div class='errortxt'><p class='texto1'>Verificar los datos</p></div></div>";
                    $stmt->close();
                    $conexion->close();
                }

            } else {
                echo "<div class='block'><div class='errortxt'><p class='texto1'>Verificar los datos</p></div></div>";
                $stmt->close();
                $conexion->close();
            }
        } else {
            echo "<div class='block'><div class='errortxt'><p class='texto1'>Verificar los datos</p></div></div>";
            $stmt->close();
            $conexion->close();
        }
    } else {
        echo "<div class='block'><div class='errortxt'><p class='texto1'>No dejar ningún campo vacío</p></div></div>";
    }
    }
?>
