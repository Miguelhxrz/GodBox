<?php
require_once('../controllers/header-controller.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/confirmar.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <script src="../scripts/helper.js"></script>
    <title>GodBox - Register Sponsor</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); 
    date_default_timezone_set('America/Caracas');
    $dia = date('d');
    $mes = date('m');
    $anio = date('Y');
    $coins = 100;
    $value = 25;
    ?>

    <main class="container">
        <section class="container-form">
           <div class="title"><h3>Compra</h3></div>
           <div class="content">
               <div class="contenido">
               <div class="item">
               <div class="items">Fecha:</div>
               <div class="items">Cantidad de LilGod:</div>
               </div>
               <div class="line"></div>
               <div class="result">
               <div class="items"><?php echo $dia,("/"),$mes,("/"),$anio?></div>
               <div class="items"><?php echo$coins?></div> 
               </div>
               </div>
               <div class="lines"></div>
               <div class="contenidos">
               <div class="items">Total: <?php echo $value?>$</div>
               </div>
           </div>
           <form action=""class="form">
               <input type="submit" name="Aceptar" value="Aceptar" class="btn">
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