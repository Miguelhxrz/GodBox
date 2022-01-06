<?php

require_once('../controllers/header-controller.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/confirmar.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <script src="../scripts/buy.js"></script>
    <title>GodBox - Register Sponsor</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <section class="container-form">
           <div class="title"><h3>Compra</h3></div>
           <?php require_once('../controllers/confirm-controller.php') ?>
           <div class="content">
               <div class="contenido">
               <div class="item">
               <div class="items">Fecha:</div>
               <div class="items">Cantidad de LilGod:</div>
               </div>
               <div class="line"></div>
               <div class="result">
               <div class="items"><?php echo $dia,("/"),$mes,("/"),$anio;?></div>
               <div class="items" id="coin_quantity"><?php echo $coin_quantity ?></div> 
               </div>
               </div>
               <div class="lines"></div>
               <div class="contenidos">
               <div class="items">Total: <?php echo $coin_price?> $</div>
               </div>
                    <button class='btn__confirm' name="confirm_btn" id="confirm_btn">Confirmar</button>
           </div>  
                <p class="hidden" id="confirm_user"><?php echo $search_user ?></p>
        </section>

        <section class="modal">
            <div class="modal__container">
                <img src="../assets/img/Online payment_Isometric.svg" alt="" class="modal__img">
                <h2 class="modal__title">¿Deseas comprar mas monedas?</h2>
                <p class="modal__paragraph">Si deseas comprar mas monedas, presiona aceptar, si no es el caso, presiona continuar</p>
                <div class="modal__select">
                <form method='POST' action='<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>' class="modal__form">        
                    <input type='hidden' name='new_coins' value="<?php echo $coin_quantity?>">
                    <input type="submit" class="modal__btn" name="accept_btn" id="accept_btn" value="Aceptar">
                    <input type="submit" class="modal__btn" name="continue_btn" id="continue_btn" value="Continuar">
                </form>
                
                </div>
            </div>
            

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