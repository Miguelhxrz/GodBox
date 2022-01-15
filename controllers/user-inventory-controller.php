<?php
  require_once('../model/user.php');
  require_once('../model/object.php');

  $user = new user();

  $item = new object_();

  $object_id = $_POST['object_id-win']; #obtiene el objeto 

  $btn_send = $_POST['enviar_btn']; #boton de enviar

  $btn_sell = $_POST['vender_btn']; #boton vender

  $username = $_SESSION['user']; #username del usuario

  $user_id = $user->searchId($username); #saca el id del usuario

  $user_objects =  array();

  $result_search = $user->searchId_inventory($user_id); #busca si en la tabla del inventario esta el id del username

  $add_objects = array();

  #Esto solo se aplicara cuando llegue un nuevo objeto de la ruleta
  if(isset($object_id) && !empty($object_id)) {
    #Si existe el usuario agrega otro objeto a la lista de objetos de la bd.
    if($result_search == 1){

       $user_objects_db = $user->getObjects_inventory($user_id);

      //  var_dump($user_objects_db);

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

  $array_items = $user->getObjects_inventory($user_id);

  $id_items = explode('-',$array_items[0]['objects']);

  $items_img = array();

  for ($i=0; $i < count($id_items) ; $i++) { 
    array_push($items_img,$item->getImage_db($id_items[$i]));
  }

  

  // $showItems = explode('-', $string_items);

  



  
  
  
  

  

  

  



  
  



?>