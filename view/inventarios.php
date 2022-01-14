<?php 
require('../controllers/reports_page-controller.php');
require_once('../controllers/header-controller.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/inventarios.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <title>GodBox | Datos</title>
</head>

<body>
       <!-- Header -->
       <?php include($header);?>
     <main class="container">
        <section class="panel__container">
          <articles class="admin__container">
            <div class="admin__profile">
              <figure class="admin__ico-container">
                <img src="../assets/icons/casco.png" alt="" title="">
              </figure>
              <h4 class="title">Admin</h4>
            </div>
            <div class="select__reports">
                <a href="../view/inventory.php"><div class="btn__report">Inventario de Cajas</div></a>
                <a href="../view/inventory_objects.php"><div class="btn__report">Inventarios de Productos</div></a>
                <a href="../view/sponsor.php"><div class="btn__report">Inventarios de Patrocinadores</div></a>
                <a href="../view/admin_page.php"><div class="btn__report"><- Volver a Datos</div></a>
            </div> 
        </articles>
      </section>
      <section class="reports__container">
      <?php 
      
      ?>
          <h4 class="title">Inventarios🔒</h4>
          <div class="put__reports">
            
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