<?php
require_once('../controllers/header-controller.php');
require_once('../model/sponsor.php');
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
  <title>GodBox - Registro de objetos</title>
</head>

<body>

  <!-- Header -->
  <?php include($header); ?>

  <main class="container">

    <section class="container-form">
      
      <div class="title-form">
        <h5>Registrar objetos</h5>
      </div>
      
      <form action="" method="POST" class="form-register" enctype="multipart/form-data">
        
      <div class="conta">

          <section class="l-q">
          
          <label for="id" class="label-id">
              ID
              <input type="text" name="object_id" placeholder="ID del objeto" class="name" max="4" maxlength="4">
            </label>
            
            <label for="object_name" class="label-name">
              Nombre
              <input type="text" name="object_name" placeholder="Nombre de Objeto" class="name" max="30" maxlength="30">
            </label>
            
            <label for="object_stock" class="label-cantidad">
              Cantidad
              <input type="text" name="object_stock" placeholder="Cantidad de objetos" class="cantidad" max="10" maxlength="10">
            </label>
            
            <label for="price" class="label-price">
              Precio
              <input type="text" name="object_price" placeholder="Precio" class="price" max="10" maxlength="10">
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

                  <option value="">Seleccionar</option>
                  <?php  for($i = 0; $i < count($showSponsors); $i++) {
                      echo "<option value='".$showSponsors[$i]['name']."'>".$showSponsors[$i]['name']."</option>";
                  }?> 
              </select>
            </label>
            
            <label for="rank" class="label-rank">
              Rango
              <select name="object_rank" id="object_rank">
                <option value="">Seleccionar</option>
                <option value="Dios">Dios</option>
                <option value="SemiDios">SemiDios</option>
                <option value="Olimpica">Olimpica</option>
                <option value="Heroe">Heroe</option>
              </select>
            </label>
            
            <label for="object_category" class="label-category">
              Categoria
              <select name="object_category">
                <option value="">Seleccionar</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Ropa">Ropa</option>
              </select>
            </label>
            
            <label for="object_image" class="label-name">
             <p>Imagen del objeto</p> 
              <input type="file" name="object_image"  accept="image/png,image/jpeg">
            </label>
          
          </section>
        
        </div>

        <input type="submit" name="object_register" class="btn" value="registrar">

        <?php require_once('../controllers/register-object-controller.php'); ?>
      
      </form>
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