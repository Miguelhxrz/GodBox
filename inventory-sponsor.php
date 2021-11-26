<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  $_SESSION['sponsor'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inventoy-sponsor.css">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Inventario</title>
</head>

<body>

    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="./img/Logo-rezised.png" alt="" class="logoo">
                <a href="./index.html"></a>
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.html">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="./index.html">
                        <img src="./icons/icons8-ruins-50.png" alt="">
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
                        <img src="./icons/casco.png" alt="" class="imgcasco">
                    </a>
                </div>
            </section>

        </div>
    </header>

    <main class="container">
        <h3>Inventario de Sponsors</h3>
        <div class="container-inventory">
            <section class="item-title">
                <div class="item-1">
                    <h6>Rif</h6>
                </div>
                <div class="item-2">
                    <h6>Nombre</h6>
                </div>
                <div class="item-3">
                    <h6>Correo Electronico</h6>
                </div>
            </section>
            <section class="item-title">
                <div class="item-1">
                    <h6><?php echo $_SESSION['sponsor']["rif"];?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $_SESSION['sponsor']["sponsor_name"];?></h6>
                </div>
                <div class="item-3">
                    <h6><?php echo $_SESSION['sponsor']["email"];?></h6>
                </div>
            </section>
        </div>
    </main>
