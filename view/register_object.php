<?php 

// Evaluacion de condiciones para retornar el Header segun el usuario
function getHeaderByUser(){
  if(empty($_SESSION['user'] && $_SESSION['password'])){
    return ('../partials/header.php');
  }elseif ($_SESSION['user'] === "admin") {
    return  ('../partials/header-admin.php');
  }elseif (!empty($_SESSION['user']) && $_SESSION['user'] !== "admin") {
    return ('../partials/header_user.php');
  }
  
}

$header = getHeaderByUser();

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
          <label for="id_object" class="label-id">
              ID
              <input type="text" name="id_object" placeholder="ID del objeto" class="id" max="30" maxlength="30">
            </label>
        
            <label for="Name" class="label-name">
              Nombre
              <input type="text" name="name" placeholder="Nombre de Objeto" class="name" max="30" maxlength="30">
            </label>
        
            <label for="cantidad" class="label-cantidad">
              Cantidad
              <input type="text" name="cantidad" placeholder="Cantidad de objetos" class="cantidad" max="10" maxlength="10">
            </label>
        
            <label for="price" class="label-price">
              Precio
              <input type="text" name="price" placeholder="Precio" class="price" max="10" maxlength="10">
            </label>
        
          </section>
        
          <div class="line"></div>
        
          <section class="r-q">
        
            <label for="Sponsor" class="label-sponsor">
              Sponsor
              <select name="sponsor" id="">
                <option value=" " selected="true" disabled="disabled">Seleccionar</option>
                <option value="Apple">Apple</option>
                <option value="Nike">Nike</option>
                <option value="Nintendo">Nintendo</option>
                <option value="Asus">Asus</option>
              </select>
            </label>
          
            <label for="rank" class="label-rank">
              Rango
              <select name="rank">
                <option value="0" selected="true" disabled="disabled">Seleccionar</option>
                <option value="Dios">Dios</option>
                <option value="SemiDios">SemiDios</option>
                <option value="Olimpica">Olimpica</option>
                <option value="Heroe">Heroe</option>
              </select>
            </label>
          
            <label for="category" class="label-category">
              Categoria
              <select name="category">
                <option value="" selected="true" disabled="disabled">Seleccionar</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Ropa">Ropa</option>
              </select>
            </label>
          
            <label for="object_image">
              Imagen del objeto
            <input type="file" name="object_image" id="">
            </label>
          
          </section>
        </div>

         <input type="submit" class="btn" name="register" value="Registrar">

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