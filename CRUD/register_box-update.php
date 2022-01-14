<?php
require_once('../controllers/header-controller.php');
require_once('../model/sponsor.php');
require_once('../model/box.php');


session_start();

$errores = array();

$PatronUsuario = "/^[a-zA-Z0-9\s-]+$/";
$PatronCodigo = "/^[A-Z0-9-]+$/";
$PatronPrice = "/^[0-9]+([,.][0-9]+)?$/";

error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/register_box.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <script src="../scripts/helper.js"></script>
  <title>GodBox - Editar Cajas</title>
</head>

<body>
  <!-- Header -->
  <?php include($header); ?>

  <main class="container">
    <section class="container-form">

      <div class="title-form">
        <h5>Register Box</h5>
      </div>
      <?php
      $id = $_POST['id'];
      $box = new box;

      $question = $box->getById($id);
      while ($row = mysqli_fetch_array($question)) {
      ?>
        <form action="" class="form-register" name="form-register" method="POST" enctype="multipart/form-data">

          <div class="conta">

            <section class="l-q">

                <input type="hidden" placeholder="ID de la caja" size="12" maxlength="8" name="box_id" value="<?php echo $row['id'] ?>">

              <label for="box_name" class="label-name">
                Nombre
                <input type="text" placeholder="Nombre de la caja" size="45" maxlength="45" name="box_name" value="<?php echo $row['name'] ?>">
              </label>

              <label for="box_price" class="label-price">
                Precio
                <input type="text" placeholder="Precio de la caja" size="45" maxlength="45" name="box_price" value="<?php echo $row['price'] ?>"onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
              </label>

              <label for="box_stock" class="label-price">
                Cantidad
                <input type="text" placeholder="Cantidad de la caja" size="45" maxlength="45" name="box_stock" value="<?php echo $row['stock'] ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
              </label>

            </section>

            <div class="line"></div>

            <section class="r-q">

              <label for="box_sponsor" class="label-category">
                Sponsor
                <select name="box_sponsor" id="box_sponsor">
                <?php 
 
                 require_once('../model/sponsor.php');

                  $sponsor = new sponsor;

                  $showSponsors = $sponsor->showSponsors(); ?>      

                  <option value="">Seleccionar</option>
                    <?php  for($i = 0; $i < count($showSponsors); $i++) {
                   echo "<option value='".$showSponsors[$i]['name']."'>".$showSponsors[$i]['name']."</option>";
                }?>
                </select>
              </label>

              <label for="box_category" class="label-category">
                Categoria
                <select name="box_category" id="box_category">
                  <option value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>
                  <option value="Tecnologia">Tecnologia</option>
                  <option value="Accesorios">Accesorios</option>
                  <option value="Ropa">Ropa</option>
                  <option value="variado">Variado</option>
                </select>
              </label>

              <label for="box_rank" class="label-rank">
                Rango
                <select name="box_rank" id="box_rank">
                  <option value="<?php echo $row['rank'] ?>"><?php echo $row['rank'] ?></option>
                  <option value="Dios">Dios</option>
                  <option value="SemiDios">SemiDios</option>
                  <option value="Olimpica">Olimpica</option>
                  <option value="Heroe">Heroe</option>
                </select>
              </label>

              <div for="box_objetos" class="choose-objects">
                <p>Objetos:</p>
                <a href="#">Escoger objetos</a>
              </div>

              <br>

              <label for="box_image" class="label-img">
                <p>Agregar imagen</p>
                <input type="file" name="box_image" accept="image/png,image/jpeg" id="box_image" value="<?php $row['img'] ?>">
              </label>

            </section>

          </div>
          <input type="submit" class="btn" name="box_register" value="Editar"></input>

        <?php }
      $box = new box();

      $errores = array();

      $PatronUsuario = "/^[a-zA-Z0-9\s-]+$/";
      $PatronCantidad = "/^[0-9]+$/";
      $PatronPrecio = "/^[0-9].+$/";
      $PatronID = "/^[A-Z]+$/";

      #variables
      $box_register = $_POST['box_register'];
      $box_id = $_POST['box_id'];
      $box_name = $_POST['box_name'];
      $box_price = $_POST['box_price'];
      $box_stock = $_POST['box_stock'];
      $box_sponsor = $_POST['box_sponsor'];
      $box_category = $_POST['box_category'];
      $box_rank = $_POST['box_rank'];
      // $box_objects = $_POST['box_objects'];
      $box_img = $_FILES['box_image'];

      #datos de la imagen
      $box_img_name = $_FILES['box_image']['name']; #nombre del archivo.
      $box_img_type = $_FILES['box_image']['type']; #typo del archivo.
      $box_img_size = $_FILES['box_image']['size']; #tamaño del archivo.
      $box_img_temp = $_FILES['box_image']['tmp_name']; #contiene la direccion temporal del archbox

      if (isset($box_register)) {

        #validacion del ID
        if (isset($box_id)) {
          if (empty($box_id)) {
            array_push($errores, "Error 055: El ID no puede estar vacio.");
          } else
      if (strlen($box_id) < 4) {
            array_push($errores, "Error 056:El ID debe tener un tamaño mayor a 4 letras.");
          } else
      if (!preg_match($PatronID, $box_id)) {
            array_push($errores, "Error 057: El ID no debe llevar caracteres especial.");
          }
        } else {
          array_push($errores, "Error 058: El ID no existe.");
        }

        #Validacion de name
        if (isset($box_name)) {
          if (empty($box_name)) {
            array_push($errores, "Error 059: El Nombre no puede estar vacio.");
          } else
      if (strlen($box_name) < 3) {
            array_push($errores, "Error 060:El Nombre debe tener un tamaño mayor a 3 letras.");
          } else
      if (!preg_match($PatronUsuario, $box_name)) {
            array_push($errores, "Error 061: El Nombre no debe llevar caracteres especial.");
          }
        } else {
          array_push($errores, "Error 062: El Nombre no existe.");
        }

        #validacion de precio
        if (isset($box_price)) {
          if (empty($box_price)) {
            array_push($errores, "Error 066: El precio no puede estar vacio.");
          } else
      if (strlen($box_price) < 0) {
            array_push($errores, "Error 067:El precio debe ser mayor o igual a 0.");
          } else
      if (!preg_match($PatronPrecio, $box_price)) {
            array_push($errores, "Error 068: El precio solo admite numeros, y punto.");
          }
        } else {
          array_push($errores, "Error 069: El precio  no existe.");
        }

        #validacion de Sponsor
        if (isset($box_sponsor)) {
          if (empty($box_sponsor)) {
            array_push($errores, "Error 072: Debes seleccionar un patrocinador para el objeto.");
          }
        } else {
          array_push($errores, "Error 073: No se ha seleccionado un patrocinado.");
        }

        #validacion de Category
        if (isset($box_category)) {
          if (empty($box_category)) {
            array_push($errores, "Error 074: Debes elegir una categoria para el objeto.");
          }
        } else {
          array_push($errores, "Error 075: No se ha seleccionado una categoria para el objeto.");
        }

        #validacion de Rank
        if (isset($box_rank)) {
          if (empty($box_rank)) {
            array_push($errores, "Error 070: Se debe elegir un rango para el objeto.");
          }
        } else {
          array_push($errores, "Error 071: No se ha seleccionado un rango.");
        }

        #Falta la validacion de objetos

        #Validacion de imagen
        if (isset($box_img_name)) {
          if (empty($box_img_name)) {
            array_push($errores, "Error 076: Debes insertar la imagen del objeto.");
          }
        }

        #Errores
        if (count($errores) > 0) {
          echo "<div class='error'>
    <h3>Errores al Editar La Caja</h3>";
          for ($i = 0; $i < count($errores); $i++) {
            echo "<li>" . $errores[$i] . "</li>";
          }
          echo "</div>
    <a class='volver-inven' href='../view/Inventory.php'> <- Volver a inventario</a>
    ";
        } else {

          echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";

          #creando la ruta para la imagen
          $folder = "../public/box/";

          $origin = $folder . $box_img_name; #../public/items/img_name.png

          #moviendo la imagen a la carpeta
          $move = move_uploaded_file($box_img_temp, $origin);

          $price_int = intval($box_price);
          $stock_int = intval($box_stock);

          date_default_timezone_set('America/Caracas');
          $fecha = date("d/m/Y");


          $box->setID($box_id);
          $box->setName($box_name);
          $box->setStock($stock_int);
          $box->setPrice($price_int);
          $box->setSponsor($box_sponsor);
          $box->setRank($box_rank);
          $box->setCategory($box_category);
          $box->setFechaRegistro($fecha);

          $box->setImage($origin);

          $result = $box->UpdateBox();
          var_dump($result);
          if ($result == true) {
            header("location: ../view/inventory.php");
          }
        }
      }
        ?>

        </form>
    </section>

    <?php


    ?>

  </main>

  <footer class="footer">
    <h3 class="footer__text">Todos los derechos reservados 2021 GodBox</h3>
    <div class="footer__social-media">
      <figure><img src="../assets/icons/twitter.png" alt="twitter"></figure>
      <figure><img src="../assets/icons/instagram.png" alt="instagram"></figure>
      <figure><img src="../assets/icons/facebook.png" alt="facebook"></figure>
    </div>
  </footer>

</body>

</html>