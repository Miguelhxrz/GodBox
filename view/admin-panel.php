<?php 
    require_once('../controllers/admin-panel-controller.php'); 
    require_once('../controllers/header-controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/admin_panel.css">
    <title>GodBox - Mi Usuario</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <section class="perfil">
        <div class="user">
            <img src="../assets/img/zeus.png" alt="user">
            <h4>Administrador</h4>
        </div>
    </section>

    <section class="selecction">
        <div class="container">
            <div class="box">
                <a href="../view/userObjects.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Mis Productos
                </a>
                <a href="../view/user_transactions.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Transacciones
                </a>
                <a href="userObjects.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Reporte de usuarios
                </a>
                <a href="userCoins.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Reporte de monedas vendidas
                </a>
                <a href="userObjects.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Reportes de objetos ganados
                </a>
                <a href="userCoins.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Reportes de objetos canjeados
                </a>
                <a href="../view/inventory.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Inventario de cajas
                </a>
                <a href="../view/inventory-objects.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Inventario de objetos
                </a>
                <a href="../view/sponsor.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Patrocinadores
                </a>
            </div>
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