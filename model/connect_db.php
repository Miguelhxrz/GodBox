<?php

class connect_db
{

  var $conn;

  function __construct()
  {

    try {
      $host = "localhost";
      $username = "root";
      $password = "123456789";
      $db_name = "godbox";


      $conn = new mysqli($host, $username, $password, $db_name);

      echo "Todo chevere";
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  function sendQuery($q)
  {

    return $this->con->que;

    if ($this->con) {
      return 1;
    } else {
      return 0;
    }
  }
}
