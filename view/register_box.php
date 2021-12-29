<?php

require_once('../controllers/register-box-controller.php');
require_once('../controllers/header-controller.php');
#require_once('./bd-con.php');

session_start();

$errores = array();

$PatronUsuario = "/^[a-zA-Z0-9\s-]+$/";
$PatronCodigo = "/^[A-Z0-9-]+$/";
$PatronPrice = "/^[0-9]+([,.][0-9]+)?$/";

error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/register_box.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <script src="../scripts/helper.js"></script>
  <title>GodBox - Registro de cajas Box</title>
</head>

<body>
  <!-- Header -->
  <?php include($header); ?>

  <main class="container">
    <section class="container-form">
      <div class="title-form">
        <h5>Register Box</h5>
      </div>
      <form action="" class="form-register" name="form-register" method="POST" enctype="multipart/form-data">
        <div class="conta">
          <section class="l-q">
            <label for="Name" class="label-name">
              Nombre
              <input type="text" placeholder="Nombre de la caja" size="45" maxlength="45" name="name_input">
            </label>
            <label for="code" class="label-code">
              Codigo
              <input type="text" placeholder="Codigo de la caja" size="12" maxlength="8" name="codigo_input">
            </label>
            <label for="price" class="label-price">
              Precio
              <input type="text" placeholder="Precio de la caja" size="45" maxlength="45" name="precio_input">
            </label>
          </section>
          <div class="line"></div>
          <section class="r-q">
            <label for="category" class="label-category">
              Categoria
              <select name="category" id="">
                <option selected="" value="" disabled="disabled">Seleccionar</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Ropa">Ropa</option>
              </select>
            </label>
            <label for="rank" class="label-rank">
              Rango
              <select name="rank" id="">
                <option selected="" value="" disabled="disabled">Seleccionar</option>
                <option value="Dios">Dios</option>
                <option value="SemiDios">SemiDios</option>
                <option value="Olimpica">Olimpica</option>
                <option value="Heroe">Heroe</option>
              </select>
            </label>
            <label for="objetos" class="label-objetos">
              Objetos
              <select name="objetos" id="">
                <option selected="" value="Seleccionar" disabled="disabled">Seleccionar</option>
                <option value="Play station 5">Play Station 5</option>
                <option value="iPhone 13 PRO MAX">iPhone 13 PRO MAX</option>
                <option value="Nike Air Jordan">Nike Air Jordan</option>
                <option value="Nintendo Switch">Nintendo Switch</option>
              </select>
            </label><br>
            <input type="file" name="imagen" id="">
          </section>
        </div>

        <input type="submit" class="btn" name="register" value="Registrar"></input>

        <?php
        $name = $_POST['name_input'];
        $codigo = $_POST['codigo_input'];
        $price = $_POST['precio_input'];
        $category = $_POST['category'];
        $rank = $_POST['rank'];
        $objetos = $_POST['objetos'];
        $submit = $_POST['register'];

        #validacion de nombre
        if (isset($submit)) {
          if (isset($name)) {
            if (empty($name)) {
              array_push($errores, "Error 000: El Nombre no puede estar vacio.");
            }
            if (strlen($name) < 3) {
              array_push($errores, "Error 001:El Nombre debe tener un tamaño mayor a 3 letras.");
            }
            if (preg_match($PatronUsuario, $name)) {
            } else {
              array_push($errores, "Error 002: El Nombre no debe llevar caracteres especial.");
            }
          } else {
            array_push($errores, "Error 003: El Nombre no existe.");
          }

          #validacion de codigo
          if (isset($codigo)) {
            if (empty($codigo)) {
              array_push($errores, "Error 004: El Codigo no puede estar vacio.");
            }
            if (strlen($codigo) < 8) {
              array_push($errores, "Error 005:El Codigo debe tener un tamaño de 8 caracteres.");
            }
            if (preg_match($PatronCodigo, $codigo)) {
            } else {
              array_push($errores, "Error 006: El Codigo solo puede tener Mayusculas y Numeros.");
            }
          } else {
            array_push($errores, "Error 007: El Codigo no existe.");
          }
          #validacion de precio
          if (isset($price)) {
            if (empty($price)) {
              array_push($errores, "Error 008: El Precio no puede estar vacio.");
            }
            if ($price < 0) {
              array_push($errores, "Error 009:El Precio debe ser mayor que 0.");
            }
            if (preg_match($PatronPrice, $Price)) {
            } else {
              array_push($errores, "Error 010: El Precio debe ser decimal.");
            }
            #if(preg_match($PatronPrecio,$Price)){
            #}else{
            # array_push($errores,"Error 003: El Precio debe ser decimal.");
            #}
          } else {
            array_push($errores, "Error 011: El Codigo no existe.");
          }
          #validacion de Rank
          if (isset($rank)) {
          } else {
            array_push($errores, "Error 012: Elige un Rango.");
          }

          #validacion de Objetos
          if (isset($objetos)) {
          } else {
            array_push($errores, "Error 013: Elige un patrocinador.");
          }

          #validacion de Category
          if (isset($category)) {
          } else {
            array_push($errores, "Error 014: Elige una Categoria.");
          }

          #validacion de imagen
          #if(isset($imagen)){
          # if(empty($imagen)){
          #  array_push($errores,"Error 002: Coloca una imagen.");
          #}
          #}else{
          # array_push($errores,"Error 001: Imagen no existe.");
          #}

          #Errores
          if (count($errores) > 0) {
            echo "<div class='error'>
                  <figure>
                  <img src='../assets/icons/close.png' alt='icon close' id='close'>
                 </figure>";
            for ($i = 0; $i < count($errores); $i++) {
              echo "<li>" . $errores[$i] . "</li>";
            }
            echo $age;
            echo "</div>";
          } else {

            header("location: ./index.html");
          }
        }
        ?>

      </form>
    </section>

    <?php


    ?>

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