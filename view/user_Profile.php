<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/userPerfil.css">
    <title>GodBox - Perfil</title>
</head>

<body>
    <header class="header">
        <div class="container-header">
            <section class="logo">
                <img src="../assets/img/Logo-rezised.png" alt="">
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.html">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="./index.html">
                        <img src="../assets/icons/Home.png" alt="">
                    </a>
                </div>
                <div class="about-link">
                    <a href="#">
                        <h4>Sobre nosotros</h4>
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

        <section class="selecction">
            <div class="container">
                <div class="box">
                    <a href="./userConfig.php" class="button">Modificar</a>
                </div>
            </div>
        </section>

        <div class="principalContainer">
            <div class="box">
                <main class="container">
                    <section class="container-form">
                        <form action="" method="POST" class="form-register" id="form">
                            <div class="conta">
                                <section class="l-q">
                                    <label for="username" class="label-username">
                                        Nombre de Usuario
                                        <input type="text" name="" id="usemane" placeholder="Username" size="45" maxlength="45" class="username_input" disabled>
                                    </label>
                                    <label for="addres" class="label-addres">
                                        Dirección Actual
                                        <input type="text" name="" id="addres" placeholder="Mi dirección" size="45" maxlength="45" class="addres_input" disabled>
                                    </label>
                                    <label for="email" class="label-email">
                                        E-mail Actual
                                        <input type="email" name="" id="email" placeholder="Mi E-mail" size="45" maxlength="45" class="email_input" disabled>
                                    </label>
                                    <label for="nacimiento" class="label-nacimiento">
                                        Fecha de Nacimiento
                                        <input type="date" name="" id="nacimiento" placeholder="Fecha de nacimiento" size="45" maxlength="45" class="nacimiento_input" disabled>
                                    </label>
                                </section>
                            </div>
                        </form>
                    </section>
                </main>
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
                <a href="#" class="profil">Perfil</a>
                <a href="./userConfig.php" class="config">Configuración</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>

</body>

</html>