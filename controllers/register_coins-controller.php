<?php 

  require('../model/coins.php');

  $coins = new coins();

  if(isset($_POST['coin_register'])) {
  
    $coin_id = $_POST['coin_id'];
    $coin_quantity = intval($_POST['coin_amount']);
    $coin_price = intval($_POST['coin_price']);

    $coins->setID($coin_id);
    $coins->setQuantity($coin_quantity);
    $coins->setPrice($coin_price);

    $coins->addDataBase();
  }





?>