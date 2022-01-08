<?php ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Entrar</title>
</head>

<body>

    <?php include('../partials/header-no_singin.php'); ?>  

    <main class="container">
        <section class="container-form">
            <div class="title-icon">
                <img src="../assets/icons/user.png" alt="">
            </div>
            <div class="title-form">
                <h5>Entrar</h5>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="form-register" class="form-register">
                <input type="text" name="username" placeholder="Username" class="username_input">
                <input type="password" name="password" placeholder="Contraseña" class="password_input">
                <input type="submit" value="Entrar" class="btn" name="btn">

                <div class="form__account">
                    <h4>¿No tienes cuenta? <a href="./register_page.php">¡Registrate aqui!</a></h4>
                </div>
                <?php require_once("../controllers/login-controller.php"); ?>
            </form>
            <?php

            $username = $_POST['username_input'];
            $password = $_POST['password_input'];

            ?>
        </section>
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