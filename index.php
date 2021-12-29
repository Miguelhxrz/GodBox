<?php require('./controllers/home-controller.php')?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./scripts/main.js"></script>
    <title>GodBox | Inicio</title>
</head>

<body>
    <!-- Header -->
        <?php include($header); ?>     
    
    <main class="container">
        <section class="offers__container">
            <h3>Ofertas especiales</h3>
            <ul class="slider">
                <li id="slide1" class="slide"></li>
                <li id="slide2" class="slide"></li>
                <li id="slide3" class="slide"></li>
            </ul>
            <ul class="controls">
                <li class="control" id="control__slide1">
                    
                </li>
                <li class="control" id="control__slide2">
                    
                </li>
                <li class="control" id="control__slide3">
                    
                </li>
            </article>
        </section>
        <!-- sponsor section -->
        <section class="sponsor__container">
            <article class="sponsor__box">
                <div class="gradient__container-sponsor"></div>
                <div class="img__container-sponsor">
                    <img src="./assets/img/sponsors/Nintendo.png" alt="">
                </div>
                <div class="sponsor__name">
                    <h4>Nintendo</h4>
                </div>
            </article>
            <article class="sponsor__box">
                <div class="gradient__container-sponsor"></div>
                <div class="img__container-sponsor"></div>
                <div class="sponsor__name">
                    <h4>Apple</h4>
                </div>
            </article>
            <article class="sponsor__img">
                <h3 class="sponsor__title"><span class="N">N</span><span class="u">u</span><span class="e">e</span><span class="v">v</span><span class="o">o</span><span class="s">s</span> <span class="p">p</span><span class="a">a</span><span class="t">t</span><span class="r">r</span><span class="o2">o</span><span class="c">c</span><span class="i">i</span><span class="n">n</span><span class="a2">a</span><span class="d">d</span><span class="o3">o</span><span class="r2">r</span><span class="e2">e</span><span class="s2">s</span></h3>
                <img src="./assets/img/man.png" alt="">
            </article>
            <article class="sponsor__box">
                <div class="gradient__container-sponsor"></div>
                <div class="img__container-sponsor"></div>
                <div class="sponsor__name">
                    <h4>Intel</h4>
                </div>
            </article>
            <article class="sponsor__box">
                <div class="gradient__container-sponsor"></div>
                <div class="img__container-sponsor"></div>
                <div class="sponsor__name">
                    <h4>Microsoft</h4>
                </div>
            </article>
        </section>
        <!-- items section -->
        <section class="items__container">
            <article class="img__container">
                <img src="./assets/img/proteger.png" alt="">
                <h3>Nuevos objetos</h3>
            </article>
            <article class="item__box">
                <div class="gradient__container-item"></div>
                <div class="img__container-item"></div>
            </article>
            <article class="item__box">
                <div class="gradient__container-item"></div>
                <div class="img__container-item"></div>
            </article>
            <article class="item__box">
                <div class="gradient__container-item"></div>
                <div class="img__container-item"></div>
            </article>
            <article class="item__box">
                <div class="gradient__container-item"></div>
                <div class="img__container-item"></div>
            </article>
            <article class="item__box">
                <div class="gradient__container-item"></div>
                <div class="img__container-item"></div>
            </article>
            <article class="item__box">
                <div class="gradient__container-item"></div>
                <div class="img__container-item"></div>
            </article>
            <article class="item__box">
                <div class="gradient__container-item"></div>
                <div class="img__container-item"></div>
            </article>
            <article class="item__box">
                <div class="gradient__container-item"></div>
                <div class="img__container-item"></div>
            </article>
        </section>
        <!-- Boxes section -->
        <section class="boxes__container">
            <article class="boxes__container-grid"> 
                <div class="boxes__box"></div>
                <div class="boxes__box"></div>
                <div class="boxes__box"></div>
                <div class="boxes__box"></div>
            </article>
            <h3>New Boxes Fall</h3>
        </section>

    </main>

    <footer class="footer">
        <h3>Todos los derechos reservados &copy; GodBox</h3>
    </footer>
</body>

</html>