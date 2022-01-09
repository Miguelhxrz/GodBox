<?php 
  require_once('../model/connect_db.php');

  class object_ {
    
    private $id;
    private $name;
    private $stock;
    private $price;
    private $sponsor;
    private $rank;
    private $category;
    private $image;
    private $fecha;

    #database
    private $data_base;

    function __construct() {
      $this->data_base= new connect_db();
    }

    # ---set---

    function setID($id) {
      $this->id = $id;
    }
    
    function setName($nam) {
      $this->name = $nam;
    }

    function setStock($sto) {
      $this->stock = $sto;
    }

    function setPrice($pri) {
      $this->price = $pri;
    }

    function setSponsor($spo) {
      $this->sponsor = $spo;
    }

    function setRank($ran) {
      $this->rank = $ran;
    }

    function setCategory($cat) {
      $this->category = $cat;
    }

    function setImage($img) {
      $this->image = $img;
    }

    function setFechaRegistro($fecha){
      $this->fecha = $fecha;
    }


    function getName() {
      return $this->name;
    }

    function getImage() {
      return $this->image;
    }

    # data base functions

    function addDataBase() {

      $query_send = "INSERT INTO `objects`(`id`, `name`, `stock`, `price`, `sponsor`, `rank`, `category`, `image`, `fecha de registro`) VALUES ('".$this->id."','".$this->name."','".$this->stock."','".$this->price."','".$this->sponsor."','".$this->rank."','".$this->category."','".$this->image."','".$this->fecha."')";
    
      $question = $this->data_base->add_instruc($query_send);

      if(isset($question)){
        return 1;
      }else {
        return 0;
      }
    
    }

    function ShowObjects(){

      $query_send = "SELECT * FROM `objects`";
          
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

    function getObject_img($id) {
      $query_send = "SELECT `image` FROM `objects` WHERE `id` = '".$id."'";

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

    function getObject_db ($id) {

      $query_send = "SELECT * FROM `objects` WHERE `id` ='".$id."'";
      
      
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