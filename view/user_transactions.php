<?php 
require_once('../controllers/user-transactions-controller.php'); 
require_once('../controllers/header-controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/user_transactions.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Mis Movimientos</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <section class="perfil">
        <div class="user">
            <img src="../assets/img/avatar1.png" alt="user">
            <h4>Username</h4>
        </div>
    </section>

    <section class="selecction">
        <div class="container">
            <div class="box">
                <a href="userObjects.php" class="button btn1">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Mis Productos
                </a>
                <a href="#" class="button btn2">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Transacciones
                </a>
            </div>
        </div>
    </section>

    <section class="movimientos">
        <div class="container">
            <h3>6 registros</h3>
            <img src="../assets/img/monedas.png" alt="coins">
            <img src="../assets/img/monedas.png" alt="coins">
            <img src="../assets/img/monedas.png" alt="coins">
            <img src="../assets/img/monedas.png" alt="coins">
            <img src="../assets/img/monedas.png" alt="coins">
            <img src="../assets/img/monedas.png" alt="coins">
        </div>
    </section>


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