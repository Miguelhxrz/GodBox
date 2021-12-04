0<?php 

class conect_db {
  var $conection;

  function connect () {
    $server_conect = "localhost";
    $username = "root";
    $password = "12345678"; #<-- si tienen contraseña la cambian aqui.
    $use_db = "godbox";
    $this->conection = new mysqli($server_conect, $username, $password, $use_db);

    #Validando la conexion a la bd
    if($this->conection->connect_errno) {
      echo "<h3>Hubo un error con la conexion de la base de datos, intentelo nuevamente</h3>";
      exit;
    }

  }

  function add_instruc($instruct) {
    return $this->conection->query($instruct);
  }

  public function getConection() {
    return $this->conection;
  }


}






?>