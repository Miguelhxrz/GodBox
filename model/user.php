<?php 
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
  function __construct() {

    $this->data_base= new connect_db();
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

    function GetByUsername($username){
      $query_send = "SELECT `username`, `password`, `id`, `email`, `address`, `coins` FROM `users` WHERE  `username` = '$username'";

      $question = $this->data_base->add_instruc($query_send);
  
      return $question;
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
    function ShowUsers(){
      $query_send = "SELECT `username`, `password`, `id`, `email`, `address`,`birth`,`fecha de registro` FROM `users`";

      $question = $this->data_base->add_instruc($query_send);
  
      return $question;
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

    function verifyCard() {
      $query_send = "SELECT username FROM `users` INNER JOIN payment ON users.id = payment.id";

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

    
  function buyBox ($username, $box_coins) {
   
    $mycoins = $this->getCoinsdb($username);

    $mycoins_int = intval($mycoins);

    $buy_box = $mycoins_int - $box_coins;

    $query_send =  "UPDATE `users` SET `coins`= '".$buy_box."' WHERE `username` = '".$username."'";

    $question =  $this->data_base->add_instruc($query_send);

    if($question) {
      return $buy_box;
    }else {
      return 0;
    }
  }


  function UpdatePassword($password,$session){
    $query_send = "UPDATE `users` SET `password` = '$password'  WHERE  `username` = '$session'";

    $question = $this->data_base->add_instruc($query_send);

    return $question;
  }

  function UpdateEmail($email,$session){
    $query_send = "UPDATE `users` SET `email` = '$email'  WHERE  `username` = '$session'";

    $question = $this->data_base->add_instruc($query_send);

    return $question;
  }

  function UpdateAddress($address,$session){
    $query_send = "UPDATE `users` SET `address` = '$address' WHERE  `username` = '$session'";

    $question = $this->data_base->add_instruc($query_send);

    return $question;
  }

  function addInventory($id,$username,$objId) {

    $query_send = "INSERT INTO `user_inventory`(`id`, `username`, `objects`) VALUES ('".$id."','".$username."','".$objId."')";

    $question = $this->data_base->add_instruc($query_send);

    if($question) {
      return 1;
    }else {
      return "Fallo";
    }

  }

  function searchId_inventory($id){
    
      $query_send = "SELECT `username` FROM `user_inventory` where id = '".$id."'";

      $question = $this->data_base->add_instruc($query_send);
      
      if(mysqli_num_rows($question) > 0){
        return 1;
      }else {
        return 0;
      }
  }

  function getObjects_inventory ($id) {

    $query_send = "SELECT  `objects` FROM `user_inventory` WHERE id = '".$id."'";

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


  function update_objects($id,$new_obj) {
    
    $query_send = "UPDATE `user_inventory` SET `objects`='".$new_obj."' WHERE `id` = '".$id."'";

    $question = $this->data_base->add_instruc($query_send);

    if($question) {
      return 1;
    }else {
      return 0;
    }
  }

}
?>