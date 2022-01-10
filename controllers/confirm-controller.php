<?php
  require_once('../model/user.php');
  
  require_once('../model/coins.php');

  session_start();

  $coin = new coins();

  $user = new user();

  #Fecha
  date_default_timezone_set('America/Caracas');
  
  $dia = date('d');
  $mes = date('m');
  $anio = date('Y');

  $username = $_SESSION['user'];

  $coin_id =  $_POST['coin_id']; #recibe el id de las monedas para hacer que se muestre la factura.

  $getprice_quantity = $coin->getQuantity_and_Price($coin_id);

  $coin_quantity = $getprice_quantity[0]['quantity'];

  $coin_buy = intval($coin_quantity);
   
  $coin_price = $getprice_quantity[0]['price'];

  $search_user = $user->verifyCard($username);

  $found = 0;

  for ($i=0; $i <count($search_user) ; $i++) { 
    if($search_user[$i]['username'] == $username) {
      $found = 1;
    }
  }

  var_dump($found);

  $buy_coins = intval($_POST['new_coins']);

  $acept_btn = $_POST['accept_btn'];

  $continue_btn = $_POST['continue_btn'];

  if($found < 0) {
    echo "Debes tener una tarjeta registrada en tu perfil para poder comprar monedas";
  }else
  
  if(isset($acept_btn)){

    $sold =$user->buyCoins($buy_coins, $username);

    var_dump($sold);

    header("location: ../view/buy_coins.php");

  }
  if(isset($continue_btn)) {
    
    $sold =$user->buyCoins($buy_coins, $username);

    var_dump($sold);

    header("location: ../index.php");
   
  }
    




?>