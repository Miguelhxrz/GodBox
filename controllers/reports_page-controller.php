<?php 

session_start();

$_SESSION['user'];

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