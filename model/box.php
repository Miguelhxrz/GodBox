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
  private $fecha;

  #database
  private $data_base;

  #constructor
  function __construct() {

    $this->data_base=new connect_db();
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
  
  function setObjects($items) {
    $this->objects = $items;
  }
  
  function setFechaRegistro($fecha){
    $this->fecha = $fecha;
  }


  #data base functions

  function addDataBase() {

    $query_send = "INSERT INTO `box`(`id`, `name`, `price`, `stock`, `sponsor`, `category`, `rank`, `objects`, `img`, `fecha de registro`) VALUES ('".$this->id."','".$this->name."','".$this->price."','".$this->stock."','".$this->sponsor."','".$this->category."','".$this->rank."','".$this->objects."','".$this->image."','".$this->fecha."')";
  
    $question = $this->data_base->add_instruc($query_send);

    if(isset($question)){
      return 1;
    }else {
      return 0;
    }
  
  }

  function ShowBoxes(){
    
    $query_send = "SELECT `id` , `name` , `price` , `stock` , `sponsor` , `category` , `rank` , `objects`, `img` FROM `box`";
        
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