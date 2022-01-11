<?php
  require_once('../model/user.php');
  require_once('../model/object.php');

  $user = new user();

  $item = new object_();

  $object_id = $_POST['object_id-win'];

  $username = $_SESSION['user'];

  $user_id = $user->searchId($username);

  $user_objects =  array();

  $result_search = $user->searchId_inventory($user_id);

  $add_objects = array();

  if(isset($object_id) && !empty($object_id)) {
    #Si existe el usuario agrega otro objeto a la lista de objetos de la bd.
    if($result_search == 1){
       $user_objects_db = $user->getObjects_inventory($user_id);

      for ($i=0; $i < count($user_objects_db) ; $i++) { 
        array_push($add_objects,$user_objects_db[$i][$i]);
      }

      array_push($add_objects, $object_id);

      $string_items = implode('-', $add_objects);

      $result_update = $user->update_objects($user_id,$string_items);
    
    }else{
      $user->addInventory($user_id, $object_id);
    }
  }

  $user_objects = $user->getObjects_inventory($user_id);
  
  $user_id_objects = array();

  for ($i=0; $i < count($user_objects); $i++) { 
    array_push($user_id_objects, $user_objects[$i]['objects']);
  }

  $string_id_object = implode("-",$user_id_objects);

  $id_objects_db = explode('-',$string_id_object);

  $img = array();

  for ($i=0; $i < count($id_objects_db) ; $i++) { 
    array_push($img, $item->getObjectById($id_objects_db[$i]));
  }

  

  

  

  



  
  



?>