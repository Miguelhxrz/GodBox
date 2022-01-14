<?php 
require_once('../controllers/header-controller.php');
require_once('../model/user.php');
require_once('../controllers/user-inventory-controller.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/productos_admin.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <title>GodBox | Mis Productos - admin</title>
</head>

<body>
       <!-- Header -->
       <?php include($header);
       $user = new user;
       $question = $user->GetByUsername($_SESSION['user']);
       while ($row = mysqli_fetch_array($question)):?>
     <main class="container">
        <section class="panel__container">
          <articles class="admin__container">
            <div class="admin__profile">
              <figure class="admin__ico-container">
                <img src="../assets/icons/casco.png" alt="" title="">
              </figure>
              <h4 class="title"><?php echo $row['username']; endwhile?></h4>
            </div>
            <div class="select__reports">
                <a href="../view/admin_page.php"><div class="btn__report">Datos</div></a>
                <a href="../view/transaciones_admin.php"><div class="btn__report">Mis Transacciones</div></a>
                <a href="../view/productos_admin.php"><div class="btn__report">Mis Productos</div></a>
                <a href="../view/buy_coins.php"><div class="btn__report">Compra LilGod</div></a>
                <a href="../view/inventarios.php"><div class="btn__report">Inventarios</div></a>
                <a href="../view/registros.php"><div class="btn__report">Registros</div></a>
                <a href="../view/reportes_admin.php"><div class="btn__report">Reportes</div></a>
            </div> 
        </articles>
      </section>
      <section class="reports__container">
          <h4 class="title">Mis Productos🔒</h4>
          <div class="put__reports">
          <?php for($i = 0; $i < count($img); $i++) {
              $k = 0;
               echo 
              "<div class='objects__container'>
                <img src='".$img[$i][$k]['image']."'>
             
                <form class='hidden' action='' method='POST' class'options_form'>
                  <input type='hidden' name='object_id' value='".$id_objects_db[$i]."'>
                  <input type='submit' name='enviar_btn' value='Enviar' id='send_btn'>
                  <input type='submit' name='vender_btn' value='Vender' id='sell_btn'>
                </form>
           </div>";
             } ?>

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