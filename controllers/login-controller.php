<?php 

require ('../model/user.php');
error_reporting(0);

$user = new user();

session_start();

$_SESSION['user'];

$errores = array();


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
      echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";
      header("location: ../index.php");

      $_SESSION['user'] = $username;

      // $_SESSION['coins'] = $user_coins['coins'];
    }
  }
?>