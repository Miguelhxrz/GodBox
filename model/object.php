<?php 
  require('../model/connect_db.php');

  class object_ {
    
    private $id;
    private $name;
    private $stock;
    private $price;
    private $sponsor;
    private $rank;
    private $category;
    private $image;

    #database
    private $data_base;

    function object_() {
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

    function getName() {
      return $this->name;
    }

    function getImage() {
      return $this->image;
    }

    # data base functions

    function addDataBase() {
      
      $query_send = "INSERT INTO `objects`(`id`, `name`, `stock`, `price`, `sponsor`, `rank`, `category`, `image`) VALUES (". $this->id."','".$this->name."','".$this->stock."','".$this->price."','".$this->sponsor."','".$this->rank."','".$this->category."','".$this->image."')";
  
      $question = $this->data_base->add_instruc($query_send);

      if($question == false){
        return 0;
      }else {
        return 1;
      }

  }






  }











?>