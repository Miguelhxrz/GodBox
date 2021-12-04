<?php 

class connect_db {

  var $conn;
  
  function __construct(){
    
    try {
      $host = "localhost";
      $username = "root";
      $password = "123456789";
      $db_name = "godbox";


      $this->conn = new mysqli($host,$username,$password,$db_name);

      echo"Todo chevere";
    
    } catch (\Throwable $th) {
      echo $th;
    }
    
  }

  function sendQuery($q) {
    try {
      return $this->conn->query($q);

      if($this->conn){
        return 1;
      }else {
        return 0;
      }

    } catch (\Throwable $th) {
      print $th;
    }
    
  
  } 




}