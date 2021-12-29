<?php

class connect_db {
  
  var $conection;

  function connect_db () {

    $server_conect = "localhost";
    $username = "root";
    $password = "123456789"; #<-- si tienen contraseña la cambian aqui.
    $use_db = "godbox";
    
    $this->conection = new mysqli($server_conect, $username, $password, $use_db);

    #Validando la conexion a la bd
    if($this->conection->connect_errno) {
      echo "</h3>".$this->conection->connect_error."</h3>";
      exit;
    }else{
      
    }

  }
  
  function add_instruc($instruct) {
    $query = $this->conection->query($instruct);

    if (!$query) {
      return 0;
    }else {
      return 1;
    }
  }

  public function getConection(){
    return $this->conection;
  }

}

?>
