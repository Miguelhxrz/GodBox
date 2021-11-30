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
    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="../img/Logo-rezised.png" alt="" class="logoo">
                <a href="../index.html"></a>
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="../Boxes.html">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="../index.html">
                        <img src="../icons/icons8-ruins-50.png" alt="">
                    </a>
                </div>
                <div class="about-link">
                    <a href="./">
                        <h4>Sobre nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="options">
                <div class="link">
                    <div class="btn-menu">
                        <label for="btn-menu"><img src="../icons/casco.png" alt="" class="item"></label>
                        <a href="admin_objects.php"><img src="../icons/coin.png" alt="" class="item"></a>
                    </div>
                </div>
            </section>

        </div>
        <section class="fondo">
            <img src="../assets/img/header.png" alt="">
        </section>
    </header>

    <section class="perfil">
        <div class="user">
            <img src="../assets/img/avatar1.png" alt="user">
            <h4>administrador</h4>
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