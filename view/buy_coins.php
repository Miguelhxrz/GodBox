<?php 
    require_once('../controllers/buy-coins-controller.php');
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
    <link href="../css/compraMonedas.css" rel="stylesheet">
    <title>GodBox</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <div class="grid-container">
            <?php for ($i=0; $i < count($show); $i++) { 
                
            echo "<div class='grid-item'>
                <div class='cuadro_items-1'><img src=".$show[$i]['image']."></div>
                    <div class='cuadro_items-2'>
                        <h3 id='coins'>Monedas:".$show[$i]['quantity']."</h3>
                        <h3 id='price'>Precio:".$show[$i]['price']."</h3>
                    </div>

                    <form method='POST' action='../view/confirmar.php'>        
                        <input type='hidden' name='coin_id' value=".$show[$i]['id'].">
                        <button class='box__button-buy'>Comprar</button>
                    </form>

                </div>";
            } ?>
            
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

</body>

</html>