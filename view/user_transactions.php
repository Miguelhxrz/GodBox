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
    <header class="header">
        <div class="container-header">
            <section class="logo">
                <img src="../assets/img/Logo-rezised.png" alt="">
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.php">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="../index.php">
                        <img src="../assets/icons/Home.png" alt="">
                    </a>
                </div>
                <div class="about-link">
                    <a href="#">
                        <h4>Sobre Nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="options">
                <div class="link">
                    <div class="btn-menu">
                        <label for="btn-menu"><img src="../assets/icons/user.png" alt="Opciones de Usuario" class="item"></label>
                        <a href="user.php"><img src="../assets/icons/coin.png" alt="Objetos y Monedas" class="item"></a>
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
            <h4>Username</h4>
        </div>
    </section>

    <section class="selecction">
        <div class="container">
            <div class="box">
                <a href="userObjects.php" class="button btn1">
                     Mis Productos
                </a>
                <a href="#" class="button btn2">
                     Transacciones
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