<?php 
require('../model/coins.php');

$PatronCantidad = "/^[0-9]+$/";
$PatronPrecio = "/^[0-9].+$/";
$PatronID = "/^[A-Z]+$/";
$errores= array();
date_default_timezone_set('America/Caracas');
$fecha = date("d/m/Y");

  $coins = new coins();

  if(isset($_POST['coin_register'])){
    $coin_id = $_POST['coin_id'];
    #validacion del ID

    if (empty($coin_id)) {
      array_push($errores, "Error 055: El ID no puede estar vacio.");
    } else
      if (strlen($coin_id) < 4) {
      array_push($errores, "Error 056:El ID debe tener un tamaño mayor a 4 letras.");
    } else
      if (!preg_match($PatronID, $coin_id)) {
      array_push($errores, "Error 057: El ID no debe llevar caracteres especial.");
    }
    $coin_price = intval($_POST['coin_price']);
    #validacion de precio
  if (isset($coin_price)) {
    if (empty($coin_price)) {
      array_push($errores, "Error 066: El precio no puede estar vacio.");
    } else
      if (strlen($coin_price) < 0) {
      array_push($errores, "Error 067:El precio debe ser mayor o igual a 0.");
    } else
      if (!preg_match($PatronPrecio, $coin_price)) {
      array_push($errores, "Error 068: El precio solo admite numeros, y punto.");
    }
  } else {
    array_push($errores, "Error 069: El precio  no existe.");
  }

  $coin_quantity = intval($_POST['coin_amount']);

  #Imprimiendo alertas
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

  
    $coins->setID($coin_id);
    $coins->setQuantity($coin_quantity);
    $coins->setPrice($coin_price);
    $coins->setFecha($fecha);
  
    $coins->addDataBase();
  
   echo "<script> window.location.href = '../view/buy_coins.php'</script>";
  }
}
  

?>