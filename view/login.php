<?php 

error_reporting(0);



?>


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

    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="../assets/img/Logo-rezised.png" alt="" class="logoo">
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.php">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="./index.php">
                        <img src="../assets/icons/icons8-ruins-50.png" alt="">
                    </a>
                </div>
                <div class="about-link">
                    <a href="#">
                        <h4>Sobre nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="links-r">
                <div class="login-link">
                    <a href="./register_page.php">
                        <h4>Registrarse</h4>
                    </a>
                </div>
            </section>

        </div>
    </header>

    <main class="container">
        <section class="container-form">
            <div class="title-icon">
                <img src="../assets/icons/user.png" alt="">
            </div>
            <div class="title-form">
                <h5>Entrar</h5>
            </div>
            <form action="" method="post" name="form-register" class="form-register">
                <input type="text" name="username_input" placeholder="Username" class="username_input">
                <input type="password" name="password_input" placeholder="Contraseña" class="password_input">
                <input type="submit" value="Entrar" class="btn" name="btn">
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