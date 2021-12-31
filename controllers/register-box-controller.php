<?php
  require_once('../model/box.php');

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

  if(isset($box_register)) {

      #validacion del ID
      if (isset($box_id)) {
        if (empty($box_id)) {
          array_push($errores, "Error 055: El ID no puede estar vacio.");
        }else
        if (strlen($box_id) < 4) {
          array_push($errores, "Error 056:El ID debe tener un tamaño mayor a 4 letras.");
        }else
        if (!preg_match($PatronID,$box_id)) {
          array_push($errores, "Error 057: El ID no debe llevar caracteres especial.");
        }
      } else {
        array_push($errores, "Error 058: El ID no existe.");
      }

      #Validacion de name
      if (isset($box_name)) {
        if (empty($box_name)) {
          array_push($errores, "Error 059: El Nombre no puede estar vacio.");
        }else
        if (strlen($box_name) < 3) {
          array_push($errores, "Error 060:El Nombre debe tener un tamaño mayor a 3 letras.");
        }else
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
        }else
        if (strlen($box_price) < 0) {
          array_push($errores, "Error 067:El precio debe ser mayor o igual a 0.");
        }else
        if (!preg_match($PatronPrecio, $box_price)) {
          array_push($errores, "Error 068: El precio solo admite numeros, y punto.");
        }
      }else {
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
      if(isset($object_img_name)) {
        if(empty($object_img_name)) {
          array_push($errores, "Error 076: Debes insertar la imagen del objeto.");
        }
      }
    
      #Errores
      if (count($errores) > 0) {
        echo "<div class='error'>
          <figure>
            <img src='../assets/icons/close.png' alt='icon close' id='close'>
          </figure>";
          for ($i = 0; $i < count($errores); $i++) {
            echo "<li>" . $errores[$i] . "</li>";
          }
          echo $age;
          echo "</div>";
        } else {

          echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";
      
          #creando la ruta para la imagen
          $folder = "../public/box/";

          $origin = $folder.$box_img_name; #../public/items/img_name.png

          #moviendo la imagen a la carpeta
          $move = move_uploaded_file($box_img_temp, $origin);

          $price_int = intval($box_price);
          $stock_int = intval($box_stock);

          $box->setID($box_id);
          $box->setName($box_name);
          $box->setStock($stock_int);
          $box->setPrice($price_int);
          $box->setSponsor($box_sponsor);
          $box->setRank($box_rank);
          $box->setCategory($box_category);

          $box->setImage($origin);

          $result = $box->addDataBase();

          var_dump($result);

        // header("location: ./index.php");
        }
    }
?>