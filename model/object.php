<?php 
  require('../model/connect_db.php');

  class object_ {

    private $name;
    private $stock;
    private $price;
    private $sponsor;
    private $rank;
    private $category;

    #database
    private $data_base;

    function object_() {
      $this->data_base= new connect_db();
    }

    # ---set---

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

    # ---get---

    function getName() {
      return $this->name;
    }

    function getStock() {
      return $this->stock;
    }

    function getPrice() {
      return $this->price;
    }

    function getSponsor() {
      return $this->sponsor;
    }

    function getRank() {
      return $this->rank;
    }

    function getCategory($cat) {
      $this->category = $cat;
    }

    # data base functions

    function addDataBase() {
      
      $query_send = "INSERT INTO `objects` (`name`, `stock`, `price`, `sponsor`, `rank`,`category`) VALUES ('".$this->username."','".$this->password."','".$this->id."','".$this->email."','".$this->address."','".$this->birth."')";
  
      $question = $this->data_base->add_instruc($query_send);

      if($question == false){
        echo "Error: ". $this->data_base->error;
      }else {
        return 1;
      }

  }






  }











?>