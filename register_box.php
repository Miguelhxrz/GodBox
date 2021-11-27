<!DOCTYPE html>
<html lang="en">
<?php 

require_once('./bd-con.php');

session_start();
$_SESSION['object'];
$errores = array();

$PatronUsuario = "/^[a-zA-Z0-9\s-]+$/";
$PatronCodigo = "/^[A-Z0-9]+$/";
$PatronPrecio="/^[0-9].+$/";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register_box.css">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Registro de cajas Box</title>
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
                        <h4>Sobre Nosotros</h4>
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
                <h5>Register Box</h5>
            </div>
            <form action="" class="form-register" name="form-register" method="POST" enctype="multipart/form-data" >
                <div class="conta">
                    <section class="l-q">
                        <label for="Name" class="label-name">
                            Nombre
                            <input type="text" placeholder="Nombre de la caja" size="45" maxlength="45" name="name_input">
                        </label>
                        <label for="code" class="label-code">
                            Codigo
                            <input type="text" placeholder="Codigo de la caja" size="8" maxlength="8" name="codigo_input">
                        </label>
                        <label for="price" class="label-price">
                            Precio
                            <input type="text"  placeholder="Precio de la caja" size="45" maxlength="45" name="precio_input">
                        </label>
                    </section>
                    <div class="line"></div>
                    <section class="r-q">
                        <label for="category" class="label-category" >
                            Categoria
                            <select name="category" id="">
                                <option selected="" value ="" disabled="disabled">Seleccionar</option>
                                <option value="Tecnologia">Tecnologia</option>
                                <option value="Accesorios">Accesorios</option>
                                <option value="Ropa">Ropa</option>
                            </select>
                        </label>
                        <label for="rank" class="label-rank">
                            Rango
                            <select name="rank" id="">
                                <option selected="" value ="" disabled="disabled">Seleccionar</option>
                                <option value="Dios">Dios</option>
                                <option value="SemiDios">SemiDios</option>
                                <option value="Olimpica">Olimpica</option>
                                <option value="Heroe">Heroe</option>
                            </select>
                        </label>
                        <label for="objetos" class="label-objetos">
                            Objetos
                            <select name="objetos" id="">
                                <option selected="" value ="" disabled="disabled">Seleccionar</option>
                                <option value="<?php echo $_SESSION['object']["name_object"]?>"><?php echo $_SESSION['object']["name_object"]?></option>
                                <option value="iPhone 13 PRO MAX">iPhone 13 PRO MAX</option>
                                <option value="Nike Air Jordan">Nike Air Jordan</option>
                                <option value="Nintendo Switch">Nintendo Switch</option>
                            </select>
                        </label><br>
                        <input type="file" name="imagen" id="">
                    </section>
                </div>

                <input type="submit" class="btn" name="Register" value="Registrar"></input>

                <?php 
                $name = $_POST['name_input'];
                $codigo = $_POST['codigo_input']; 
                $price = $_POST['precio_input'];
                $category = $_POST['category'];
                $rank = $_POST['rank'];
                $objetos = $_POST['objetos'];
                $imagen = $_POST['imagen'];
                $submit = $_POST['submit'];

                #validacion de nombre
                if (isset($name)){
                  if(empty($name)){
                    array_push($errores,"Error 000: El Nombre no puede estar vacio.");
                  }
                  if(strlen($name) < 3) {
                    array_push($errores,"Error 001:El Nombre debe tener un tamaño mayor a 3 letras.");
                  }if(preg_match($PatronUsuario,$name)){
                  }else{
                    array_push($errores,"Error 003: El Nombre no debe llevar caracteres especial.");
                  }
                  }else {
                        array_push($errores,"Error 002: El Nombre no existe.");
                      }

                 #validacion de codigo
                 if (isset($codigo)){
                  if(empty($codigo)){
                    array_push($errores,"Error 000: El Codigo no puede estar vacio.");
                  }
                  if(strlen($codigo) < 8) {
                    array_push($errores,"Error 001:El Codigo debe tener un tamaño de 8 caracteres.");
                  }if(preg_match($PatronCodigo,$codigo)){
                  }else{
                    array_push($errores,"Error 003: El Codigo solo puede tener Mayusculas y Numeros.");
                  }
                  }else {
                        array_push($errores,"Error 002: El Codigo no existe.");
                      }
                #validacion de precio
                if (isset($price)){
                  if(empty($price)){
                    array_push($errores,"Error 000: El Precio no puede estar vacio.");
                  }
                  if($price < 0) {
                    array_push($errores,"Error 001:El Precio debe ser mayor que 0.");
                  }
                  #if(preg_match($PatronPrecio,$Price)){
                  #}else{
                   # array_push($errores,"Error 003: El Precio debe ser decimal.");
                  #}
                  }else {
                        array_push($errores,"Error 002: El Codigo no existe.");
                      }
                #validacion de Rank
                if (isset($rank)){

                }else{
                    array_push($errores,"Error 002: Elige un Rango.");
                  }

                #validacion de Objetos
                if (isset($objetos)){

                }else{
                    array_push($errores,"Error 002: Elige un patrocinador.");
                  }
                  
                #validacion de Category
                if (isset($category)){

                }else{
                    array_push($errores,"Error 002: Elige una Categoria.");
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
                if(count($errores)>0){
                  echo "<div class='error'>";
                  for ($i=0; $i < count($errores); $i++) { 
                    echo "<li>".$errores[$i]."</li>";

                  } 
                }else{
                  $sql = mysqli_query($conexion, "SELECT `codigo` FROM `box` WHERE `codigo` = '$codigo'");
                  if($row = mysqli_fetch_array($sql)){
                    echo "<div class='error'><h4>¡Ya existe una caja con ese codigo!</h4></div>"; 
                  }else{
                    $nombreimagen = $_FILES['imagen']['name'];
                    $tmpimagen = $_FILES ['imagen']['tmp_name'];
                    $urlnueva = "img/".$nombreimagen;
                    if (is_uploaded_file($tmpimagen)){
                        copy($tmpimagen,$urlnueva);
                        $query = mysqli_query($conexion,"INSERT INTO `box` VALUES ('$codigo','$name','$price','$objetos','$rank','$category','$urlnueva')");
                        if ($query){
                            echo "<div class='correcto'><h4>¡Datos Cargados!</h4></div>"; 
                        } 
                    }else{
                      echo "<div class='error'><h4>¡Error al cargar!</h4></div>"; 
                    }
                  }
                }
                ?>

            </form>
        </section>

        <?php 
      
          
        ?>
        <section class="footer">
            <h5>Todos los derechos reservados 2021 GodBox</h5>
        </section>

    </main>

</body>

</html>