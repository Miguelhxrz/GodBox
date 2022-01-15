<?php 
    require_once('../controllers/header-controller.php');
    require_once('../controllers/boxes-controller.php');
    error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/boxes.css">
    <title>GodBox | Boxes</title>
</head>

<body>
    <!-- Header -->
    <?php include($header);?>

    <main class="container">

        <section class="box__container">
            <?php for ($i=0; $i < count($showBoxes); $i++) { 
             echo   
            "<form action='' method='POST' class='box__card'>
                <div class='box__image'>
                    <img src='".$showBoxes[$i]['img']."' alt=''>
                </div>
                <div class='box__description-basic'>
                    <h3>".$showBoxes[$i]['name']."</h3>
                    <h3>Precio: ".$showBoxes[$i]['price']." <span class='gold'>LG</span></h3>
                </div>
                <input type='hidden' name='box_id' value='".$showBoxes[$i]['id']."'>
                <input type='hidden' name='box_price' value='".$showBoxes[$i]['price']."'>
                <input type='submit' name='buy_box' class='box__button-buy' value='Comprar' />
            </form>";
        } ?>
                </div>
            </div>   
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

</body>

</html>