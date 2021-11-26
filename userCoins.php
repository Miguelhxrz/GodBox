<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/userCoins.css">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Mis Movimientos</title>
</head>

<body>
    <header class="header">
        <div class="container-header">
            <section class="logo">
                <img src="./img/Logo-rezised.png" alt="">
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.html">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="./index.html">
                        <img src="./icons/Home.png" alt="">
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
                        <label for="btn-menu"><img src="./icons/user.png" alt="Opciones de Usuario" class="item"></label>
                        <a href="user.php"><img src="./icons/coin.png" alt="Objetos y Monedas" class="item"></a>
                    </div>
                </div>
            </section>
        </div>
        <section class="fondo">
            <img src="./img/header.png" alt="">
        </section>
    </header>

    <section class="perfil">
        <div class="user">
            <img src="./img/avatar1.png" alt="user">
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
            <img src="./img/monedas.png" alt="coins">
            <img src="./img/monedas.png" alt="coins">
            <img src="./img/monedas.png" alt="coins">
            <img src="./img/monedas.png" alt="coins">
            <img src="./img/monedas.png" alt="coins">
            <img src="./img/monedas.png" alt="coins">
        </div>
    </section>

    <br><br><br><br><br>

    <footer>
        <h4>TODOS LOS DERECHOS RECERVADOS &copy; GODBOX</h4>
    </footer>
    </div>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="menu">
            <nav>
                <a href="userPerfil.php" class="profil">Perfil</a>
                <a href="userConfig.php" class="config">Configuración</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
</body>

</html>