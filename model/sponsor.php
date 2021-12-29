<?php 
    require('../model/connect_db.php');

  class sponsor {

    public $name;
    private $rif;
    private $email;
    private $image;
  
    #database
    private $data_base;
  
  #constructor
  function sponsor() {

    $this->data_base= new connect_db();
  
  }
    

    #--Set--

    function setName($name) {
      $this->name = $name;
    }

    function setRif($rif) {
      $this->rif = $rif;
    }

    function setEmail($correo) {
      $this->email = $correo;
    }

    function setImage($img) {
      $this->image = $img;
    }

    #--Get--

    function getName() {
      return $this->name;
    }

    function getRif() {
      return $this->rif;
    }

    function getEmail() {
      return $this->email;
    }

    function getImage() {
      return $this->image;
    }

    #Data base functions for sponsor

    function addDataBase() {

      $query_send = "INSERT INTO `sponsor`(`name`, `rif`, `email`, `image`) VALUES ('".$this->name."','".$this->rif."','".$this->email."','".$this->image."')";
    
      $result = $this->data_base->add_instruc($query_send);

      if($result) {
        return "Se añadio";
      }else {
        return 0;
      };

  }

  function getName_db($name) {
    $query = "SELECT `name` FROM `sponsor` WHERE `name` = `$name` ";

    $result = $this->data_base->add_instruc($query);

    $rows = mysqli_num_rows($result);
      
      if($rows) {
        return 1;
      }else {
        return 0;
      }
  }

  function getRif_db($rif) {
    $query = "SELECT `rif` FROM `sponsor` WHERE `rif` = `$rif` ";

    $result = $this->data_base->add_instruc($query);

    $rows = mysqli_num_rows($result);
      
      if($rows) {
        return 1;
      }else {
        return 0;
      }
  }

  function getEmail_db($email) {
    $query = "SELECT `email` FROM `sponsor` WHERE `email` = `$email` ";

    $result = $this->data_base->add_instruc($query);

    $rows = mysqli_num_rows($result);
      
      if($rows) {
        return 1;
      }else {
        return 0;
      }
  }

  function getImage_db($name) {
    $query = "SELECT `image` FROM `sponsor` WHERE `name` = `$name` ";

    $result = $this->data_base->add_instruc($query);

    $rows = mysqli_num_rows($result);
      
      if($rows) {
        return 1;
      }else {
        return 0;
      }
  }
  
}