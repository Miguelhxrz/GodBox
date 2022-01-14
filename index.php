<?php 
require_once('./controllers/home-controller.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
    <title>GodBox | Inicio</title>
</head>

<body>
    <!-- Header -->
        <?php include($header)?>     
    
    <main class="container">
        <section class="offers__container">
            <ul class="slider">
                <li id="slide1">
                    <img src="./assets/img/slide-1.png" alt="Slide-1">
                </li>
                <li id="slide2">
                    <img src="./assets/img/slide-2.png" alt="slide-2">
                </li>
                <li id="slide3">
                    <img src="./assets/img/slide-3.png" alt="slide-3">
                </li>
            </ul>

            <article class="controls">
               
                <a href="#slide1" class="control"></a>
                <a href="#slide2" class="control"></a>
                <a href="#slide3" class="control"></a>
            </article>
        </section>
        <section class="sponsor__container">
            <article class="sponsor__box">
                <img src="./assets/img/sponsors/apple.png" alt="">
            </article>
            <article class="sponsor__box">
                <img src="./assets/img/sponsors/intel.png" alt="">
            </article>
            <article class="sponsor__img">
                <h3 class="sponsor__title"><span class="N">N</span><span class="u">u</span><span class="e">e</span><span class="v">v</span><span class="o">o</span><span class="s">s</span> <span class="p">p</span><span class="a">a</span><span class="t">t</span><span class="r">r</span><span class="o2">o</span><span class="c">c</span><span class="i">i</span><span class="n">n</span><span class="a2">a</span><span class="d">d</span><span class="o3">o</span><span class="r2">r</span><span class="e2">e</span><span class="s2">s</span></h3>
                <img src="./assets/img/man.png" alt="">
            </article>
            <article class="sponsor__box">
                <img src="./assets/img/sponsors/nintendo.png" alt="">
            </article>
            <article class="sponsor__box">
                <img src="./assets/img/sponsors/Microsoft.png" alt="">  
            </article>
        </section>
        <section class="items__container">
            <article class="img__container">
                <img src="./assets/img/proteger.png" alt="">
                <h3>Nuevos objetos</h3>
            </article>
            <article class="item__box">
                <img src="./assets/img/items/ps5.png" alt="">
            </article>
            <article class="item__box">
                <img src="./assets/img/items/Chair_gaming.png" alt="">
            </article>
            <article class="item__box">
                <img src="./assets/img/items/Ps5_headset.png" alt="">
            </article>
            <article class="item__box">
                <img src="./assets/img/items/Play1.png" alt="">
            </article>
            <article class="item__box">
                <img src="./assets/img/items/pc_gamer.png" alt="">
            </article>
            <article class="item__box">
                <img src="./assets/img/items/Razer_keyboard.png" alt="">
            </article>
            <article class="item__box">
                <img src="./assets/img/items/Ps4_controller.png" alt="">
            </article>
            <article class="item__box">
                <img src="./assets/img/items/Mario_toy.png" alt="">
            </article>
        </section>
        <section class="boxes__container">
            <article class="boxes__box">
                <img src="./assets/img/boxes/box-noSponsor-D.png" alt="">
            </article>
            <article class="boxes__box">
                <img src="./assets/img/boxes/box-noSponsor-S.png" alt="">
            </article>
            <article class="boxes__box">
                <img src="./assets/img/boxes/box-noSponsor-H.png" alt="">
            </article>
            <article class="boxes__box">
                <img src="./assets/img/boxes/box-noSponsor-O.png" alt="">
            </article>
            <h3>New Boxes Fall</h3>
        </section>
    </main>

    <footer class="footer">
        <h3>Todos los derechos reservados &copy; GodBox</h3>
    </footer>
</body>

</html>