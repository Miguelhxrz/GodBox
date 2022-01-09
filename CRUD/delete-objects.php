<?php
require_once("../model/object.php");

$id = $_POST["id"];

$box = new object_;

$result = $box->DeleteObject($id);

if(isset($result)){
    header("location: ../view/inventory_objects.php");
}
?>