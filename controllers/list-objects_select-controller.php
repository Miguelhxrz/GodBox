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
  $box_name = $_SESSION['box_name'];
  $box_price = $_SESSION['box_price'];
  $box_stock = $_SESSION['box_stock'];
  $box_sponsor = $_SESSION['box_sponsor'];
  $box_category = $_SESSION['box_category'];
  $box_rank = $_SESSION['box_rank'];
  $box_img_name = $_SESSION['img_name'];
  $box_img_temp = $_SESSION['img_temp'];

  $finish_btn = $_POST['finish_btn'];

  $box_items = array();

  $box_items = $_POST['items'];

  // var_dump($box_id);
  // var_dump($finish_btn);
  // var_dump($box_items);

  if(isset($finish_btn)) {

      if(!isset($box_items)){
      array_push($errors, "Error: el campo items no existe");
      }

      if($box_items == "" || count($box_items) < 2) {
        array_push($errors, "Error: Debes escojer 8 objetos para poder crear la caja");
      }

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

        #creando la ruta para la imagen
        $folder = "../public/box/";

        $origin = $folder.$box_img_name; #../public/items/img_name.png

        #moviendo la imagen a la carpeta
        $move = move_uploaded_file($box_img_temp, $origin);
        
        $box->setID($box_id);
        $box->setName($box_name);
        $box->setPrice($box_price);
        $box->setStock($box_stock);
        $box->setSponsor($box_sponsor);
        $box->setCategory($box_category);
        $box->setRank($box_rank);
        $box->setImage($origin);

        $box_items_string = implode("-",$box_items);

        // var_dump($box_items_string);

        $box->setObjects($box_items_string);



        $result = $box->addDataBase();

        
        
        header('Location: ../view/boxes.php');



      }
    }


  



  
?>