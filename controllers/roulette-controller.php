<?php
  require_once('../model/box.php');
  require_once('../model/object.php');

  $object = new object_();

  $box = new box();

  session_start();

  $box_id = $_SESSION['box_id'];

  $arrayBox = $box->getBox_db($box_id);

  $box_items = explode("-",$arrayBox[0]['objects']);

  $objects = array();

  for ($i=0; $i < count($box_items) ; $i++) { 
    array_push($objects, $object->getObject_db($box_items[$i]));
  }

  





  // for ($i=0; $i < count ; $i++) { 
  //   # code...
  // }
  
  


  



  

?>