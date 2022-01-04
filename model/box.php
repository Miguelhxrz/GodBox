<?php 

require_once('../model/connect_db.php');

class box {

  private $name;
  private $id;
  private $price;
  private $stock;
  private $sponsor;
  private $category;
  private $rank;
  private $objects = array();
  private $image;

  #database
  private $data_base;

  #constructor
  function box() {

    $this->data_base=new connect_db;
    $this->data_base->connect();
  }

  #--Set--

  function setName($name) {
    $this->name = $name;
  }

  function setID($id) {
    $this->id = $id;
  }

  function setPrice($price) {
    $this->price = $price;
  }

  function setSponsor($sponsor) {
    $this->sponsor = $sponsor;
  }

  function setStock($stock) {
    $this->stock = $stock;
  }

  function setCategory($cat) {
    $this->category = $cat;
  }

  function setRank($rank) {
    $this->rank = $rank;
  }

  function setImage($img) {
    $this->image = $img;
  }

  #data base functions

  function addDataBase() {

    $query_send = "INSERT INTO `box`(`id`, `name`, `price`, `stock`, `sponsor`, `category`, `rank`, `objects`, `img`) VALUES ('".$this->id."','".$this->name."','".$this->price."','".$this->stock."','".$this->sponsor."','".$this->category."','".$this->rank."','".$this->objects."','".$this->image."')";
  
    $question = $this->data_base->add_instruc($query_send);

    if(isset($question)){
      return 1;
    }else {
      return 0;
    }
  
  }

  function ShowBoxes(){
    $query_send = "SELECT `id` , `name` , `price` , `stock` , `sponsor` , `category` , `rank` , `objects`  FROM `box`";
        
    $question = $this->data_base->add_instruc($query_send);

    return $question;
  
  }


}


?>