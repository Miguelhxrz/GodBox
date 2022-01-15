<?php

  require_once('../model/object.php');
  require_once('../model/box.php');

  $item = new object_();
  $box = new box();

  session_start();

  $errors = array();

  $showitems = $item->ShowObjects(); 
  
  #datos de la caja
  $box_id = $_SESSION['box_id'];
  
  // var_dump($box_id);

  $incoming_box = $box->getBox_db($box_id);#busca la caja en la bd 

  $incoming_box[0]['objects'];#esto trae el string de objetos vacios de la otra pagina
  
  $finish_btn = $_POST['finish_btn'];

  $items = array();

  $items = $_POST['items'];

  if(isset($finish_btn)) {

      if(!isset($items)){
      array_push($errors, "Error: Debes añadir objetos a la caja");
      }

      // if(items == "" || count(items) < 8) {
      //   array_push($errors, "Error: Debes escojer 8 objetos para poder crear la caja");
      // }

      if(count($errors) > 0){
        echo "<div class='error'>
        <figure>
        <img src='../assets/icons/close.png' alt='icon close' id='close'>
      </figure>";
        for ($i=0; $i < count($errors); $i++) { 
            echo "<li>".$errors[$i]."</li>";
        }
          echo "</div>";
      }else {

        $box_items_string = implode("-",$items);

        // var_dump($items);

        $item_stocks = array();

        for ($i=0; $i <count($items) ; $i++) { 
          $items_id = $item->getStock_db($items[$i]);
          array_push($item_stocks, $items_id[$i]['stock']);         
        }

        $item_stocks_int = array();

        for ($i=0; $i < count($item_stocks) ; $i++) { 
          array_push($item_stocks_int, intval($item_stocks[$i]));
        }

        var_dump($item_stocks_int);

        for ($i=0; $i < count($item_stocks_int); $i++) { 
          $item->restStock($item_stocks_int[$i], $items[$i]);
        }
        

        $result = $box->add_objects($box_id,$box_items_string);

        var_dump($result);

        // header('Location: ../view/boxes.php');

      }
    }


  



  
?>