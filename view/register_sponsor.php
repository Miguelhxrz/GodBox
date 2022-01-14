<?php
require_once('../controllers/header-controller.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register_sponsor.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <script src="../scripts/helper.js"></script>
    <title>GodBox - Register Sponsor</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <section class="container-form">
            <div class="title-form">
                <h5>Registrar patrocinador</h5>
            </div>
            <form action="" name= "form-register" class= "form-register" method="post" enctype="multipart/form-data">
            <input type="text" name="rif_input" placeholder="Rif" class="rif_input" maxlength="12" max="12" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
            <input type="text" name="name_input"  placeholder="Nombre" maxlength="15" size="15" require>
            <input type="email" name="email_input"  placeholder="Email" maxlength="45" size="45" require>
            <label for="imagen_input" class="imagen_input">
               <p>Imagen del patrocinador</p> 
            <input type="file" name="imagen_input" id="" accept="image/png,image/jpeg">
            </label>
            <input type="submit"class="btn" name="register" value="Registrar">
            
            <?php 
            require_once('../controllers/register-sponsor-controller.php');    
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