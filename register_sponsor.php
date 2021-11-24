<!DOCTYPE html>
<html lang="en">

<?php
$errores = 0;
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
            <input type="text" name="name_input" name="name_input" placeholder="Nombre" maxlength="15" size="15" require>
            <input type="email" name="email_input" name="email_input" placeholder="Email" maxlength="45" size="45" require>
            <input type="submit"class="btn" name="register" value="Registrar">
            </form>
            <?php
            #validacion de rif
            if (isset($_POST['rif_input'])) {
              if (empty($_POST['rif_input'])) {
  
                echo "<script>alert('ERROR: Coloca el rif del sponsor a registrar')</script>";
  
                $errores = $errores + 1;
              } else {
  
                if (preg_match($patron_id,$_POST['rif_input']) ) {
                  
                } else {
                  echo "<script>alert('ERROR: El rif debe ser de esta manera: V,E,R,J,P ó G-12345678')</script>";
                  $errores = $errores + 1;
                }
              }
            }
            #validacion name
            if (isset($_POST['name_input'])) {
                if (empty($_POST['name_input'])) {
    
                  echo "<script>alert('ERROR: No puedes registrar al sponsor sin nombre')</script>";
    
                  $errores = $errores+ 1;
                } else {
    
                  if (preg_match($patron_name, $_POST['name_input'])) {
                  } else {
                    echo "<script>alert('ERROR: Elnombre no puede contener caracteres especiales')</script>";
    
                    $errores = $errores + 1;
                  }
                }
              }
               #validacion email

           if (isset($_POST['email_input'])) {
            if (empty($_POST['email_input'])) {

              echo "<script>alert('ERROR: No puedes registrar al sponsor sin correo electronico')</script>";

              $errores = $errores + 1;
            } else {

              if (preg_match($patron_email, $_POST['email_input']) ) {
              } else  {

                echo "<script>alert('ERROR: Dato invalido al escribir el correo')</script>";

                $errores = $errores + 1;
              }
            }
        }
        if ($errores === 0) {

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
            echo "<script>alert('Sponsor agregado')</script>";
          }
          } 
    
            ?>
            
        </section>

        <section class="footer">
            <h5>Todos los derechos reservados 2021 GodBox</h5>
        </section>
    </main>
</body>

</html>