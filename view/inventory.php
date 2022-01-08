<?php

require_once('../controllers/inventory-controller.php');
require_once('../controllers/header-controller.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inventory.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Inventario</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <h3>Inventario de Cajas</h3>
        <div class="container-inventory">
            <section class="item-title">
                <div class="item-1-1">
                    <h6>Nombre</h6>
                </div>
                <div class="item-2-1">
                    <h6>Codigo</h6>
                </div>
                <div class="item-5-1">
                    <h6>Precio</h6>
                </div>
                <div class="item-5-1">
                    <h6>Foto</h6>
                </div>
                <div class="item-2-1">
                    <h6>Categoria</h6>
                </div>
                <div class="item-2-1">
                    <h6>Rango</h6>
                </div>
                <div class="item-4-1">
                    <h6>Opciones</h6>
                </div>
            </section>
            <div class="container-items">
            <section class="item-title">
                <div class="item-1">
                    <h6>BoxName</h6>
                </div>
                <div class="item-2">
                    <h6>0A154A54</h6>
                </div>
                <div class="item-5">
                    <h6>2.99</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-2">
                    <h6>Tecnologia</h6>
                </div>
                <div class="item-2">
                    <h6>Dios</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_box-update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
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