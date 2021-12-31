<?php
require_once('../model/user.php');

session_start();

// Evaluacion de condiciones para retornar el Header segun el usuario
function getHeaderByUser(){
  if(empty($_SESSION['user'])){
    return ('../partials/header.php');
  }elseif ($_SESSION['user'] === "admin") {
    return  ('../partials/header-admin.php');
  }elseif (!empty($_SESSION['user']) && $_SESSION['user'] !== "admin") {
    return ('../partials/header-user.php');
  }
  
}

$header = getHeaderByUser();

?>