<?php
if (isset($_POST["btnregistrar1"])) {
    $nombre_s = filter_input(INPUT_POST, "nombre_s", FILTER_SANITIZE_STRING);
    $ape_p = filter_input(INPUT_POST, "ape_p", FILTER_SANITIZE_STRING);
    $ape_m = filter_input(INPUT_POST, "ape_m", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];

    if (!empty($nombre_s) && !empty($ape_p) && !empty($ape_m) && !empty($email) && !empty($password)) {

        if (strlen($nombre_s) <= 50 && strlen($ape_p) <= 50 && strlen($ape_m) <= 50 && strlen($password) >= 8 && filter_var($email, FILTER_VALIDATE_EMAIL)) {

            if (preg_match('/^(?=.*[A-Z])(?=.*\d).{5,}$/', $password)) {

                $stmt = $conexion->prepare("INSERT INTO usuarios (nombre_s, ape_p, ape_m, email, password,id_cargo) VALUES (?, ?, ?, ?, ?,'2')");

                if ($stmt) {
                    $stmt->bind_param("sssss", $nombre_s, $ape_p, $ape_m, $email, $password);

                    if ($stmt->execute()) {
                        
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
                                $_SESSION["id"] = $datos->id;
                                $_SESSION["nombre_s"] = $datos->nombre_s;
                                $_SESSION["ape_p"] = $datos->ape_p;
                                $_SESSION["ape_m"] = $datos->ape_m;
                                $_SESSION["email"] = $datos->email;
                                $stmt->close();
                                $conexion->close();
                                header("location: inicio/inicio.php");
                                exit();
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
                        echo "<div class='block'><div class='errortxt'><p class='texto1'>El Correo ya existe.</p></div></div>";
                    }
                    $stmt->close();
                } else {
                    echo "<div class='block'><div class='errortxt'><p class='texto1'>Error en la consulta. Inténtelo de nuevo más tarde.</p></div></div>";
                }
                $conexion->close();
            } else {
                echo "<div class='block'><div class='errortxt'><p class='texto1'>La contraseña no cumple los requisitos mínimos. Mínimo 8 caracteres, al menos una letra mayúscula y un número</p></div></div>";
            }
        } else {
            echo "<div class='block'><div class='errortxt'><p class='texto1'>Los datos ingresados no son válidos.</p></div></div>";
        }
    } else {
        echo "<div class='block'><div class='errortxt'><p class='texto1'>Favor de no dejar los campos vacíos.</p></div></div>";
    }
}
?>
