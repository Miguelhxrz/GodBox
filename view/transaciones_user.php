<?php 
require('../controllers/reports_page-controller.php');
require_once('../controllers/header-controller.php');
require_once('../model/transaciones.php');
require_once('../model/user.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/transaciones_user.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <title>GodBox | Mis Transaciones</title>
</head>

<body>
       <!-- Header -->
       <?php include($header); 
        $user = new user;
       $question = $user->GetByUsername($_SESSION['user']);
       while ($row = mysqli_fetch_array($question)){
         $id = $row['id'];
       }?>
     <main class="container">
        <section class="panel__container">
          <articles class="admin__container">
            <div class="admin__profile">
              <figure class="admin__ico-container">
                <img src="../assets/icons/user-profile.png" alt="" title="">
              </figure>
              <h4 class="title"><?php echo $_SESSION['user']?></h4>
            </div>
            <div class="select__reports">
                <a href="../view/user_page.php"><div class="btn__report">Datos </div></a>
                <a href="../view/transaciones_user.php"><div class="btn__report">Mis Transaciones</div></a>
                <a href="../view/user_inventory.php"><div class="btn__report">Mis Productos</div></a>
                <a href="../view/buy_coins.php"><div class="btn__report">Comprar Monedas</div></a>
                <!-- <div class="btn__report">Mis productos </div>
                <div class="btn__report">Mis transacciones</div>
                <div class="btn__report">Inventario de cajas</div>
                <div class="btn__report">Inventario de productos</div>
                <div class="btn__report">Patrocinadores</div>
            </div> -->
        </articles>
      </section>
      <section class="reports__container">
          <h4 class="title">Mis Transaciones🔒</h4>
          <div class="put__reports">
            <?php 
            $transaciones = new transaciones;
            $question = $transaciones->GetById($id);
            for($i=0; $i<count($question); $i++){
            ?>
            <div class="objects__container">
              <div class="img">
                <img src="../public/coin/monedas.png" alt="">
              </div>
              <div class="info">
                <h5>Cantidad: <?php echo $question[$i]['quantity'];?></h5>
                <h5>Precio: <?php echo $question[$i]['price'];?></h5>
                <h5>Fecha de compra:</h5>
                <h5><?php echo $question[$i]['fecha de compra'];?></h5>
              </div>
            </div>
            <?php }?>
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