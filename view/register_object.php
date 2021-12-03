<!DOCTYPE html>
<html lang="en">
<?php 

require_once('../controllers/register-object-controller.php');

  session_start();
  // $_SESSION['sponsor'];
  $errores = array();
  #patrones
  $PatronUsuario="/^[a-zA-Z0-9\s-]+$/";
  $PatronCantidad="/^[0-9]+$/";
  $PatronPrecio="/^[0-9].+$/";


  error_reporting(0);

?>

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

    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="../assets/img/Logo-rezised.png" alt="" class="logoo">
                <a href="../index.php"></a>
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.php">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="../index.php">
                        <img src="../assets/icons/icons8-ruins-50.png" alt="">
                    </a>
                </div>
                <div class="about-link">
                    <a href="#">
                        <h4>Sobre nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="links-r">
                <div class="login-link">
                    <a href="#">
                        <img src="../assets/icons/casco.png" alt="" class="imgcasco">
                    </a>
                </div>
            </section>

        </div>
    </header>

    <main class="container">
        <section class="container-form">
            <div class="title-form">
                <h5>Registrar objetos</h5>
            </div>
            <form action="" method="post" class="form-register">
            <div class="conta">
            <section class="l-q">
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
              <label for="Sponsor" class="label-sponsor" >
                  Sponsor
                <select name="Sponsor" id="">
                    <option value="" selected="true" disabled="disabled">Seleccionar</option>
                    <option value="Apple">Apple</option>
                    <option value="Nike">Nike</option>
                    <option value="Nintendo">Nintendo</option>
                    <option value="Asus">Asus</option>
                </select>
              </label>
              <label for="Rank" class="label-rank">
              Rango
                <select name="Rank">
                    <option value=""selected="true" disabled="disabled">Seleccionar</option>
                    <option value="Dios">Dios</option>
                    <option value="SemiDios">SemiDios</option>
                    <option value="Olimpica">Olimpica</option>
                    <option value="Heroe">Heroe</option>
                </select>
              </label>
              <label for="category" class="label-category" >
              Categoria
                <select name="Category">
                <option value="" selected="true" disabled="disabled">Seleccionar</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Ropa">Ropa</option>
                </select>
              </label>
              </section>
              </div>
                <input type="submit" name="btn" class="btn" value="registrar">
            <?php 
              $name_object = $_POST['name'];
              $cantidad = $_POST['cantidad'];
              $price = $_POST['price'];
              $register = $_POST['btn'];

            if(isset($register)) {
            
            #validacion de nombre (no funciona)

            if (isset($name_object)){
              if($name_object == ''){
                array_push($errores,"Error 000: El Nombre no puede estar vacio.");
              }
              if(strlen($name_object) < 3) {
                array_push($errores,"Error 002:El Nombre debe tener un tamaño mayor a 3 letras.");
              }if(preg_match($PatronUsuario,$name_object)){
              }else{
                array_push($errores,"Error 003: El Nombre no debe llevar caracteres especial.");
              }
            }else {
                array_push($errores,"Error 004: El Nombre no existe.");
              }

            #validacion de cantidad

            if (isset($cantidad)){
              if($cantidad == '' ||$cantidad == '0'){
                array_push($errores,"Error 005: La cantidad no puede estar vacia.");
              }
              if(preg_match($PatronCantidad,$cantidad)){
              }else{
                array_push($errores,"Error 006: La cantidad solo admite numeros.");
              }
            }else {
                    array_push($errores,"Error 007: La cantidad no existe.");
                  }

            #validacion de precio

            if (isset($price)){
              if($price == ''){
                array_push($errores,"Error 008: El precio no puede estar vacio.");
              }
              if(strlen($name_object) < 0) {
                array_push($errores,"Error 009:El precio debe ser mayor o igual a 0.");
              }if(preg_match($PatronPrecio, $price)){

              }else{
                array_push($errores,"Error 010: El precio solo admite numeros, y punto.");
              }
            }else {
              array_push($errores,"Error 011: El precio  no existe.");
            }

            #validacion de Rank

            $Rank = $_POST['Rank'];
            if (isset($Rank)){
              if($Rank== ""){
                array_push($errores,"Error 012: Elige un rango.");
              }
              }else {
                array_push($errores,"Error 013:no existe rango.");
              }

            #validacion de Sponsor

            $Sponsor = $_POST['Sponsor'];
            if (isset($Sponsor)){
              if($Sponsor== ""){
                array_push($errores,"Error 014: Elige un patrocinador.");
              }
              }else {
                array_push($errores,"Error 015:no existe patrocinador.");
              }
              
            #validacion de Category

            $Category = $_POST['Category'];
            if (isset($Category)){
              if($Category== ""){
                array_push($errores,"Error 016: Elige una Categoria.");
              }
              }else {
                array_push($errores,"Error 017: no existe Categoria.");
              }

            #Errores

            if(count($errores) > 0){
              echo "<div class='error'>
              <figure>
              <img src='../assets/icons/close.png' alt='icon close' id='close'>
             </figure>";
              for ($i=0; $i < count($errores); $i++) { 
                    echo "<li>".$errores[$i]."</li>";

                  }
                  echo $age;
                echo "</div>";
             }else {

               header("location: ./index.html");
             }
            }
            ?>
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