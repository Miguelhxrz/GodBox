<?php
require_once("../model/box.php");

$id = $_POST["id"];

$box = new box;

$result = $box->DeleteBox($id);

if(isset($result)){
    header("location: ../view/inventory.php");
}
?>