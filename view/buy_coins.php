<?php 
    require_once('../controllers/buy-coins-controller.php');
    require_once('../controllers/header-controller.php');
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
            <div class="grid-item-2">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>

                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <input type="hidden" name="monedas" value="100">
                        <input type="hidden" name="price" value="25">             
                    </form>
                        <a href="" class="box__button-buy" id="buy__btn">Comprar</a>

                </div>
                
            </div>
            <div class="grid-item-3">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
            <div class="grid-item-4">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
            <div class="grid-item-5">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
            <div class="grid-item-6">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
            <div class="grid-item-7">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
            <div class="grid-item-8">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
            <div class="grid-item-9">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
            <div class="grid-item-10">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
            <div class="grid-item-11">
                <div class="cuadro_items-1"><img src="../assets/img/monedas.png" alt=""> </div>
                <div class="cuadro_items-2">
                    <h3>Monedas: 100</h3>
                    <h3>Precio: 25$</h3>
                </div>
                <div class="box__button-buy"><a href="#">Comprar</a></div>
            </div>
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