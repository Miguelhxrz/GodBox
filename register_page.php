<?php

  $patron_username = "/^[A-Za-z0-9_]+$/";
  $patron_address = "/^[a-zA-Z0-9\s-]+$/";
  $patron_id = "/^(V|E|v|e)-[0-9]+$/";
  $patron_email = "/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/";

  $errores = array();

  error_reporting(0)

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

                <?php
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  $id = $_POST['id'];
                  $email = $_POST['email'];
                  $address = $_POST['address'];

                  #validacion de username

                  if(isset($username)){
                    if($username == '') {
                      array_push($errores,"Error 000: El Username no puede estar vacio.");
                    } 
                    if(strlen($username) < 3) {
                      array_push($errores,"Error 001: El tamaño del username tiene que ser mayor a 3 letras.");
                    }
                  }else {
                    array_push($errores,"Error 002: El Username no existe.");
                  }

                  #validacion password

                  if(isset($password)){
                    if($password == '') {
                      array_push($errores,"Error 003: la contraseña no puede estar vacio.");
                    } 
                    if(strlen($password) < 3) {
                      array_push($errores,"Error 004: el tamaño de la contraseña tiene que ser mayor a 3 caracteres.");
                    }
                  }else {
                    array_push($errores,"Error 005: la contraseña no existe.");
                  }

                  #validacion de id

                  if(isset($id)){
                    if($id == '') {
                      array_push($errores,"Error 006: el id no puede estar vacio.");
                    } 
                    if(strlen($id) < 3) {
                      array_push($errores,"Error 007: el tamaño del id tiene que ser mayor a 3 caracteres.");
                    }
                  }else {
                    array_push($errores,"Error 008: el id no existe.");
                  }

                  #Validacion Email

                  if(!isset($email)){
                    if($email = '') {
                      array_push($errores,"Error 009: No puedes dejar el campo de email vacio.");
                    }
                    if(strlen($email) < 3){
                      array_push($errores,"Error 010: El email debe tener mas de 3 caracteres.");
                    }
                  }

                   #Validacion address

                  if(!isset($address) || $address = '' || strlen($address) < 3){
                    array_push($errores,"Error 005: Verifica el campo de nombre de usuario");
                   }

                   #Imprimiendo alertas

                   if(count($errores) > 0){
                    echo "<div class='error'>";
                        for ($i=0; $i < count($errores); $i++) { 
                          echo "<li>".$errores[$i]."</li>";

                        }
                        var_dump($password);
                        var_dump($id);
                        echo strlen($password);
                        echo strlen($id);
                        echo strlen($username);
                      echo "</div>";
                   }else {
                     echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";
                   }
                  

                ?>
            </form>

        </section>

        <section class="footer">
            <h5>Todos los derechos reservados 2021 GodBox</h5>
        </section>
    </main>

</body>

</html>