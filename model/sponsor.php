<?php 
    require_once('../model/connect_db.php');

  class sponsor {

    public $name;
    private $rif;
    private $email;
  
    #database
  private $data_base;
  
  #constructor
  function Sponsor() {

    $this->data_base=new connect_db;
    $this->data_base->connect();
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


    #Data base functions for sponsor

    function addDataBase() {

      $query_send = "INSERT INTO `sponsor` (`rif`, `name`, `email`) VALUES ('".$this->rif."','".$this->name."','".$this->email."')";
    
      $question = $this->data_base->add_instruc($query_send);

      if(isset($question)){
        echo "registrado";
      }
    
    }

    function Show(){
        
        $query_send = "SELECT `rif`, `name`, `email` FROM `sponsor`";

        $question = $this->data_base->add_instruc($query_send);

        return $question;
    }

  }
?>
