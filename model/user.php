<?php 
    require('../model/connect_db.php');

  class user {

    public $username;
    private $password;
    private $coins;
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

    function setcoins() {
      $this->coins = 0;
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

    function getCoins() {
      $this->coins;
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

    function searchId($username) {
      $query_send = "SELECT `id` FROM `users` WHERE `username` = '$username'";

      $question = $this->data_base->add_instruc($query_send);
      
      if(mysqli_num_rows($question) > 0){
        $rows = mysqli_fetch_array($question);
        return $rows['id'];
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

    function getCoinsdb($username){
      $query_send = "SELECT `coins` FROM `users` WHERE `username` = '".$username."'";

      $question =  $this->data_base->add_instruc($query_send);

      if(mysqli_num_rows($question) > 0){
         $rows = mysqli_fetch_array($question);
         return $rows['coins'];
      }else {
        return 0;
      }

    }

    function buyCoins($coins_buy,$username) {

      $mycoins = $this->getCoinsdb($username);

      $mycoins_int = intval($mycoins);

      $buy_coins = $mycoins_int + $coins_buy;

      $query_send =  "UPDATE `users` SET `coins`= '".$buy_coins."' WHERE `username` = '".$username."'";

      $question =  $this->data_base->add_instruc($query_send);

      if($question) {
        return $buy_coins;
      }else {
        return 0;
      }
    }

    function verifyCard($username) {
      $query_send = "SELECT username FROM `users` INNER JOIN payment ON users.id = payment.id";

      $question = $this->data_base->add_instruc($query_send);

      $result = array();
      
      if(mysqli_num_rows($question) > 0){
        while($rows = mysqli_fetch_array($question)){
          array_push($result, $rows);
        }
     }

     $found = 0;

     for ($i=0; $i < count($result); $i++) {

      if($result[$i]['username'] == $username){
        
        $found = 1;
          
        return  $found;
     
       }else {
     
        return $found;

     }

    }

  }
}