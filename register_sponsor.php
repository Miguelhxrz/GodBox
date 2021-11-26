<!DOCTYPE html>
<html lang="en">

<?php
$errores = array();
$patron_id = "/^(V|E|v|e|J|P|G|j|p|g|R|r)-[0-9]+$/";
$patron_email = "/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/";
$patron_name = "/^[a-zA-Z0-9\s-]+$/";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register_sponsor.css">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Register Sponsor</title>
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
                        <h4>Sobre Nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="links-r">
                <div class="login-link">
                    <a href="#">
                        <img src="./icons/casco.png" alt="" class="imgcasco">
                    </a>
                </div>
            </section>

        </div>
    </header>

    <main class="container">
        <section class="container-form">
            <div class="title-form">
                <h5>Registrar patrocinador</h5>
            </div>
            <form action="" name= "form-register" class= "form-register" method="post">
            <input type="text" name="rif_input" placeholder="Rif" class="rif_input" maxlength="12" max="12">
            <input type="text" name="name_input"  placeholder="Nombre" maxlength="15" size="15" require>
            <input type="email" name="email_input"  placeholder="Email" maxlength="45" size="45" require>
            <input type="submit"class="btn" name="register" value="Registrar">
            
            <?php 
            $sponsor_name = $_POST['name_input'];
            $rif = $_POST['rif_input'];
            $email = $_POST['email_input'];


            #validacion de rif
            if (isset($rif)){
              if($rif == ''){
                array_push($errores,"Error 000: El Rif no puede estar vacio.");
              }
              if(strlen($rif) < 3) {
                array_push($errores,"Error 001:El Rif debe tener un tamaño mayor a 3 letras.");
              }if(preg_match($patron_id,$rif)){
              }else{
                array_push($errores,"Error 003: El Rif debe ser de esta manera: V,E,R,J,P ó G-12345678.");
              }
              }else {
                    array_push($errores,"Error 002: El Rif no existe.");
                  }

            #validacion name
            if (isset($sponsor_name)){
              if($sponsor_name == ''){
                array_push($errores,"Error 000: El Nombre no puede estar vacio.");
              }
              if(strlen($sponsor_name) < 3) {
                array_push($errores,"Error 001:El Nombre debe tener un tamaño mayor a 3 letras.");
              }if(preg_match($patron_name ,$sponsor_name)){
              }else{
                array_push($errores,"Error 003: El Nombre no puede contener caracteres especiales.");
              }
              }else {
                    array_push($errores,"Error 002: El Nombre no existe.");
                  }

            #validacion email
            if (isset($email)){
              if($email == ''){
                array_push($errores,"Error 000: El Correo no puede estar vacio.");
              }
              if(strlen($email) < 15) {
                array_push($errores,"Error 001:El Correo debe tener un tamaño mayor a 15 letras.");
              }if(preg_match($patron_email, $email)){
              }else{
                array_push($errores,"Error 003: Dato invalido al escribir el correo.");
              }
              }else {
                    array_push($errores,"Error 002: El Nombre no existe.");
                  }

            #Errores
            if(count($errores)>0){
              echo "<div class='error'>";
              for ($i=0; $i < count($errores); $i++) { 
                echo "<li>".$errores[$i]."</li>";

              } 
            }else{
                  session_start();

                $_SESSION['sponsor_name'] = $_POST['name_input'];

                if (isset($_SESSION['sponsor'])) {
                  $_SESSION['sponsor'] = array();
                }
                $sponsor_name = $_POST['name_input'];
                $rif = $_POST['rif_input'];
                $email = $_POST['email_input'];

                $_SESSION['sponsor'] = array(
                    "sponsor_name" => $sponsor_name,
                    "rif" => $rif,
                    "email" => $email
                ); 
              if (isset($_SESSION['sponsor']["sponsor_name"])){
                echo "<div class='correcto'><h4>¡Todo correcto, agregado!</h4></div>";
              }
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