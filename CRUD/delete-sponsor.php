<?php
require_once("../model/sponsor.php");

$sponsorif = $_POST["rif"];

$sponsor = new sponsor;

$result = $sponsor->deleteSponsor($sponsorif);

if(isset($result)){
    header("location: ../view/sponsor.php");
}
?>