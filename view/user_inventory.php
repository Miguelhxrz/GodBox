<?php 
require_once('../controllers/header-controller.php');
require_once('../model/user.php');
require_once('../controllers/user-inventory-controller.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/productos_user.css">
  <script src="../scripts/user_inventory.js"></script>
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <title>GodBox | Mis Productos</title>
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
                <img src="../assets/icons/user-profile.png" alt="" title="">
              </figure>
              <h4 class="title"><?php echo $row['username']; endwhile?></h4>
            </div>
            <div class="select__reports">
                <a href="../view/user_page.php"><div class="btn__report">Datos </div></a>
                <a href="../view/transaciones_user.php"><div class="btn__report">Mis Transaciones</div></a>
                <a href="../view/user_inventory.php"><div class="btn__report">Mis Productos</div></a>
                <a href="../view/buy_coins.php"><div class="btn__report">Comprar Monedas</div></a>
        </articles>
      </section>
      <section class="reports__container">
          <h4 class="title">Mis Productos🔒</h4>
          <div class="put__reports">
             <?php
             #impide que se imprima uno en blanco y limpia el inventario
              for ($i=0; $i < count($items_img) ; $i++) { 
                if($items_img[$i] == 0 || $items_img[$i] == ' ' || $items_img[$i] == '-'){
                  
                  $array_send = $user->getObjects_inventory($user_id); #trae el inventario del usuario

                  $string_objects = $array_send[0]['objects'];

                  $inventory_reformed = substr($string_objects,1);

                  $user->update_objects($user_id,$inventory_reformed);
                  
                }else {
                  $i = 0;
                    while($i < count($items_img)){
                      $k = 0;
                      echo 
                        "<div class='objects__container'>
                            <img src='".$items_img[$i]['image']."'>
                          <form class='hidden options_form' action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='POST' id='selects_items'>
                            <input type='hidden' name='id_object'  value='".$id_items[$i]."'>
                            <input type='hidden' class='rank'  value='".$item_rank[$i][$k]['rank']."'>
                            <input type='submit' name='vender_btn' value='Vender' class='modal__btn'>
                            <input type='submit' name='enviar_btn' class='modal__btn' value='Enviar'>
                          </form>
                        </div>";
                      $i++;
                  }
                }
              }  
            
            ?>
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