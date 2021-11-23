<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  $_SESSION['sponsor'];
  $errores = array();
  #patrones
  $PatronUsuario="/^[a-zA-Z0-9\s-]+$/";
  $PatronCantidad="/^[0-9]+$/";
  $PatronPrecio="/^[0-9].+$/";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register_object.css">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Registro de objetos</title>
</head>

<body>

    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="./img/Logo-rezised.png" alt="" class="logoo">
                <a href="./index.html"></a>
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.html">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="./index.html">
                        <img src="./icons/icons8-ruins-50.png" alt="">
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
                        <img src="./icons/casco.png" alt="" class="imgcasco">
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
                <input type="text" name="name" placeholder="Nombre de Objeto" class="name" max="15" maxlength="15">
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
                    <option value="nada" selected="true" disabled="disabled">Seleccionar</option>
                    <option value="<?php echo $_SESSION['sponsor']["sponsor_name"]?>"><?php  echo($_SESSION['sponsor']["sponsor_name"]);?></option>
                    <option value="Nike">Nike</option>
                    <option value="Nintendo">Nintendo</option>
                </select>
              </label>
              <label for="Rank" class="label-rank">
              Rango
                <select name="Rank">
                    <option value="nada"selected="true" disabled="disabled">Seleccionar</option>
                    <option value="Dios">Dios</option>
                    <option value="SemiDios">SemiDios</option>
                    <option value="Olimpica">Olimpica</option>
                    <option value="Heroe">Heroe</option>
                </select>
              </label>
              <label for="category" class="label-category" >
              Categoria
                <select name="Category" id="">
                <option value="nada" selected="true" disabled="disabled">Seleccionar</option>
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
            $Rank = $_POST['Rank'];
            $Sponsor = $_POST['Sponsor'];
            $Category = $_POST['Category'];

            #validacion de nombre (no funciona)
            if (isset($name_object)){
              if($name_object == ''){
                array_push($errores,"Error 000: El Nombre no puede estar vacio.");
              }
              if(strlen($name_object) < 3) {
                array_push($errores,"Error 001:El Nombre debe tener un tamaño mayor a 3 letras.");
              }if(preg_match($PatronUsuario,$name_object)){
              }else{
                array_push($errores,"Error 003: El Nombre no debe llevar caracteres especial.");
              }
              }else {
                    array_push($errores,"Error 002: El Nombre no existe.");
                  }
            #validacion de cantidad
            if (isset($cantidad)){
              if($cantidad == '' ||$cantidad == '0'){
                array_push($errores,"Error 000: La cantidad no puede estar vacia.");
              }
              if(preg_match($PatronCantidad,$cantidad)){
              }else{
                array_push($errores,"Error 003: La cantidad solo admite numeros.");
              }
              }else {
                    array_push($errores,"Error 002: La cantidad no existe.");
                  }
            #validacion de precio
            if (isset($price)){
              if($price == ''){
                array_push($errores,"Error 000: El precio no puede estar vacio.");
              }
              if(preg_match($PatronPrecio,$price)){
              }else{
                array_push($errores,"Error 003: El precio solo admite numeros, y punto.");
              }
              }else {
                    array_push($errores,"Error 002: El precio  no existe.");
                  }
            
            if(count($errores)>0){
              echo "<div class='error'>";
              for ($i=0; $i < count($errores); $i++) { 
                echo "<li>".$errores[$i]."</li>";

              } 
            }else{
              session_start();

                $_SESSION['object_name'] = $_POST['name'];
                
                  if (isset($_SESSION['object'])) {
                    $_SESSION['object'] = array();
                  }
                  $name_object = $_POST['name'];
                  $cantidad = $_POST['cantidad'];
                  $price = $_POST['price'];
                  $Rank = $_POST['Rank'];
                  $Sponsor = $_POST['Sponsor'];
                  $Category = $_POST['Category'];

                  $_SESSION['object'] = array(
                    "name_object" => $name_object,
                    "cantidad" => $cantidad,
                    "price" => $price,
                    "Rank" => $Rank,
                    "Sponsor" => $Sponsor,
                    "Category" => $Category
                  ); 
                  if (isset($_SESSION['object'])){
                    echo "<div class='correcto'><h4>¡Todo correcto, agregado!</h4></div>";
                  }
             }
            ?>
            </form>
        </section>

        <section class="footer">
            <h5>Todos los derechos reservados 2021 GodBox</h5>
        </section>
    </main>

</body>

</html>