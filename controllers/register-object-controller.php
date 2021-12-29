<?php
  require_once('../model/object.php');

  // falta el objeto de object.

  error_reporting(0);

  $errores = array();

  #patrones
  $patronUsuario = "/^[a-zA-Z0-9\s-]+$/";
  $patronCantidad = "/^[0-9]+$/";
  $patronPrecio = "/^[0-9].+$/";
  $patronID = "/^[A-Z0-9\s-]+$/";

  #btn-register
  $register = $_POST['register'];

  #variables
  $object__id = $_POST['id_object'];
  $object__name = $_POST['name'];
  $object__stock = $_POST['cantidad'];
  $object__price = $_POST['price'];
  $object__rank = $_POST['rank'];
  $object__sponsor = $_POST['sponsor'];
  $object__category = $_POST['category'];
  $object__image = $_FILES['object_image'];

  #tomando datos de la imagen
  $object_image_name = $_FILES['object_image']['name']; #nombre del archivo.
  $object_image_type = $_FILES['object_image']['type']; #typo del archivo.
  $object_image_size = $_FILES['object_image']['size']; #tamaño del archivo.
  $object_image_temp = $_FILES['object_image']['tmp_name']; #contiene la direccion temporal del archivo.



  if (isset($register)) {

    #validacion del id
    if (isset($object__id)) {
      
      if (empty($object__id)) {
        array_push($errores, "Error 055: El ID no puede estar vacio.");
      }else

      if (strlen($object__id) < 3) {
        array_push($errores, "Error 056: El ID debe tener los 4 identificadores");
      }else 

      if (!preg_match($patronID,$object__id)){
        array_push($errores, "Error 057: El ID de producto solo acepta letras mayusculas.");
      }

    }
    
    #validacion del nombre
    if (isset($object__name)) {
      
      if (empty($object__name)) {
        array_push($errores, "Error 058: El Nombre no puede estar vacio.");
      }else

      if (strlen($object__name) < 3) {
        array_push($errores, "Error 059: El Nombre debe contener almenos 4 caracteres.");
      }else

      if (!preg_match($patronUsuario,$object__name)){
        array_push($errores, "Error 060: verifique el Nombre del producto, no puede contener caracteres especiales.");
      }       
    }

    #validacion de cantidad
    if (isset($object__stock)) {
      
      if (empty($object__stock)) {
        array_push($errores, "Error 061: La cantidad no puede estar vacia.");
      }else

      if (strlen($object__stock) < 0) {
        array_push($errores, "Error 062: La cantidad de objetos a registrar debe ser mayor que 0.");
      }else

      if (!preg_match($patronCantidad,$object__stock)){
        array_push($errores, "Error 063: verifique la cantidad del producto, no puede contener letras, solo numeros");
      }       
    }

    #validacion de precio
    if (isset($object__price)) {
      
      if (empty($object__price)) {
        array_push($errores, "Error 064: El Precio no puede estar vacio.");
      }else

      if (strlen($object__price) < 0) {
        array_push($errores, "Error 065: El Precio debe ser mayor que 0.");
      }else 

      if (!preg_match($patronPrecio,$object__price)){
        array_push($errores, "Error 066: verifique el Precio del producto, no puede contener letras, solo numeros");
      }       
    }

    #validacion de rango
    if (isset($object__sponsor)) {
      
      if (empty($object__sponsor)) {
        array_push($errores, "Error 067: Se debe escoger un patrocinador para el objeto.");
      }
      if ($object__sponsor == "0") {
        array_push($errores, "Error 068: El objeto debe tener un sponsor.");
      }
      // if ($object__sponsor )

    }

    #validacion de rango
    if (isset($object__rank)) {
      
      if (empty($object__rank)) {
        array_push($errores, "Error 065: Se debe escoger un rango para el objeto.");
      }

    }

    #validacion de imagen
    if (isset($object__image)) {
      
      if (empty($object__image)) {
        array_push($errores, "Error 066: Se debe escoger un rango para el objeto.");
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
      var_dump($object__sponsor);
    } else {

      header("location: ./index.html");
    }

  }

?>