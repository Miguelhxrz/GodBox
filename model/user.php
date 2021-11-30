<?php 
include_once('./classes/conexion.php');

class user{
  private $username;
  private $password;
  private $id;
  private $email;
  private $address;
  // private $birth;


  #conection db 
  private $db;

  #constructor
  function user () {
    $this->db =  new conect_db();
  }

  #Metodos set

  function set_username($user) {
  $this->username = $user;
  }

  function set_password($pass) {
    $this->password = $pass;
  }
  
  function set_id($ced) {
    $this->id = $ced;
  }

  function set_email($correo) {
    $this->email = $correo;
  }

  function set_address($direc) {
    $this->address = $direc;
  }

  /* function set_password($d, $m, $y) {
    $this-> = $pass;
  } */

  #Metodos de db

  function add_user() {
    $inst ="insert into user (`username`, `password`, `id`, `email`, `Address`,) values ('".$this->username."','".$this->password."','".$this->id."','".$this->password."','user','".$this->email."','".$this->address."')";

    $requestdb = $this->data_base->add_instruc($inst);

    if($requestdb) {
      return 1;
    }
    else {
      return 0;
    }
  }

  function search_user_byid($id) {
    $inst = "select * from user where id ='$id'";

    $requestdb = $this->data_base->add_instruc($inst);
    
    if(mysqli_num_rows($requestdb) > 0) {
      return 1;
    }else {
      return 0;
    }

  }


}



?>