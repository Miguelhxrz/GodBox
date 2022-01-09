<?php 

require_once('../model/connect_db.php');

class credit_card {

  private $id;
  private $type;
  private $num;
  private $expiration_date;
  private $cvv;

  #database
  private $data_base;

  #constructor
  function credit_card() {

    $this->data_base=new connect_db();
  }

  #--Set--

  function setID($id) {
    $this->id = $id;
  }

  function setType($type) {
    $this->type = $type;
  }

  function setNum($num) {
    $this->num = $num;
  }

  function setExpiration_date($date) {
    $this->expiration_date = $date;
  }

  function setCvv($cvv) {
    $this->cvv = $cvv;
  }

  #data base functions

  function addDataBase() {

    $query_send = "INSERT INTO `payment`(`id`, `type`, `number`, `expiration date`, `cvv`) VALUES ('".$this->id."','".$this->type."','".$this->num."','".$this->expiration_date."','".$this->cvv."')";
  
    $question = $this->data_base->add_instruc($query_send);

    if(isset($question)){
      return 1;
    }else {
      return 0;
    }
  
  }

  function GetCCbyid($id){
    $query_send = "SELECT `id`, `type`, `number`, `expiration date`, `cvv` FROM `payment` WHERE  `id` = '$id'";

    $question = $this->data_base->add_instruc($query_send);
  
    return $question;
  }

  function UpdateCC(){
    $query_send = "UPDATE `payment` SET `id` = '$this->id' ,`type` = '$this->type' , `number`= '$this->num', `expiration date` = '$this->expiration_date', `cvv` = '$this->cvv' WHERE  `id` = '$this->id'";

    $question = $this->data_base->add_instruc($query_send);
  
    return $question;
  }

}


?>