<?php 

    error_reporting(0);

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

    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="../assets/img/Logo-rezised.png" alt="" class="logoo">
                <a href="./index.php"></a>
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.php">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="../index.php">
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
                    <a href="#">
                        <img src="../assets/icons/casco.png" alt="" class="imgcasco">
                    </a>
                </div>
            </section>

        </div>
    </header>

    <main class="container">
        <h3>Inventario de Cajas</h3>
        <div class="container-inventory">
            <section class="item-title">
                <div class="item-1">
                    <h6>Nombre</h6>
                </div>
                <div class="item-2">
                    <h6>Codigo</h6>
                </div>
                <div class="item-3">
                    <h6>Precio</h6>
                </div>
                <div class="item-4">
                    <h6>Categoria</h6>
                </div>
                <div class="item-5">
                    <h6>Rango</h6>
                </div>
                <div class="item-6">
                    <h6>Objetos</h6>
                </div>
            </section>
            <section class="item-title">
                <div class="item-1">
                    <h6><?php echo $_SESSION['box']["name"];?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $_SESSION['box']["codigo"];?></h6>
                </div>
                <div class="item-3">
                    <h6><?php echo $_SESSION['box']["price"];?></h6>
                </div>
                <div class="item-4">
                    <h6><?php echo $_SESSION['box']["category"];?></h6>
                </div>
                <div class="item-5">
                    <h6><?php echo $_SESSION['box']["rank"];?></h6>
                </div>
                <div class="item-6">
                    <h6><?php echo $_SESSION['box']["objetos"];?></h6>
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
