<?php 
require_once('../model/sponsor.php');

$sponsor_name = $_POST['name_input'];
$rif = $_POST['rif_input'];
$email = $_POST['email_input'];
            
$sponsor = new sponsor();
$sponsor->setName($sponsor_name);
$sponsor->setRif($rif);
$sponsor->setEmail($email);

$resu = $sponsor->updateSponsor(); 

if($resu==true){
header("location: ../view/sponsor.php");
}
?>