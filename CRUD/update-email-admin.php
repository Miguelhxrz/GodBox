<?php
require_once('../controllers/header-controller.php');
require_once('../model/user.php');
error_reporting(0);
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
  while ($row = mysqli_fetch_array($question)) : ?>
    <main class="container">
      <section class="panel__container">
        <articles class="admin__container">
          <div class="admin__profile">
            <figure class="admin__ico-container">
              <img src="../assets/icons/casco.png" alt="" title="">
            </figure>
            <h4 class="title"><?php echo $_SESSION['user'] ?></h4>
          </div>
          <div class="select__reports">
            <a href="../view/admin_page.php">
              <div class="btn__report">Datos</div>
            </a>
            <a href="../view/transaciones_admin.php">
              <div class="btn__report">Mis Transacciones</div>
            </a>
            <a href="../view/productos_admin.php">
              <div class="btn__report">Mis Productos</div>
            </a>
            <a href="../view/buy_coins.php">
              <div class="btn__report">Compra LilGod</div>
            </a>
            <a href="../view/inventarios.php">
              <div class="btn__report">Inventarios</div>
            </a>
            <a href="../view/registros.php">
              <div class="btn__report">Registros</div>
            </a>
            <a href="../view/reportes_admin.php">
              <div class="btn__report">Reportes</div>
            </a>
          </div>
        </articles>
      </section>
      <section class="reports__container">
        <?php

        ?>
        <h4 class="title">Datos????</h4>
        <div class="put__reports">
          <div class="essencial__crud">

            <div class="crud password">
              <h4>Contrase??a:</h4>
              <h4 class="respuesta"><?php echo $row["password"]; ?></h4>
              <a href="../CRUD/update-password-admin.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar contrase??a"></a>
            </div>

            <div class="crud email">
              <h4>Correo:</h4>
              <form method="POST">
                <input type="text" name="email" value="" maxlength="45" size="45">
                <input type="submit" class="btn-edit" name="btn-edit" value="Editar">
                <a href="../view/admin_page.php" class="volver">Volver</a>
              </form>
              <?php
              $email = $_POST['email'];
              $submit = $_POST['btn-edit'];
              $patron_email = "/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/";
              $errores = array();
              if (isset($submit)) {
                if (empty($email)) {
                  array_push($errores, "Error 014: No puedes dejar el campo de email vacio.");
                }
                if (strlen($email) < 3) {
                  array_push($errores, "Error 015: El email debe tener mas de 3 caracteres.");
                }
                if (preg_match($patron_email, $email) == 0) {
                  array_push($errores, "Error 016: Verifique el campo email, puede tener un caracter no valido");
                }
                #validacion db
                if ($user->searchEmail($email) > 0) {
                  array_push($errores, "Error: 017: El email ya esta registrado");
                }
                if (count($errores) > 0) {
                  echo "<div class='error'>";
                  for ($i = 0; $i < count($errores); $i++) {
                    echo "<li>" . $errores[$i] . "</li>";
                  }
                  echo "</div>";
                } else {
                  $sesion = $_SESSION['user'];
                  $update = $user->UpdateEmail($email, $sesion);
                  if (isset($update)) {
                    echo '<meta http-equiv="refresh" content="0;url=../view/admin_page.php">';
                  }
                }
              }
              ?>
            </div>
          </div>
          <div class="other__crud">
            <div class="crud LilGod">
              <h4>Mis LilGod:</h4>
              <h4 class="respuesta"><?php  echo $row["coins"]; ?></h4>
              <a href="../view/buy_coins.php"><img src="../assets/icons/outline_add_white_24dp.png" alt="Comprar M??s" title="Comprar M??s"></a>
            </div>
            <div class="crud address">
              <h4>Direcci??n:</h4>
              <h4 class="respuesta"><?php echo $row["address"]; ?></h4>
              <a href="../CRUD/update-address-admin.php"><img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar direccion"></a>
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