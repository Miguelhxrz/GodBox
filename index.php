<?php require('./controllers/home-controller.php')?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
    <title>GodBox</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <section class="offers__container">
            <h3>Ofertas especiales</h3>
            <article class="controls">
                <div class="control"></div>
                <div class="control"></div>
                <div class="control"></div>
            </article>
        </section>
        <section class="sponsor__container">
            <article class="sponsor__box"></article>
            <article class="sponsor__box"></article>
            <article class="sponsor__img">
                <img src="./img/sponsors.png" alt="">
            </article>
            <article class="sponsor__box"></article>
            <article class="sponsor__box"></article>
        </section>
        <section class="items__container">
            <article class="img__container">
                <img src="./assets/img/proteger.png" alt="">
                <h3>Nuevos objetos</h3>
            </article>
            <article class="item__box"></article>
            <article class="item__box"></article>
            <article class="item__box"></article>
            <article class="item__box"></article>
            <article class="item__box"></article>
            <article class="item__box"></article>
            <article class="item__box"></article>
            <article class="item__box"></article>
        </section>
        <section class="boxes__container">
            <article class="boxes__box"></article>
            <article class="boxes__box"></article>
            <article class="boxes__box"></article>
            <article class="boxes__box"></article>
            <h3>New Boxes Fall</h3>
        </section>
    </main>

    <footer class="footer">
        <img src="./assets/img/eezy_17.png" alt="">
        <h3>Todos los derechos reservados &copy; GodBox</h3>
    </footer>
</body>

</html>