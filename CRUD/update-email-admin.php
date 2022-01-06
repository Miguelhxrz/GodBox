<?php 
require_once('../controllers/header-controller.php');
require_once('../model/user.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin_page.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <title>GodBox | Editar-Correo</title>
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
              <h4 class="title"><?php echo $_SESSION['user']?></h4>
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
      <?php 
      
      ?>
          <h4 class="title">Datos🔒</h4>
          <div class="put__reports">
            <div class="essencial__crud">
              <div class="crud username">
                <h4>Usuario:</h4> <h4 class="respuesta"><?php echo $row["username"];?></h4>
              </div>
              
              <div class="crud password">
                <h4>Contraseña:</h4> <h4 class="respuesta"><?php echo $row["password"];?></h4>
                <a href="../CRUD/update-password-admin.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar contraseña"></a>
              </div>
              
              <div class="crud email">
              <h4>Correo:</h4>
                <form method="POST">
                  <input type="text" name="email" value="<?php echo $row["email"];?>" maxlength="45" size="45">
                  <input type="submit" class="btn-edit" name="btn-edit" value="Editar">
                  <a href="../view/admin_page.php" class="volver">Volver</a>
              </form>
              <?php 
                  $email = $_POST['email'];
                  $submit = $_POST['btn-edit'];
                  if (isset($submit)){
                      $sesion = $_SESSION['user'];
                      $update = $user->UpdateEmail($email,$sesion);
                      if (isset($update)){
                        echo "<meta http-equiv='refresh' content='0'>";
                      }
                  }
              ?>
              </div>
            </div>
            <div class="other__crud">
              <div class="crud LilGod">
                <h4>Mis LilGod:</h4> <h4 class="respuesta"><?echo $row["coins"];?></h4> 
                <a href="../view/buy_coins.php"><img src="../assets/icons/outline_add_white_24dp.png" alt="Comprar Más" title="Comprar Más"></a>
              </div>
              <div class="crud address">
                <h4>Dirección:</h4> <h4 class="respuesta"><?php echo $row["address"];?></h4>
                <a href="../CRUD/update-address-admin.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar direccion"></a>
              </div>
              <div class="crud credit-card">
                <h4>tarjeta:</h4> <h4 class="respuesta">xxxxx-xxxx-xxxx</h4> 
                <a href=""><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar tarjeta"></a>
              </div>
              
              <?php endwhile ?>
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