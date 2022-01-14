<?php
  require_once('../model/user.php');
  require_once('../model/coins.php');

  $coin = new coins();

  $user = new user();

  $username = $_SESSION['user'];

  $show = $coin->showCoins(); #muestra los coin en la pagina de buy_coins.

  
?>