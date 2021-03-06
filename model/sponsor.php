<?php 
    require_once('../model/connect_db.php');

  class sponsor {

    public $name;
    private $rif;
    private $email;
    private $imagen;
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

    function setRif($rif) {
      $this->rif = $rif;
    }

    function setEmail($correo) {
      $this->email = $correo;
    }

    function setImagen($imagen){
      $this->imagen = $imagen;
    }

    function setFechaRegistro($fecha){
      $this->fecha = $fecha;
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

    function getImagen(){
      return $this->imagen;
    }

    #Data base validations

    function searchSponsor($name){
      $query_send = "SELECT `name`FROM `sponsor` WHERE `name` = '$name'";

      $question = $this->data_base->add_instruc($query_send);

      return $question;
    }


    #Data base functions for sponsor

    function addDataBase() {

      $query_send = "INSERT INTO `sponsor`(`name`, `rif`, `email`, `image`, `fecha de registro` ) VALUES ('".$this->name."','".$this->rif."','".$this->email."','".$this->imagen."','".$this->fecha."')";
    
      $question = $this->data_base->add_instruc($query_send);

      if(isset($question)){
        return 1;
      }else {
        return 0;
      }
    
    }

    function ShowSponsors(){
        
        $query_send = "SELECT * FROM `sponsor`";

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

    function ShowSponsorsR(){
        
      $query_send = "SELECT * FROM `sponsor` ORDER BY `fecha de registro` DESC";

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

    function getById($id){

        $query_send = "SELECT `rif`, `name`, `email` , `image` FROM `sponsor` WHERE `rif` = '$id'";

        $question = $this->data_base->add_instruc($query_send);

        return $question;

      
    }

    function deleteSponsor($sponsorif){

      $query_send  = "DELETE FROM `sponsor` where `rif` = '$sponsorif'";

      $question = $this->data_base->add_instruc($query_send);
      
      return $question;
    }

    
  function searchName($name) {
    $query_send = "SELECT `name` FROM `sponsor` WHERE `name` = '$name'";

    $question = $this->data_base->add_instruc($query_send);
    
    if(mysqli_num_rows($question) > 0) {
      return 1;
    }else {
      return 0;
    }

  }

  function searchRif($rif) {
    $query_send = "SELECT `rif` FROM `sponsor` WHERE `rif` = '$rif'";

    $question = $this->data_base->add_instruc($query_send);
    
    if(mysqli_num_rows($question) > 0) {
      return 1;
    }else {
      return 0;
    }

  }

  function searchEmail($email) {
    $query_send = "SELECT `email` FROM `sponsor` WHERE `email` = '$email'";

    $question = $this->data_base->add_instruc($query_send);
    
    if(mysqli_num_rows($question) > 0) {
      return 1;
    }else {
      return 0;
    }

  }

    function UpdateSponsor(){
      $query_send = "UPDATE `sponsor` SET `rif`= '$this->rif',`name`='$this->name',`email`='$this->email', `image` = '$this->imagen' WHERE `rif` = '$this->rif'";
      $question = $this->data_base->add_instruc($query_send);
      return $question;
    }

  }
?>
