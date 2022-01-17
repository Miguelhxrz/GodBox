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

  $id_select = $_POST['object_id'];


  #Esto solo se aplicara cuando llegue un nuevo objeto de la ruleta
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

  $array_items = $user->getObjects_inventory($user_id); #busca los objetos ya registrados en la db

  $id_items = explode('-',$array_items[0]['objects']); #hace un array con los id de los items

  $items_img = array(); #Aca se guardan las imagenes de cada uno de los items

  for ($i=0; $i < count($id_items) ; $i++) { 
    array_push($items_img,$item->getImage_db($id_items[$i])); #se pushean las imagenes al array
  }


  if(isset($btn_sell)) {

    $sell_id = $_POST['id_object']; #recibe el id del objeto

    $array_sell = $user->getObjects_inventory($user_id); #trae el inventario del usuario

    $id_sell = explode('-',$array_sell[0]['objects']); #convierte e inventaio del usuario en un array

    for ($i=0; $i < count($id_sell); $i++) { #busca el parecido en el array con el id del objeto que se vendio
      if($id_sell[$i] == $sell_id) {
        unset($id_sell[$i]); #Elimina el objeto del inventario
      }
    }

    $new_inventory = implode('-',$id_sell); #convierte en string el nuevo inventario

    $user->update_objects($user_id,$new_inventory); # Lo sube a la db

    #Pago de monedas
    $price = $item->getPrice_db($sell_id);
    
    $price = intval($price); #convierte las monedas en int para poder sumarlas

    $result = $user->buyCoins($price,$username); #agarra las monedas y las suma con las del usuario y actualiza la bd

    if($result){
      echo '<meta http-equiv="refresh" content="0;url=../view/admin_page.php">';
      $sell_id = '';
    }
  }

  
  if(isset($btn_send)) {

    $item_id = $_POST['id_object']; #recibe el id del objeto

    $array_sell = $user->getObjects_inventory($user_id); #trae el inventario del usuario

    $id_send = explode('-',$array_sell[0]['objects']); #convierte e inventaio del usuario en un array

    for ($i=0; $i < count($id_send); $i++) { #busca el parecido en el array con el id del objeto que se vendio
      if($id_send[$i] == $item_id) {
        unset($id_send[$i]); #Elimina el objeto del inventario
      }
    }

    $new_inventory = implode('-',$id_send); #convierte en string el nuevo inventario

    $update = $user->update_objects($user_id,$new_inventory); # Lo sube a la db

    if($update){
      echo '<meta http-equiv="refresh" content="0;url=../view/admin_page.php">';
      $sell_id = '';
    }

  }

    




?>