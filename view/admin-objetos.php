<?php require_once('../controllers/admin-objetos-controller.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/user.css">
    <title>GodBox - Mi Usuario</title>
</head>

<body>

  <!-- Header -->
  <?php require('../partials/header-admin.php') ?>

    <section class="perfil">
        <div class="user">
            <img src="../assets/img/zeus.png" alt="user">
            <h4>Administrador</h4>
        </div>
    </section>

    <section class="selecction">
        <div class="container">
            <div class="box">
                <a href="userObjects.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Mis Productos
                </a>
                <a href="userCoins.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Transacciones
                </a>
                <a href="userCoins.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Transacciones
                </a>
            </div>

            <div class="box">
                <a href="userObjects.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Mis Productos
                </a>
                <a href="userCoins.php" class="button btn">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span> Transacciones
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

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="menu">
            <nav>
                <a href="./user_Profile.php" class="profil">Perfil</a>
                <a href="./userConfig.php" class="config">Configuración</a>
                <a href="./compraMonedas.php" class="profil">Comprar lidGod</a>
                <a href="./register_sponsor.php" class="config">Registrar patrocinador</a>
                <a href="./register_object.php" class="config">Registrar producto</a>
                <a href="./register_box.php" class="config">Registrar caja</a>
                <a href="#" class="config">Reportes</a>
                <a href="#" class="config">Inventarios</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
</body>

</html>