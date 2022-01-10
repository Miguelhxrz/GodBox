<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/register_box.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <!-- <script src="../scripts/helper.js"></script> -->
  <script src="../scripts/register_box.js"></script>
  <title>GodBox - Registro de cajas Box</title>
</head>

<body>
  <!-- Header -->
  <?php 
  require_once('../controllers/header-controller.php');
  require_once('../model/sponsor.php');
  ?>

  <?php include($header); ?>

  <main class="container">
    <section class="container-form">
      
    <div class="title-form">
        <h1>Registrar Cajas</h1>
        <p>información Básica</p>
      </div>
      
      
      <form action="" class="form-register" name="form-register" method="POST" enctype="multipart/form-data">
        
        <div class="conta">
          
          <section class="l-q">
            
            <label for="box_id" class="label-code">
              ID
              <input type="text" placeholder="ID de la caja" size="12" maxlength="8" name="box_id" id="box_id">
            </label>

            <label for="box_name" class="label-name">
              Nombre
              <input type="text" placeholder="Nombre de la caja" size="45" maxlength="45" name="box_name">
            </label>
            
            <label for="box_price" class="label-price">
              Precio
              <input type="text" placeholder="Precio de la caja" size="45" maxlength="45" name="box_price">
            </label>

            <label for="box_stock" class="label-price">
              Cantidad
              <input type="text" placeholder="Cantidad de la caja" size="45" maxlength="45" name="box_stock">
            </label>
  
          </section>
          
          <div class="line"></div>
          
          <section class="r-q">

          <label for="box_sponsor" class="label-category">
              Sponsor
              <select name="box_sponsor" id="box_sponsor">
                <option value="">Seleccionar</option>
                <option value="Apple">Apple</option>
                <option value="Nintendo">Nintendo</option>
                <option value="Ropa">Nike</option>
                <option value="variado">Variado</option>
                <?php
                $sponsor = new sponsor;
                $question = $sponsor->ShowSponsor();
                while ($fila= mysqli_fetch_array($question)){?>
                <option value="<?php echo $fila['name']?>"><?php echo $fila['name']?></option>
                <?php }?>
              </select>
            </label>
            
            <label for="box_category" class="label-category">
              Categoria
              <select name="box_category" id="box_category">
                <option value="">Seleccionar</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Ropa">Ropa</option>
                <option value="variado">Variado</option>
              </select>
            </label>
            
            <label for="box_rank" class="label-rank">
              Rango
              <select name="box_rank" id="box_rank">
                <option value="">Seleccionar</option>
                <option value="Dios">Dios</option>
                <option value="SemiDios">SemiDios</option>
                <option value="Olimpica">Olimpica</option>
                <option value="Heroe">Heroe</option>
              </select>
            </label>            
            <br>
            
            <label for="box_image" class="label-img">
              <p>Agregar imagen</p>
              <input type="file" name="box_image" id="box_image" value="">
            </label>
          
          </section>
        
        </div>

        <input type="submit" class="btn" name="box_continue" id='box_continue' value="Continuar"></input>

        <?php require_once('../controllers/register-box-controller.php');?>

      </form>
    </section>

  </main>

  <footer class="footer">
    <h3 class="footer__text">Todos los derechos reservados 2021 GodBox</h3>
    <div class="footer__social-media">
      <figure><img src="../assets/icons/twitter.png" alt="twitter"></figure>
      <figure><img src="../assets/icons/instagram.png" alt="instagram"></figure>
      <figure><img src="../assets/icons/facebook.png" alt="facebook"></figure>
    </div>
  </footer>

</body>

</html>