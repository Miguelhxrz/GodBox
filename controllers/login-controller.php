<?php 

session_start();

$_SESSION['user'];
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

include('model/user.php');

session_start();

$_SESSION['user'];

$_SESSION['password'];

if(isset($_POST['btn'])) {

    if(!empty($_POST['username_input']) && ($_POST['username_input'] === $_SESSION['user']) && 
       !empty($_POST['password_input']) &&($_POST['password_input'] === $_SESSION['password'])) {
        

        header("Location: ../index.php");


       }elseif(!empty($_POST['username_input']) && ($_POST['username_input'] === 'admin') && 
               !empty($_POST['password_input']) &&($_POST['password_input'] === 'admindb')) {
                   
                $_SESSION['user'] = $_POST['username_input'];

                $_SESSION['password'] = $_POST['password_input'];

                header("Location: ../index.php");

       }else {

        echo "<script>alert('ERROR: Verifique sus datos')</script>";

       }

}

?>