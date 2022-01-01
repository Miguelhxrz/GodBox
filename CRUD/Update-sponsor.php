<?php 
require_once('../model/sponsor.php');

$sponsor = new sponsor;
  $sponsor->sponsor();

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

      #creando la ruta para la imagen
      $folder = "../public/sponsor/";

      $origin = $folder.$img_name; #../public/sponsor/img_name.png

      #moviendo la imagen a la carpeta
      $move = move_uploaded_file($img_temp, $origin);
 
      $sponsor->setName($sponsor_name);
      $sponsor->setRif($rif);
      $sponsor->setEmail($email);
      $sponsor->setImagen($origin);
      
      $resu = $sponsor->updateSponsor(); 

        if($resu==true){
            header("location: ../view/sponsor.php");
        }
?>