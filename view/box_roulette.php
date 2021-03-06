<?php 
require_once('../controllers/roulette-controller.php'); 
require_once('../controllers/header-controller.php');
error_reporting(0);
?>
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
            <article class="illustration"></article>

            <div id="container__alert-item">
                <figure class="item__card-alert">
                   <img src="" alt="img_item" id="img_obj">        
                </figure>
                    <form action="../view/user_inventory.php" method="POST" class="hidden">
                        <input type="hidden" name="object_rank" id="object_rank_win">
                        <input type="hidden" name="object_id-win" id="object_id-win">
                        <input type="submit" id="accept" value="!Genial¡">
                    </form>
            </div>

            <article class="roulette__container">
                <div class="roulette__select" id="roulette__select">
                    <img src="../assets/icons/play.png">
                </div>
                <div class="roulette__container-cards">
                    
                    <?php for ($i=0; $i < count($objects) ; $i++) { 
                        $k = 0;
                        echo "
                        <div class='wrapper'>
                            <figure class='item__card'>
                                <img src='".$objects[$i][$k]['image']."' class>
                            </figure>
                            <p class='hidden-id'>".$box_items[$i]."</p>
                            <p class='hidden-img'>".$objects[$i][$k]['image']."</p>
                            <p class='hidden-rank rank'>".$objects[$i][$k]['rank']."</p>
                        </div>";
                    } ?>

                    <?php for ($i=0; $i < count($objects) ; $i++) { 
                        $k = 0;
                        echo "
                        <div class='wrapper'>
                            <figure class='item__card'>
                                <img src='".$objects[$i][$k]['image']."' class>
                            </figure>
                            <p class='hidden-id rank'>".$objects[$i][$k]['rank']."</p>
                        </div> ";
                    } ?>

                    <?php for ($i=0; $i < count($objects) ; $i++) { 
                        $k = 0;
                        echo "
                        <div class='wrapper'>
                            <figure class='item__card'>
                                <img src='".$objects[$i][$k]['image']."' class>
                            </figure>    
                            <p class='hidden-id rank'>".$objects[$i][$k]['rank']."</p>
                        </div>";
                    } ?>

                </div>
            </article>
            <button id="spin" class="roulette__btn-spin">GIRAR</button>
        </section>

        <h3>¿Que puedes ganar?</h3>
        <section class="win__container">
         <?php for ($i=0; $i < count($objects) ; $i++) { 
                        $k = 0;
                    echo "
                        <article class='item'>
                            <img src='".$objects[$i][$k]['image']."' class>
                        </article>";
                } ?>
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