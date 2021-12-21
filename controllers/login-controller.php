<?php 

require ('../model/user.php');

$user = new user();

session_start();

$_SESSION['user'];

$errores = array();
// Evaluacion de condiciones para retornar el Header segun el usuario
function getHeaderByUser(){
  if(empty($_SESSION['user'])){
    return ('./partials/index/header.php');
  }elseif ($_SESSION['user'] === "admin") {
    return  ('./partials/index/header-admin.php');
  }elseif (!empty($_SESSION['user']) && $_SESSION['user'] !== "admin") {
    return ('./partials/index/header-user.php');
  }
  
}

$header = getHeaderByUser();

$username = $_POST['username'];

$password = $_POST['password'];


if(isset($_POST['btn'])) {
 
    if($user->userLogin($username, $password) == 0) {
      array_push($errores, "Error 041: La combinación username y contraseña son erroneos");
    }
    
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
      header("location: ../index.php");
    }
  }
?>