<?php require_once('../controllers/roulette-controller.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/roulette.css">
    <script src="../scripts/roulette.js"></script>

    <title>GodBox | Caja 🎁</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <section class="roulette">
            <article class="illustration">

            </article>

            <div id="container__alert-item">
                <figure class="item__card-alert">
                    <h2 id="Y-item-text"></h2>
                </figure>
                <button id="accept">!Genial¡</button>
            </div>
            <article class="roulette__container">
                <div class="roulette__select" id="roulette__select">
                    <img src="../assets/icons/play.png">
                </div>
                <div class="roulette__container-cards">
                    <div class="wrapper">
                        <figure class="item__card">
                            <h2>1</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>2</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>3</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>4</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>5</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>6</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>7</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>8</h2>
                        </figure>
                    </div>
                    <div class="wrapper">
                        <figure class="item__card">
                            <h2>1</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>2</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>3</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>4</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>5</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>6</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>7</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>8</h2>
                        </figure>
                    </div>
                    <div class="wrapper">
                        <figure class="item__card">
                            <h2>1</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>2</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>3</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>4</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>5</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>6</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>7</h2>
                        </figure>
                        <figure class="item__card">
                            <h2>8</h2>
                        </figure>
                    </div>
                </div>
            </article>
            <button id="spin" class="roulette__btn-spin">GIRAR</button>
        </section>

        <h3>¿Que puedes ganar?</h3>
        <section class="win__container">
            <article class="item"></article>
            <article class="item"></article>
            <article class="item"></article>
            <article class="item"></article>
            <article class="item"></article>
            <article class="item"></article>
            <article class="item"></article>
            <article class="item"></article>
        </section>

    </main>

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