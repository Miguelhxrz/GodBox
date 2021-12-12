<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register_page.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <script src="../scripts/helper.js"></script>
    <title>GodBox - Registro </title>
</head>

<body>
    
    <?php 
        include("../partials/header-no_register.php");
    ?>

    <main class="container">
        <section class="container-form">
            <div class="title-form">
                <h5>Registrarse</h5> 
            </div>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="form-register" class="form-register">
                <input type="text" name="username" placeholder="Usuario" maxlength="15" size="15" require>
                <input type="password" name="password" class="password" placeholder="Contraseña" maxlength="18" size="18" require>
                <input type="text" name="id" placeholder="Documento de identidad" maxlength="10" size="10" require>
                <input type="email" name="email" class="email" placeholder="Correo" maxlength="45" size="45" require> 
                <input type="text" name="address" placeholder="Dirección" maxlength="45" size="45" require> 
                <label for="birth" class="birth">
                 <p>Fecha de nacimiento:</p>
                  <input type="text" name="day" placeholder="Día" min="0" max="31">
                  <input type="text" name="month" placeholder="Mes" min="1" max="12">
                  <input type="text" name="year" placeholder="Año" min="1900" max="2003">
                </label>

                <input type="submit" class="btn" name="submit" value="registrarse" id="submit-btn">

                <?php
                    require_once('../controllers/register-page-controller.php');
                ?>

            </form>

        </section>
 
    </main>

    <footer class="footer">
      <h3 class="footer__text">Todos los derechos reservados 2021 GodBox</h3>
      <div class="footer__social-media">
        <div class="footer_img-contaienr"><img src="../assets/icons/twitter.png" alt="twitter"></div>
        <div class="footer_img-contaienr"><img src="../assets/icons/instagram.png" alt="instagram"></div>
        <div class="footer_img-contaienr"><img src="../assets/icons/facebook.png" alt="facebook"></div>
      </div>
    </footer>
    
</body>

</html>