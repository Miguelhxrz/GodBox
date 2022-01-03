<?php
  require('../model/user.php');
  
  $user = new user();
  
  session_start();
  
  $username = $_SESSION['user'];
  $coins = $user->getCoinsdb($username); 
  $user_coins = intval($coins);
  $buy_btn = $_POST['buy_btn'];
  $lilGods_buy = $_POST['monedas'];
  $price = $_POST['price'];

?>