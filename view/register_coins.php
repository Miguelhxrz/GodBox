<?php require_once('../controllers/header-controller.php');
error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register_coins.css">
    <script src="../scripts/helper.js"></script>
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Registro de lilGods </title>
</head>

<body>
       <!-- Header -->
       <?php include($header); ?>

    <main class="container">
        <section class="container-form">
            <div class="title-form">
                <h5>Registro de LilGods</h5> 
            </div>
            <form action="" class="form-register" name="form-register" method="POST" >
                      
                        <div class="conta">
                          <label for="coin_id" class="label-id">
                            <p>ID monedas:</p>
                            <input type="text" name="coin_id" size="45" maxlength="45" class="label-email">
                          </label>
                          
                          <label for="coin_amount" class="label-email">
                            <p>Cantidad monedas:</p>
                            <input type="text" name="coin_amount" size="6" maxlength="6" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"class="email_input">
                          </label>
                          
                          <label for="coin_price" class="codigo">
                            <p>Precio monedas:</p>
                            <input type="text" name="coin_price" size="6" maxlength="6" class="email_input"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                        </label>
                        
                      </div>

                    <input type="submit" class="btn" name="coin_register" value="Registrar"></input>

                    <?php require_once('../controllers/register_coins-controller.php'); ?>

            </form>
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