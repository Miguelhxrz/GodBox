<?php 
require_once('../controllers/header-controller.php');
require_once('../model/user.php');
require_once('../model/credit_card.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/user_page.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <title>GodBox | Datos</title>
</head>

<body>
       <!-- Header -->
       <?php include($header); 
       $user = new user;
       $question = $user->GetByUsername($_SESSION['user']); 
       var_dump($_SESSION['user']);
       while ($row = mysqli_fetch_array($question)){?>
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
                <a href="../view/user_page.php"><div class="btn__report">Datos</div></a>
                <a href="../view/transaciones_user.php"><div class="btn__report">Mis Transaciones</div></a>
                <a href="../view/user_inventory.php"><div class="btn__report">Mis Productos</div></a>
                <a href="../view/buy_coins.php"><div class="btn__report">Comprar Monedas</div></a>
                <a href="../view/card_register.php"><div class="btn__report">Agregar Tarjeta</div></a>
            </div> 
        </articles>
      </section>
      <section class="reports__container">
      <?php 
      
      ?>
          <h4 class="title">Datos🔒</h4>
          <div class="put__reports">
            <div class="essencial__crud">
              <div class="crud password">
                <h4>Contraseña:</h4> <h4 class="respuesta"><?php echo $row['password'];?></h4>
                <a href="../CRUD/update-password.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar contraseña"></a>
              </div>
              <div class="crud email">
                <h4>Correo:</h4> <h4 class="respuesta"><?php echo $row['email'];?></h4>
                <a href="../CRUD/update-email.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar correo"></a>
              </div>
            </div>
            <div class="other__crud">
              <div class="crud LilGod">
                <h4>Mis LilGod:</h4> <h4 class="respuesta"><?echo $row['coins'];?></h4> 
                <a href="../view/buy_coins.php"><img src="../assets/icons/outline_add_white_24dp.png" alt="Comprar Más" title="Comprar Más"></a>
              </div>
              <div class="crud address">
                <h4>Dirección:</h4> <h4 class="respuesta"><?php echo $row['address'];?></h4>
                <a href="../CRUD/update-address.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar direccion"></a>
              </div>
              <div class="crud credit-card">
              <h4>Tarjeta:</h4> 
              <?php
                $CC = new credit_card;
                $id = $row['id'];
                $question = $CC->GetCCbyid($id);
                while ($fila = mysqli_fetch_array($question)){?>
                <h4 class="respuesta"><?php echo $fila['number'];?></h4> 
                <?php }?>
                <form action="../CRUD/update-card_register.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $row['id']?>">
                  <button type="submit" class ="boton-submit">
                  <a href=""><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar address"></a>
                  </button>
                </form>
              </div>
              
              <?php };?>
            </div>
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