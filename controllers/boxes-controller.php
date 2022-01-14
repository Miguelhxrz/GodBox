<?php
  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);

  require_once('../model/box.php');
  require_once('../model/user.php');
  error_reporting(0);
  
    
  $box = new box();
  
  $showBoxes = $box->ShowBoxes();

  $user = new user();

  $username = $_SESSION['user'];

  

  $user_coins = intval($user->getCoinsdb($username));

  $buy_btn = $_POST['buy_box'];

  if(isset($buy_btn)) {
    $box_id = $_POST['box_id'];
    $box_price = intval($_POST['box_price']);

    if($user_coins < $box_price) {
      echo "<script>alert('Nope')</script>";
    }else{
      header('Location: ../view/box_roulette.php');
      $sold = $user->buyBox($username,$box_price);
      
      $_SESSION['box_id'] = $box_id;
      
      $stock = $box->getStock_db($box_id);

      $stock = intval($stock[0]['stock']);


    }

  }

  



?>