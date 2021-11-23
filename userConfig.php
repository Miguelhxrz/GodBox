<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/userConfig.css">
    <title>GodBox - Configuración</title>
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
                        <label for="btn-menu"><img src="./icons/user.png" alt="" class="item"></label>
                        <a href="user.php"><img src="./icons/coin.png" alt="" class="item"></a>
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

        <section class="selecction">
            <div class="container">
                <div class="box">
                    <a href="#" class="button">Modificar</a>
                </div>
            </div>
        </section>

        <div class="principalContainer">
            <div class="box">
                <main class="container">
                    <section class="container-form">
                        <form action="" class="form-register" id="form">
                            <div class="conta">
                                <section class="l-q">
                                    <label for="addres" class="label-addres">
                                        Actualizar Dirección
                                        <input type="text" name="" id="addres" placeholder="Actualizar" size="45" maxlength="45" class="addres_input">
                                    </label>
                                    <label for="email" class="label-email">
                                        Actualizar E-mail
                                        <input type="email" name="" id="email" placeholder="Actualizar" size="45" maxlength="45" class="email_input">
                                    </label>
                                    <label for="birth" class="label-birth">
                                        Fecha de nacimiento
                                        <input type="date" name="" id="birth" class="birth_input" disabled="">
                                        <p>Esta informacion no se puede modificar</p>
                                    </label>
                                </section>

                                <button type="submit">guardar</button>
                                <button type="reset">reestablecer</button>
                                <p class="warnings" id="warnings"></p>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>
    </section>

    <br><br><br><br><br>

    <script src="./JS/userConfig_validation.js"></script>

    <footer>

    </footer>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="menu">
            <nav>
                <a href="userPerfil.php" class="profil">Perfil</a>
                <a href="#" class="config">Configuración</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
</body>

</html>