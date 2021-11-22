<?php
$errores = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register_page.css">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Registro </title>
</head>

<body>

    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="./img/Logo-rezised.png" alt="" class="logoo">
                <a href="./index.html"></a>
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.html">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="./index.html">
                        <img src="./icons/icons8-ruins-50.png" alt="">
                    </a>
                </div>
                <div class="about-link">
                    <a href="#">
                        <h4>Sobre nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="links-r">
                <div class="login-link">
                    <a href="./login.html">
                        <h4>Entrar</h4>
                    </a>
                </div>
            </section>
        </div>
    </header>

    <main class="container">
        <section class="container-form">
            <div class="title-form">
                <h5>Registrarse</h5>
            </div>
            <form action="" method="post" name="form-register" class="form-register">
                <input type="text" name="username" placeholder="Usuario" maxlength="15" size="15" require>
                <input type="password" name="password" class="password" placeholder="Contraseña" maxlength="18" size="18" require>
                <input type="text" name="id" placeholder="Documento de identidad" maxlength="10" size="10" require>
                <input type="email" name="email" class="email" placeholder="Correo" maxlength="45" size="45" require> 
                <input type="text" name="address" placeholder="Dirección" maxlength="45" size="45" require> 
                <label for="birth">
                Fecha de nacimiento
                <input type="date" name="birth" placeholder="Fecha de nacimiento" min="1921-11-20" max="2021-11-24">
                </label>
                <input type="submit" class="btn" value="registrarse">
            </form>
        </section>
        <?php 
          #validacion de username
        $patron_username = "/^[A-Za-z0-9_]+$/";
        if (isset($_POST['username'])) {
            if (empty($_POST['username'])) {

              echo "<script>alert('ERROR: Coloca un nombre de usuario para registrarte')</script>";

              $errores = $errores + 1;
            } else {

              if (preg_match($patron_username, $_POST['username'])) {
                echo "<script>alert('Correcto')</script>";
              } else {
                echo "<script>alert('ERROR: El nombre de usuario solo acepta letras, numeros, y guiones. Debe ser mayor a 4 digitos')</script>";
                $errores = $errores + 1;
              }
            }
          }

          #validacion de id
          $patron_id = "/^(V|E|v|e)-[0-9]+$/";
          if (isset($_POST['id'])) {
            if (empty($_POST['id'])) {

              echo "<script>alert('ERROR: Coloca la cedula de identidad para registrarte')</script>";

              $errores = $errores + 1;
            } else {

              if (preg_match($patron_id,$_POST['id']) ) {
                echo "<script>alert('Correcto')</script>";
              } else {
                echo "<script>alert('ERROR: La cedela de identidad de usuario debe ser: V ó E-12345678 ')</script>";
                $errores = $errores + 1;
              }
            }
          }

          #validacion contraseña

          if (isset($_POST['password'])) {
            if (empty($_POST['password'])) {

              echo "<script>alert('ERROR: No puedes registrate sin una contraseña')</script>";

              $errores = $errores + 1;
            } else {

              if (strlen($_POST['password']) >= 4) {
                echo "<script>alert('Correcto')</script>";
              } else {

                echo "<script>alert('ERROR: Tu contraseña debe tener mas de 4 caracteres')</script>";

                $errores = $errores + 1;
              }
            }
          }
           #validacion email
           $patron_email = "/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/";

           if (isset($_POST['email'])) {
            if (empty($_POST['email'])) {

              echo "<script>alert('ERROR: No puedes registrate sin correo electronico')</script>";

              $errores = $errores + 1;
            } else {

              if (preg_match($patron_email,$_POST['email']) ) {
                echo "<script>alert('Correcto')</script>";
              } else  {

                echo "<script>alert('ERROR: Dato invalido al escribir el correo')</script>";

                $errores = $errores + 1;
              }
            }
        }
            #validacion address
            $patron_address = "/^[a-zA-Z0-9\s-]+$/";

            if (isset($_POST['address'])) {
            if (empty($_POST['address'])) {

                echo "<script>alert('ERROR: No puedes registrate sin direccion')</script>";

                $errores = $errores + 1;
            } else {

                if (preg_match($patron_address,$_POST['address']) ) {
                    echo "<script>alert('Correcto')</script>";
                } else  {

                    echo "<script>alert('ERROR: Acepta espacios y guiones')</script>";

                    $errores = $errores + 1;
                }
            }
        }
            #validacion fecha de nacimiento

            if (isset($_POST['birth'])) {
            if (empty($_POST['birth'])) {

                echo "<script>alert('ERROR: No puedes registrate sin fecha de nacimiento')</script>";

                $errores = $errores + 1;
            } 
        }
        if ($errores === 0) {

            session_start();

            $_SESSION['user'] = $username;

            $_SESSION['password'] = $password;

            session_start();
            if (isset($_SESSION['userinfo'])) {
              $_SESSION['userinfo'] = array();
            }
            $username = $_POST['username'];
            $id = $_POST['id'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $birth = $_POST['birth'];

            $userinfo = array(

              "username" => $username,
              "id" => $id,
              "password" => $password,
              "email" => $email,
              "address" => $address,
              "birth" => $birth
              
            );

            if (isset($_SESSION['userinfo'][$username])) {
              echo "Se han modificado los datos del usuario" . $username;
            } else {
              echo "Agregado";
            }
            $_SESSION['userinfo'][$username] = $userinfo;
    
          } else {

            echo "Error al registrarse, verifique sus datos";
          }
        ?>
        <section class="footer">
            <h5>Todos los derechos reservados 2021 GodBox</h5>
        </section>
    </main>

</body>

</html>