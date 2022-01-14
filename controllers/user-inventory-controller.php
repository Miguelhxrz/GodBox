<?php
  require_once('../model/user.php');
  require_once('../model/object.php');

  $user = new user();

  $item = new object_();

  $object_id = $_POST['object_id-win'];

  $btn_send = $_POST['enviar_btn'];

  $btn_sell = $_POST['vender_btn'];

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
      $verify = $user->addInventory($user_id,$username,$object_id);
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

  if(isset($btn_send)){
    
  }
  if(isset($btn_sell)){
    $sell_id = $_POST['object_id'];

    $price = $item->getPrice_db($sell_id);

    $price = intval($price);

    $result_sell = $user->buyCoins($price, $username);

    $objects_user_inventory = $user->getObjects_inventory($user_id);

    $inventory_ids = array();

    for ($i=0; $i < count($objects_user_inventory); $i++) { 
      $k=0;
      array_push($inventory_ids,$objects_user_inventory[$i]['objects']);
    }

    $inventory_ids_string = implode("-",$inventory_ids);

    $inventory_ids = explode("-",$inventory_ids_string);

    for ($i=0; $i < count($inventory_ids); $i++) { 
      if($inventory_ids[$i] == $sell_id) {
        unset($inventory_ids[$i]);
      }
    }

    $new_inventory = implode('', $inventory_ids);

    $user->update_objects($user_id,$new_inventory);
    
  }
  

  

  

  



  
  



?>