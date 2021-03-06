<?php 
require_once('../controllers/header-controller.php');
require_once('../model/object.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/register_object.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <script src="../scripts/helper.js"></script>
  <title>GodBox - Editar de objetos</title>
</head>

<body>

  <!-- Header -->
  <?php include($header); ?>

  <main class="container">

    <section class="container-form">
      
      <div class="title-form">
        <h5>Editar objetos</h5>
      </div>

      <?php

      $id = $_POST['id'];

      $item = new object_;

      $question = $item->getObjectById($id);

      for ($i = 0; $i < count($question); $i++){
      ?>
      
      <form action="" method="POST" class="form-register" enctype="multipart/form-data">
        
      <div class="conta">

          <section class="l-q">
          
              <input type="hidden" name="object_id" placeholder="ID del objeto" class="name" max="4" maxlength="4" value="<?php echo $question[$i]['id'];?>">
            
            <label for="object_name" class="label-name">
              Nombre
              <input type="text" name="object_name" placeholder="Nombre de Objeto" class="name" max="30" maxlength="30" value="<?php echo $question[$i]['name']?>">
            </label>
            
            <label for="object_stock" class="label-cantidad">
              Cantidad
              <input type="text" name="object_stock" placeholder="Cantidad de objetos" class="cantidad" max="10" maxlength="10" value="<?php echo $question[$i]['stock']?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
            </label>
            
            <label for="price" class="label-price">
              Precio
              <input type="text" name="object_price" placeholder="Precio" class="price" max="10" maxlength="10" value="<?php echo $question[$i]['price']?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
            </label>
          
          </section>
          
          <div class="line"></div>
          
          <section class="r-q">
            
            <label for="object_sponsor" class="label-sponsor">
              Sponsor
              <select name="object_sponsor" id="object_sponsor">
              <?php 

                 require_once('../model/sponsor.php');

                   $sponsor = new sponsor;

                   $showSponsors = $sponsor->showSponsors(); ?>      

                   <option value="<?php echo $question[$i]['sponsor']?>"><?php echo $question[$i]['sponsor']?></option>
                   <?php  for($i = 0; $i < count($showSponsors); $i++) {
                         echo "<option value='".$showSponsors[$i]['name']."'>".$showSponsors[$i]['name']."</option>";
              }?>
              </select>
            </label>
            
            <label for="rank" class="label-rank">
              Rango
              <select name="object_rank" id="object_rank">
              <option value="<?php echo $question[$i]['rank'] ?>"><?php echo $question[$i]['rank'] ?></option>
                <option value="Dios">Dios</option>
                <option value="SemiDios">SemiDios</option>
                <option value="Olimpica">Olimpica</option>
                <option value="Heroe">Heroe</option>
              </select>
            </label>
            
            <label for="object_category" class="label-category">
              Categoria
              <select name="object_category">
                <option value="<?php echo $question[$i]['category'] ?>"><?php echo $question[$i]['category'] ?></option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Ropa">Ropa</option>
              </select>
            </label>
            
            <label for="object_image" class="label-name">
             <p>Imagen del objeto</p> 
              <input type="file" name="object_image"  accept="image/png,image/jpeg" value="<?php echo $question[$i]['image']?>">
            </label>
          
          </section>
        
        </div>

        <input type="submit" name="object_register" class="btn" value="Editar">
        <?php }?>
      </form>
      <?php

$errores = array();

#patrones
$PatronUsuario = "/^[a-zA-Z0-9\s-]+$/";
$PatronCantidad = "/^[0-9]+$/";
$PatronPrecio = "/^[0-9].+$/";
$PatronID = "/^[A-Z]+$/";

$item =  new object_;

#variables
$object_register = $_POST['object_register'];
$object_id = $_POST['object_id'];
$object_name = $_POST['object_name'];
$object_stock = $_POST['object_stock'];
$object_price = $_POST['object_price'];
$object_sponsor = $_POST['object_sponsor'];
$object_rank = $_POST['object_rank'];
$object_category = $_POST['object_category'];
$object_img = $_FILES['object_image'];

#datos de la imagen
$object_img_name = $_FILES['object_image']['name']; #nombre del archivo.
$object_img_type = $_FILES['object_image']['type']; #typo del archivo.
$object_img_size = $_FILES['object_image']['size']; #tama??o del archivo.
$object_img_temp = $_FILES['object_image']['tmp_name']; #contiene la direccion temporal del archivo.

if (isset($object_register)) {
    
  #validacion de id
  if (isset($object_id)) {
    if (empty($object_id)) {
      array_push($errores, "Error 055: El ID no puede estar vacio.");
    }else
    if (strlen($object_id) < 4) {
      array_push($errores, "Error 056:El ID debe tener un tama??o mayor a 4 letras.");
    }else
    if (!preg_match($PatronID, $object_id)) {
      array_push($errores, "Error 057: El ID no debe llevar caracteres especial.");
    }
  } else {
    array_push($errores, "Error 058: El ID no existe.");
  }

  #Validacion de name
  if (isset($object_name)) {
    if (empty($object_name)) {
      array_push($errores, "Error 059: El Nombre no puede estar vacio.");
    }else
    if (strlen($object_name) < 3) {
      array_push($errores, "Error 060:El Nombre debe tener un tama??o mayor a 3 letras.");
    }else
    if (!preg_match($PatronUsuario, $object_name)) {
      array_push($errores, "Error 061: El Nombre no debe llevar caracteres especial.");
    }  
  } else {
    array_push($errores, "Error 062: El Nombre no existe.");
  }

  #validacion de cantidad
  if (isset($object_stock)) {
    if (empty($object_stock) || $object_stock == '0') {
      array_push($errores, "Error 063: La cantidad no puede estar vacia.");
    }else
    if (!preg_match($PatronCantidad, $object_stock)) {
      array_push($errores, "Error 064: La cantidad solo admite numeros.");
    } 
    } else {
    array_push($errores, "Error 065: La cantidad no existe.");
  }

  #validacion de precio
  if (isset($object_price)) {
    if (empty($object_price)) {
      array_push($errores, "Error 066: El precio no puede estar vacio.");
    }else
    if (strlen($object_price) < 0) {
      array_push($errores, "Error 067:El precio debe ser mayor o igual a 0.");
    }else
    if (!preg_match($PatronPrecio, $object_price)) {
      array_push($errores, "Error 068: El precio solo admite numeros, y punto.");
    }
  }else {
    array_push($errores, "Error 069: El precio  no existe.");
  }

  #validacion de Rank
  if (isset($object_rank)) {
    if (empty($object_rank)) {
      array_push($errores, "Error 070: Se debe elegir un rango para el objeto.");
    }
  } else {
    array_push($errores, "Error 071: No se ha seleccionado un rango.");
  }

  #validacion de Sponsor
  if (isset($object_sponsor)) {
    if (empty($object_sponsor)) {
      array_push($errores, "Error 072: Debes seleccionar un patrocinador para el objeto.");
    }
  } else {
    array_push($errores, "Error 073: No se ha seleccionado un patrocinado.");
  }

  #validacion de Category
  if (isset($object_category)) {
    if (empty($object_category)) {
      array_push($errores, "Error 074: Debes elegir una categorya para el objeto.");
    }
  } else {
    array_push($errores, "Error 075: No se ha seleccionado una categoria para el objeto.");
  }

  #validacion de la imagen
  if(isset($object_img_name)) {
    if(empty($object_img_name)) {
      array_push($errores, "Error 076: Debes insertar la imagen del objeto.");
    }
  }

  #Errores
  if (count($errores) > 0) {
    echo "<div class='error'>
    <h3>Errores al Editar el Objeto</h3>";
    for ($i = 0; $i < count($errores); $i++) {
      echo "<li>" . $errores[$i] . "</li>";
    }
    echo "</div>
    <a class='volver-inven' href='../view/Inventory_objects.php'> <- Volver a inventario</a>
    ";



  } else {
    echo "<div class='correcto'><h4>??Todo correcto!</h4></div>";

      #creando la ruta para la imagen
      $folder = "../public/items/";

      $origin = $folder.$object_img_name; #../public/items/img_name.png

      #moviendo la imagen a la carpeta
      $move = move_uploaded_file($object_img_temp, $origin);

      $price_int = intval($object_price);

      $item->setID($object_id);
      $item->setName($object_name);
      $item->setStock($object_stock);
      $item->setPrice($price_int);
      $item->setSponsor($object_sponsor);
      $item->setRank($object_rank);
      $item->setCategory($object_category);

      $item->setImage($origin);

     $result = $item->updateObjects();

     if($result==true){
      echo '<meta http-equiv="refresh" content="0;url=../view/inventory_objects.php">';
     }

    }
  }
      
      ?>
    </section>
  </main>

  <footer class="footer">
    <h3>Todos los derechos reservados 2021 GodBox</h3>
    <div class="footer__social-media">
      <figure><img src="../assets/icons/twitter.png" alt="twitter"></figure>
      <figure><img src="../assets/icons/instagram.png" alt="instagram"></figure>
      <figure><img src="../assets/icons/facebook.png" alt="facebook"></figure>
    </div>
  </footer>
</body>

</html>

