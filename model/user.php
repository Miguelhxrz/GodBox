<?php 
    require('../model/connect_db.php');

  class user {

    public $username;
    private $password;
    private $id;
    private $email;
    private $address;
    private $day;
    private $month;
    private $year;
    private $birth;
    private $fecha;
  
    #database
  private $data_base;
  
  #constructor
  function User() {

    $this->data_base=new connect_db;
    $this->data_base->connect();
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
      $this->birth = $this->day."/".$this->month."/".$this->year;
    }

    function SetFechaRegistro($fecha){
      $this->fecha = $fecha;
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
      
        $query_send = "INSERT INTO `users` (`username`, `password`, `id`, `email`, `address`,`birth`,`fecha de registro`) VALUES ('".$this->username."','".$this->password."','".$this->id."','".$this->email."','".$this->address."','".$this->birth."','".$this->fecha."')";
    
        $question = $this->data_base->add_instruc($query_send);

        if($question == false){
          return 1;
        }else {
          return 0;
        }

    }

    function userLogin($user, $password) {
      $query_send = "SELECT * FROM `users` WHERE `username` = '$user' and `password` = '$password'";

      $question = $this->data_base->add_instruc($query_send);

      $rows = mysqli_num_rows($question);
      
      if($rows) {
        return 1;
      }else {
        return 0;
      }

    }

    function searchUsername($username) {
      $query_send = "SELECT `username` FROM `users` WHERE `username` = '$username'";

      $question = $this->data_base->add_instruc($query_send);
      
      if(mysqli_num_rows($question) > 0) {
        return 1;
      }else {
        return 0;
      }

    }

    function searchPassword($password) {
      $query_send = "SELECT `password` FROM `users` WHERE `password` = '$password'";

      $question = $this->data_base->add_instruc($query_send);
      
      if(mysqli_num_rows($question) > 0) {
        return 1;
      }else {
        return 0;
      }

    }


    function searchId($id) {
      $query_send = "SELECT `id` FROM `users` WHERE `id` = '$id'";

      $question = $this->data_base->add_instruc($query_send);
      
      if(mysqli_num_rows($question) > 0) {
        return 1;
      }else {
        return 0;
      }

    }

    function searchEmail($email) {
      $query_send = "SELECT `email` FROM `users` WHERE `email` = '$email'";

      $question = $this->data_base->add_instruc($query_send);
      
      if(mysqli_num_rows($question) > 0) {
        return 1;
      }else {
        return 0;
      }

    }

    function GetByUsername($username){
        
      $query_send = "SELECT `username`, `password`, `id`, `email`, `address`, `birth` FROM `users` WHERE `username` = '$username'";

      $question = $this->data_base->add_instruc($query_send);

      return $question;
  }

  function ShowUsers(){
    $query_send = "SELECT `username` , `password` , `id` , `email` , `address` , `birth` , `fecha de registro` FROM `users`";
        
      $question = $this->data_base->add_instruc($query_send);

      return $question;
  
  }

  function UpdateUsername($username, $sesion){
    $query_send = "UPDATE `users` SET `username`= '$username' where `username`= '$sesion'";

    $question = $this->data_base->add_instruc($query_send);

    return $question;
  }
  
  function UpdateEmail($email, $sesion){
    $query_send = "UPDATE `users` SET `email`= '$email' where `username`= '$sesion'";

    $question = $this->data_base->add_instruc($query_send);

    return $question;
  }

  function UpdatePassword($password, $sesion){
    $query_send = "UPDATE `users` SET `password`= '$password' where `username`= '$sesion'";

    $question = $this->data_base->add_instruc($query_send);

    return $question;
  }

  function UpdateAddress($address, $sesion){
    $query_send = "UPDATE `users` SET `address`= '$address' where `username`= '$sesion'";

    $question = $this->data_base->add_instruc($query_send);

    return $question;
  }


  }
