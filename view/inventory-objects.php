<?php
require_once('../controllers/inventory-objects-controller.php');
require_once('../controllers/header-controller.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inventory-objects.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Inventario</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <h3>Inventario de Objetos</h3>
        <div class="container-inventory">
            <section class="item-title">
                <div class="item-1">
                    <h6>Nombre</h6>
                </div>
                <div class="item-2">
                    <h6>Cantidad</h6>
                </div>
                <div class="item-3">
                    <h6>Precio</h6>
                </div>
                <div class="item-4">
                    <h6>Sponsor</h6>
                </div>
                <div class="item-5">
                    <h6>Rango</h6>
                </div>
                <div class="item-6">
                    <h6>Categoria</h6>
                </div>
            </section>
            <section class="item-title">
                <div class="item-1">
                    <h6><?php echo $_SESSION['object']["name_object"]; ?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $_SESSION['object']["cantidad"]; ?></h6>
                </div>
                <div class="item-3">
                    <h6><?php echo $_SESSION['object']["price"]; ?></h6>
                </div>
                <div class="item-4">
                    <h6><?php echo $_SESSION['object']["Sponsor"]; ?></h6>
                </div>
                <div class="item-5">
                    <h6><?php echo $_SESSION['object']["Rank"]; ?></h6>
                </div>
                <div class="item-6">
                    <h6><?php echo $_SESSION['object']["Category"]; ?></h6>
                </div>
            </section>
        </div>
    </main>

    <footer class="footer">
        <h3>Todos los derechos reservados 2021 GodBox</h3>
        <div class="footer__social-media">
            <figure><img src="../assets/icons/twitter.png" alt="twitter"></figure>
            <figure><img src="../assets/icons/instagram.png" alt="instagram"></figure>
            <figure><img src="../assets/icons/facebook.png" alt="facebook"></figure>
        </div>
    </footer>
</body>

</html>