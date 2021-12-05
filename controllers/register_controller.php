<?php 

require_once('../model/user.php');

$patron_username = "/^[A-Za-z0-9_]+$/";
$patron_address = "/^[a-zA-Z0-9\s-]+$/";
$patron_id = "/^[0-9]+$/";
$patron_email = "/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/";

$errores = array();

// $user = new user();

$username = $_POST['username'];
$password = $_POST['password'];
$id = intval($_POST['id']);
$email = $_POST['email'];
$address = $_POST['address'];
$day = intval($_POST['day']);
$month = intval($_POST['month']);
$year = intval($_POST['year']);

if(isset($_POST['submit'])) {

  #validacion de username
  
  if(isset($username)){
    if (empty($username)) {
      array_push($errores,"Error 001: El Username no puede estar vacio.");
    }
    if(strlen($username) < 3) {
      array_push($errores,"Error 002: El tamaño del username tiene que ser mayor a 3 letras.");
    }
    if(preg_match($patron_username, $username) == 0){
      array_push($errores,"Error 003: El nombre de usuario solo admite el _");
    }
  }else {
    array_push($errores,"Error 004: El Username no existe.");
  }

  #validacion password

  if(isset($password)){
   
    if(empty($password)) {
      array_push($errores,"Error 004: la contraseña no puede estar vacio.");
    }
    if(strlen($password) < 3) {
      array_push($errores,"Error 005: el tamaño de la contraseña tiene que ser mayor a 3 caracteres.");
    }
  }else {
    array_push($errores,"Error 006: la contraseña no existe.");
  }

  #validacion de id

  if(isset($id)){
  
    if(empty($id)) {
      array_push($errores,"Error 007: el id no puede estar vacio.");
    }
    if(strlen($id) < 3) {
      array_push($errores,"Error 008: el tamaño del id tiene que ser mayor a 3 caracteres.");
    }
    if(preg_match($patron_id, $id) == 0){
      array_push($errores,"Error 009: Verifique su numero de identificación");
    }
  }else {
    array_push($errores,"Error 0010: el id no existe.");
  }
  
  #Validacion Email

  if(isset($email)){
    if(empty($email)) {
    array_push($errores,"Error 010: No puedes dejar el campo de email vacio.");
    }
    if(strlen($email) < 3){
    array_push($errores,"Error 011: El email debe tener mas de 3 caracteres.");
    }
    if(preg_match($patron_email, $email) == 0){
      array_push($errores,"Error 012: Verifique el campo email, puede tener un caracter no valido");
    }
  }else {
    array_push($errores,"Error 013: el id no existe.");
  }  

   #Validacion address

   if(isset($address)){

  if(empty($address)) {
    array_push($errores,"Error 014: No puedes dejar el campo de email vacio.");
    }
    if(strlen($address) < 3){
    array_push($errores,"Error 015: El email debe tener mas de 3 caracteres.");
    }
    if(preg_match($patron_address, $address) == 0){
      array_push($errores,"Error 16: Verifique su direccion.");
    }
  }else {
      array_push($errores,"Error 17: La direccion no existe.");
    }

  #validacion de fecha (dia)
    
  if(isset($day)) {
    
    if(empty($day)){
      array_push($errores,"Error 018: No puede dejar el campo de dia vacio.");
    }

    if(is_numeric($day) == false) {
      array_push($errores,"Error 019: Imposible procesar.");
    }
    
    if(strlen($day) >= 3) {
      array_push($errores,"Error 020: No existe un dia con 3 cifras.");
    }
    
    if($day > 31 || $day < 0){
      array_push($errores,"Error 021: Los meses tiene 28, 30 y 31 días.");
    }
  
  }else {
    array_push($errores,"Error 021: El dia no existe.");
  }

  #validacion de fecha (mes)
    
  if(isset($month)) {
    
    if(empty($month)){
      array_push($errores,"Error 022: No puede dejar el campo de dia vacio.");
    }

    if(is_numeric($month) == false) {
      array_push($errores,"Error 023: Imposible procesar.");
    }
    
    if(strlen($month) >= 3) {
      array_push($errores,"Error 024: No existe un mes con 3 cifras.");
    }
    
    if($month > 12 || $month < 0){
      array_push($errores,"Error 025: Los meses son del 1 - 12.");
    }
  
  }else {
    array_push($errores,"Error 026: El mes no existe.");
  }

  #validacion de fecha (año)
    
  if(isset($year)) {
    
    if(empty($year)){
      array_push($errores,"Error 27: No puede dejar el campo de año vacio.");
    }

    if(is_numeric($year == false)) {
      array_push($errores,"Error 028: Imposible procesar.");
    }
    
    if(strlen($year) > 4) {
      array_push($errores,"Error 029: No existe aun, un año con 5 cifras.");
    }
    
    if($year <= 1920 || $year < 0){
      array_push($errores,"Error 030: Verifique el año en que nacio.");
    }

    if($year > 2003) {
      array_push($errores,"Error 031: Tienes que ser mayor de edad para poder registrarte.");
    }
  
  }else {
    array_push($errores,"Error 032: El año no existe.");
  }

   #Imprimiendo alertas
   if(count($errores) > 0){
    echo "<div class='error'>
    <figure>
    <img src='../assets/icons/close.png' alt='icon close' id='close'>
   </figure>";
    for ($i=0; $i < count($errores); $i++) { 
          echo "<li>".$errores[$i]."</li>";

        }
      echo "</div>";
   }else {
    
    echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";

    /* $user->setUsername($username);
    $user->setPassword($password);
    $user->setId($id);
    $user->setEmail($email);
    $user->setAddress($address);
    $user->setDay($day);
    $user->setMonth($month);
    $user->setYear($year);
    $user->setBirth();

    echo $user->addDataBase(); */



    header("location: ../index.php");
   }
  
}


?>