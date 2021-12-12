<?php require_once('../controllers/user-config-controller.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/userConfig.css">
    <title>GodBox - Configuración</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <section class="perfil">
        <div class="user">
            <img src="../assets/img/avatar1.png" alt="user">
            <h4>Username</h4>
        </div>

        <div class="principalContainer">
            <div class="box">
                <main class="container">
                    <section class="container-form">
                        <form action="" class="form-register" id="form">
                            <div class="conta">
                                <section class="l-q">
                                    <label for="username" class="label-username">
                                        Nombre de Usuario
                                        <input type="text" name="" id="usemane" placeholder="Nuevo nombre de usuario" size="45" maxlength="45" class="username_input">
                                    </label>
                                    <label for="addres" class="label-addres">
                                        Actualizar Dirección
                                        <input type="text" name="" id="addres" placeholder="Actualizar" size="45" maxlength="45" class="addres_input">
                                    </label>
                                    <label for="email" class="label-email">
                                        Actualizar E-mail
                                        <input type="email" name="" id="email" placeholder="Actualizar" size="45" maxlength="45" class="email_input">
                                    </label>
                                    <label for="password" class="label-password">
                                        Contraseña
                                        <input type="password" name="" id="password" placeholder="Contraseña" size="45" maxlength="45" class="password_input">
                                    </label>
                                    <!--
                                    <label for="birth" class="label-birth">
                                        Fecha de nacimiento
                                        <input type="date" name="" id="birth" class="birth_input" disabled="">
                                        <p>Esta informacion no se puede modificar</p>
                                    </label>
                                    <label for="text" class="label-email">
                                        Numero de tarjeta de credito
                                        <input type="text" placeholder="Actualizar" size="45" maxlength="45" class="email_input" required>
                                    </label>
                                    <select name="Tipo de tarjeta" aria-placeholder="Tipo de tarjeta de credito" id="">
                                        <option selected="true" disabled="disabled">Tipo de tarjeta de credito</option>
                                        <option value="2">Visa</option>
                                        <option value="3">Mastercad</option>
                                    </select>
                                    <br>
                                    <label for="fecha" class="label-birth">
                                        Fecha de vencimiento
                                        <input type="date" placeholder=" Fecha de nacimiento" class="date" required>
                                    </label>
                                    <label for="codigo" class="codigo">
                                        Codigo CVV
                                        <input type="text" placeholder="Actualizar" size="3" maxlength="3" class="codigoCvv" required>
                                    </label>-->
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

    <script src="../scripts/userConfig_validation.js"></script>

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