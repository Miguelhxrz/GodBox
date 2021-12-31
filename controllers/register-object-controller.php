<?php
  require_once('../model/object.php');

  $errores = array();

  #patrones
  $PatronUsuario = "/^[a-zA-Z0-9\s-]+$/";
  $PatronCantidad = "/^[0-9]+$/";
  $PatronPrecio = "/^[0-9].+$/";
  $PatronID = "/^[A-Z]+$/";

  $item =  new object_();
  
  #variables
  $object_register = $_POST['object_register'];
  $object_id = $_POST['object_id'];
  $object_name = $_POST['object_name'];
  $object_stock = $_POST['object_stock'];
  $object_price = $_POST['object_price'];
  $object_sponsor = $_POST['object_sponsor'];
  $object_rank = $_POST['object_rank'];
  $object_category = $_POST['object_category'];
  $object_img = $_FILES['object_image'];

  #datos de la imagen
  $object_img_name = $_FILES['object_image']['name']; #nombre del archivo.
  $object_img_type = $_FILES['object_image']['type']; #typo del archivo.
  $object_img_size = $_FILES['object_image']['size']; #tamaño del archivo.
  $object_img_temp = $_FILES['object_image']['tmp_name']; #contiene la direccion temporal del archivo.

  if (isset($object_register)) {
    
    #validacion de id
    if (isset($object_id)) {
      if (empty($object_id)) {
        array_push($errores, "Error 055: El ID no puede estar vacio.");
      }else
      if (strlen($object_id) < 4) {
        array_push($errores, "Error 056:El ID debe tener un tamaño mayor a 4 letras.");
      }else
      if (!preg_match($PatronID, $object_id)) {
        array_push($errores, "Error 057: El ID no debe llevar caracteres especial.");
      }
    } else {
      array_push($errores, "Error 058: El ID no existe.");
    }

    #Validacion de name
    if (isset($object_name)) {
      if (empty($object_name)) {
        array_push($errores, "Error 059: El Nombre no puede estar vacio.");
      }else
      if (strlen($object_name) < 3) {
        array_push($errores, "Error 060:El Nombre debe tener un tamaño mayor a 3 letras.");
      }else
      if (!preg_match($PatronUsuario, $object_name)) {
        array_push($errores, "Error 061: El Nombre no debe llevar caracteres especial.");
      }
    } else {
      array_push($errores, "Error 062: El Nombre no existe.");
    }

    #validacion de cantidad
    if (isset($object_stock)) {
      if (empty($object_stock) || $object_stock == '0') {
        array_push($errores, "Error 063: La cantidad no puede estar vacia.");
      }else
      if (!preg_match($PatronCantidad, $object_stock)) {
        array_push($errores, "Error 064: La cantidad solo admite numeros.");
      } 
      } else {
      array_push($errores, "Error 065: La cantidad no existe.");
    }

    #validacion de precio
    if (isset($object_price)) {
      if (empty($object_price)) {
        array_push($errores, "Error 066: El precio no puede estar vacio.");
      }else
      if (strlen($object_price) < 0) {
        array_push($errores, "Error 067:El precio debe ser mayor o igual a 0.");
      }else
      if (!preg_match($PatronPrecio, $object_price)) {
        array_push($errores, "Error 068: El precio solo admite numeros, y punto.");
      }
    }else {
      array_push($errores, "Error 069: El precio  no existe.");
    }

    #validacion de Rank
    if (isset($object_rank)) {
      if (empty($object_rank)) {
        array_push($errores, "Error 070: Se debe elegir un rango para el objeto.");
      }
    } else {
      array_push($errores, "Error 071: No se ha seleccionado un rango.");
    }

    #validacion de Sponsor
    if (isset($object_sponsor)) {
      if (empty($object_sponsor)) {
        array_push($errores, "Error 072: Debes seleccionar un patrocinador para el objeto.");
      }
    } else {
      array_push($errores, "Error 073: No se ha seleccionado un patrocinado.");
    }

    #validacion de Category
    if (isset($object_category)) {
      if (empty($object_category)) {
        array_push($errores, "Error 074: Debes elegir una categorya para el objeto.");
      }
    } else {
      array_push($errores, "Error 075: No se ha seleccionado una categoria para el objeto.");
    }

    #validacion de la imagen
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
      echo "</div>";

    } else {
      echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";
      
      #creando la ruta para la imagen
      $folder = "../public/items/";

      $origin = $folder.$object_img_name; #../public/items/img_name.png

      #moviendo la imagen a la carpeta
      $move = move_uploaded_file($object_img_temp, $origin);

      $price_int = intval($object_price);

      $item->setID($object_id);
      $item->setName($object_name);
      $item->setStock($object_stock);
      $item->setPrice($price_int);
      $item->setSponsor($object_sponsor);
      $item->setRank($object_rank);
      $item->setCategory($object_category);

      $item->setImage($origin);



      $result = $item->addDataBase();
      
      header("location: ../index.php");
    }
  
  }

















?>