<?php 

  require_once('../model/connect_db.php');

  class user {

    private $username;
    private $password;
    private $id;
    private $email;
    private $address;
    private $day;
    private $month;
    private $year;
    private $birth;

    #connnect data base
    private $data_base;

    function __construct(){
      
      $this->data_base = new connect_db();

    }
    
    #--Set--

    function setUsername($user) {
      $this->username = $user;
    }

    function setPassword($pass) {
      $this->password = $pass;
    }

    function setId($ced) {
      $this->id = $ced;
    }

    function setEmail($correo) {
      $this->email = $correo;
    }

    function setAddress($direc) {
      $this->address = $direc;
    }

    function setDay($d) {
      $this->day = $d;
    }

    function setMonth($m) {
      $this->month = $m;
    }

    function setYear($y) {
      $this->year = $y;
    }

    function setBirth() {
      $this->birth = $this->day."-".$this->month."-".$this->year;
    }

    #--Get--

    function getUsername() {
      return $this->username;
    }

    function getPassword() {
      return $this->password;
    }

    function getId() {
      return $this->id;
    }

    function getEmail() {
      return $this->email;
    }

    function getAddress() {
      return $this->address;
    }

    function getYear() {
      $this->year;
    }

    function get_fullbirth() {
      $this->birth;
    }


    #Data base functions for users

    function addDataBase() {
      try {
        $query_send = "insert into `users` (`username`, `password`, `id`, `email`, `address`, `birth`) values ('".$this->username."',''".$this->password."','".$this->id."','".$this->email."','".$this->address."','".$this->birth."',')";
    
        $question = $this->data_base->sendQuery($query_send);

        if($question){
          return 1;
        }else {
          return 0;
        }

      } catch (\Throwable $th) {
        print $th;
      }
      
      
    
    }

  }



