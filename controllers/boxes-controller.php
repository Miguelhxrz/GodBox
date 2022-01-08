<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once('../model/box.php');
  require_once('../model/user.php');
    
  $box = new box();
  
  $showBoxes = $box->ShowBoxes();

  $user = new user();

  $username = $_SESSION['user'];

  $coins = $user->getCoinsdb($username);

  



?>