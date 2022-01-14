<?php 
  require_once('../controllers/about-us-controller.php'); 
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
  <link rel="stylesheet" href="../css/about-us.css">
  
  <title>GodBox | Sobre Nosotros</title>
</head>

<body>
         <!-- Header -->
  <?php include($header); ?>
  
    <main class="container">
        <div class="conta">
            <section class="cont">
                <h3>Sobre Nosotros</h3>
                <div class="l-us">
                <img class= "logo-us"src="../assets/img/Logo-rezised.png" alt="">
                </div>
                <p>Somos un juego de azar digital, en nuestra interfaz puedes obtener productos interesantes de diferentes patrocinadores en muy buen precio: <br>
                Cómo funciona nuestra interfaz: </p>
                <p>
                    1-  Debes comprar nuestra moneda, llamada  “LilGods”. <br>
                    2-  Con la compra de la moneda, puedes comprar una o varias cajas. <br>
                    3-  Al momento de comprar la caja se desplegará una ruleta, donde al darle “Girar” por azar se elige un objeto. ¡Este será el Objeto que Ganaras!. <br>
                    4-  Este objeto lo puedes canjear por “LilGods” y comprar más cajas, o lo puedes pedir para enviar <br>
                </p>
              
                <p>
                    ¡Tenemos millones de Objetos de Diferentes Patrocinadores!
                </p>
            </section>
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