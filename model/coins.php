<?php 

require_once('../model/connect_db.php');

class coins {

  private $id;
  private $quantity;
  private $price;
  private $img = "../public/coin/monedas.png";

  #database
  private $data_base;

  #constructor
  function coins() {

    $this->data_base=new connect_db;
    $this->data_base->connect();
  }

  #--Set--

  function setID($id) {
    $this->id = $id;
  }

  function setQuantity($q) {
    $this->quantity = $q;
  }

  function setPrice($p) {
    $this->price = $p;
  }

  function getImg() {
    return $this->img;
  }

  #data base functions

  function addDataBase() {

    $query_send = "INSERT INTO `coins`(`ID`, `quantity`, `price`, `image`) VALUES ('".$this->id."','".$this->quantity."','".$this->price."','".$this->img."')";
  
    $question = $this->data_base->add_instruc($query_send);

    if(isset($question)){
      return 1;
    }else {
      return 0;
    }
  
  }

  function getId($q) {
    $query_send = "SELECT `id` FROM `coins` WHERE `quantity` = '".$q."'";
  
    $question = $this->data_base->add_instruc($query_send);

    $result = array();

    if(mysqli_num_rows($question) > 0){
        while($rows = mysqli_fetch_array($question)){
          array_push($result, $rows);
        }
        return $result;
      }else {
       return 0;
      }
  }

  function getQuantity_and_Price($id) {
    $query_send = "SELECT `quantity`, `price` FROM `coins` WHERE `id` = '".$id."'";
  
    $question = $this->data_base->add_instruc($query_send);

    $result = array();

    if(mysqli_num_rows($question) > 0){
        while($rows = mysqli_fetch_array($question)){
          array_push($result, $rows);
        }
        return $result;
      }else {
       return 0;
    }
  }

  function showCoins() {
    $query_send = "SELECT * FROM `coins`";
  
    $question = $this->data_base->add_instruc($query_send);

    $result = array();

    if(mysqli_num_rows($question) > 0){
        while($rows = mysqli_fetch_array($question)){
          array_push($result, $rows);
        }
        return $result;
      }else {
       return 0;
      }
      
  }

}














?>