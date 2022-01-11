<?php
require_once('../model/sponsor.php');

$sponsor = new sponsor();

$patron_id = "/^(V|E|v|e|J|P|G|j|p|g|R|r)-[0-9]+$/";
$patron_email = "/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/";
$patron_name = "/^[a-zA-Z0-9\s-]+$/";

$errores = array();

error_reporting(0);

$sponsor_name = $_POST['name_input'];
$rif = $_POST['rif_input'];
$email = $_POST['email_input'];
$img = $_FILES['imagen_input'];
$register = $_POST['register'];

#Tomando datos de la imagen
$img_name = $_FILES['imagen_input']['name']; #nombre del archivo.
$img_type = $_FILES['imagen_input']['type']; #typo del archivo.
$img_size = $_FILES['imagen_input']['size']; #tamaño del archivo.
$img_temp = $_FILES['imagen_input']['tmp_name']; #contiene la direccion temporal del archivo.

if (isset($register)) {

  #validacion name
  if (isset($sponsor_name)) {
    if (empty($sponsor_name)) {
      array_push($errores, "Error 038: El Nombre no puede estar vacio.");
    }
    if (strlen($sponsor_name) < 3) {
      array_push($errores, "Error 039:El Nombre debe tener un tamaño mayor a 3 letras.");
    }
    if (!preg_match($patron_name, $sponsor_name)) {
      array_push($errores, "Error 040: El Nombre no puede contener caracteres especiales.");
    }
    #validacion db
    if ($sponsor->searchName($sponsor_name) > 0) {
      array_push($errores, "Error 041: El Nombre ya existe, ingrese otro.");
    }
  } else {
    array_push($errores, "Error 042: El Nombre no existe.");
  }

  #validacion de rif
  if (isset($rif)) {
    if (empty($rif)) {
      array_push($errores, "Error 043: El Rif no puede estar vacio.");
    }
    if (strlen($rif) < 3) {
      array_push($errores, "Error 044:El Rif debe tener un tamaño mayor a 3 letras.");
    }
    if (!preg_match($patron_id, $rif)) {
      array_push($errores, "Error 045: El Rif debe ser de esta manera: V,E,R,J,P ó G-12345678.");
    }
    #validacion db
    if ($sponsor->searchRif($rif) > 0) {
      array_push($errores, "Error 046: El rif ya esta registrado, ingrese otro.");
    }
  } else {
    array_push($errores, "Error 047: El Rif no existe.");
  }

  #validacion email
  if (isset($email)) {
    if (empty($email)) {
      array_push($errores, "Error 048: El Correo no puede estar vacio.");
    }
    if (strlen($email) < 15) {
      array_push($errores, "Error 049:El Correo debe tener un tamaño mayor a 15 letras.");
    }
    if (!preg_match($patron_email, $email)) {
      array_push($errores, "Error 0050: Dato invalido al escribir el correo.");
    }
    #validacion db
    if ($sponsor->searchEmail($email) > 0) {
      array_push($errores, "Error 051: El email ya esta registrado, ingrese otro.");
    }
  } else {
    array_push($errores, "Error 052: El Nombre no existe.");
  }
  if (isset($img_name)) {
    if (empty($img_name)) {
      array_push($errores, "Error 076: Debes insertar la imagen del objeto.");
    }
  }
  #validacion de bd 

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
    $folder = "../public/sponsor/";

    $origin = $folder . $img_name; #../public/sponsor/img_name.png

    #moviendo la imagen a la carpeta
    $move = move_uploaded_file($img_temp, $origin);

    date_default_timezone_set('America/Caracas');
    $fecha = date("d/m/Y");

    $sponsor->setName($sponsor_name);
    $sponsor->setRif($rif);
    $sponsor->setEmail($email);
    $sponsor->setImagen($origin);
    $sponsor->setFechaRegistro($fecha);

    $sponsor->addDataBase();
  }
}
