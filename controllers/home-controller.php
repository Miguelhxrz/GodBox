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


?>