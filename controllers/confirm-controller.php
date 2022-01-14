<?php
  require_once('../model/user.php');
  require_once('../model/coins.php');
  require_once('../model/transaciones.php');
  error_reporting(0);

  session_start();

  $coin = new coins();
  $user = new user();
  $transaciones = new transaciones();

  #Fecha
  date_default_timezone_set('America/Caracas');
  
  $dia = date('d');
  $mes = date('m');
  $anio = date('Y');

  $username = $_SESSION['user'];

  $get = $user->GetByUsername($username);

  while($row = mysqli_fetch_array($get)){
    $userid = $row['id'];
  }

  $coin_id =  $_POST['coin_id']; #recibe el id de las monedas para hacer que se muestre la factura.

  $getprice_quantity = $coin->getQuantity_and_Price($coin_id);

  $coin_quantity = $getprice_quantity[0]['quantity'];

  $coin_buy = intval($coin_quantity);

  $price = $getprice_quantity[0]['price'];

  $coin_price = intval($price);

  $fecha = date('d/m/Y');

  $buy_coins = intval($_POST['new_coins']);

  $buy_price = intval($_POST['price']);

  $buy_id = ($_POST['id']);

  $acept_btn = $_POST['accept_btn'];

  $continue_btn = $_POST['continue_btn'];


  
  if(isset($acept_btn)){
    
    $result = $user->buyCoins($buy_coins, $username);

    if(isset($result)){
      $transaciones->setIDusuario($userid);
      $transaciones->setIDmonedas($buy_id);
      $transaciones->setQuantity($buy_coins);
      $transaciones->setPrice($buy_price);
      $transaciones->SetFecha($fecha);
      $result = $transaciones->addDataBase();
    }

    header("location: ../view/buy_coins.php");
  }
  if(isset($continue_btn)) {
    $result = $user->buyCoins($buy_coins, $username);

    if(isset($result)){
      $transaciones->setIDusuario($userid);
      $transaciones->setIDmonedas($buy_id);
      $transaciones->setQuantity($buy_coins);
      $transaciones->setPrice($buy_price);
      $transaciones->SetFecha($fecha);
      $result = $transaciones->addDataBase();
    }

    header("location: ../index.php");
   
  }
    
?>
