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
  <link rel="stylesheet" href="../css/reporte_admin.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <title>GodBox | Reportes</title>
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
                <a href="../view/reportes_cajas.php"><div class="btn__report">Reportes de Cajas</div></a>
                <a href="../view/reportes_productos.php"><div class="btn__report">Reportes de Productos</div></a>
                <a href="../view/reportes_usuarios.php"><div class="btn__report">Reportes de Usuarios</div></a>
                <a href="../view/reportes_sponsor.php"><div class="btn__report">Reportes de Patrocinadores</div></a>
                <a href="../view/reportes_monedas-registradas.php"><div class="btn__report">Reportes de Monedas</div></a>
                <a href="../view/reportes_monedas.php"><div class="btn__report">Reportes de Transaciones</div></a>
                <a href="../view/admin_page.php"><div class="btn__report"><-Volver a datos</div></a>
            </div> 
        </articles>
      </section>
      <section class="reports__container">
      <?php 
      
      ?>
          <h4 class="title">Reportes🔒</h4>
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