<?php
require_once('../model/connect_db.php');

class transaciones {

  private $idusuario;
  private $idmonedas;
  private $quantity;
  private $price;
  private $fecha;

  #database
  private $data_base;

  #constructor
  function transaciones() {
    $this->data_base=new connect_db();
  }

  #--Set--

  function setIDusuario($idusuario) {
    $this->idusuario = $idusuario;
  }

  function setIDmonedas($idmonedas) {
    $this->idmonedas = $idmonedas;
  }

  function setQuantity($q) {
    $this->quantity = $q;
  }

  function setPrice($p) {
    $this->price = $p;
  }

  function SetFecha($fecha) {
    $this->fecha = $fecha;
  }

  #data base functions

  function addDataBase() {

    $query_send = "INSERT INTO `transaciones`(`idusuario`,`idmonedas`, `quantity`, `price`, `fecha de compra`) VALUES ('".$this->idusuario."','".$this->idmonedas."','".$this->quantity."','".$this->price."','".$this->fecha."')";
  
    $question = $this->data_base->add_instruc($query_send);

    if($question == false){
      return 1;
    }else {
      return 0;
    }
  
  }

  function ShowTransaciones(){
        
    $query_send = "SELECT * FROM `transaciones`ORDER BY `fecha de compra` DESC";

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

function GetById($id){
        
  $query_send = "SELECT * FROM `transaciones` WHERE `idusuario` = '$id'";

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