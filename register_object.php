<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  $_SESSION['sponsor'];
  $errores = 0;
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
                <input type="text" name="name" placeholder="Nombre de Objeto" class="name" max="15" maxlength="15">
                <input type="text" name="cantidad" placeholder="Cantidad de objetos" class="cantidad" max="10" maxlength="10">
                <input type="text" name="price" placeholder="Precio" class="price" max="10" maxlength="10">
                <select name="Sponsor" id="">
                    <option selected="true" disabled="disabled">Seleccionar</option>
                    <option value="<?php echo $_SESSION['sponsor']["sponsor_name"]?>"><?php  echo($_SESSION['sponsor']["sponsor_name"]);?></option>
                    <option value="Nike">Nike</option>
                    <option value="Nintendo">Nintendo</option>
                </select>
                <select name="Rank" id="" require>
                    <option selected="true" disabled="disabled">Seleccionar</option>
                    <option value="Dios">Dios</option>
                    <option value="SemiDios">SemiDios</option>
                    <option value="Olimpica">Olimpica</option>
                    <option value="Heroe">Heroe</option>
                </select>
                <select name="Category" id="">
                <option selected="true" disabled="disabled">Seleccionar</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Ropa">Ropa</option>
                </select>
                <input type="submit" name="btn" class="btn" value="registrar">
            </form>
            <?php 
            #validacion de nombre (no funciona)
            if (isset($_POST['name'])) {
                if (empty($_POST['name'])) {
    
                  echo "<script>alert('ERROR: No puedes registrar el objeto sin nombre')</script>";
    
                  $errores= $errores + 1;
                } else {
    
                  if (preg_match("/^[a-zA-Z0-9\s-]+$/", $_POST['name'])) {
                  } else {
                    echo "<script>alert('ERROR: Nombre invalido')</script>";
    
                    $errores = $errores + 1;
                  }
                }
              }
            #validacion de cantidad
            if (isset($_POST['cantidad'])) {
                
                if (empty($_POST['cantidad'])) {
    
                  echo "<script>alert('ERROR: No puedes registrar el objeto sin su cantidad')</script>";
    
                  $errores = $errores + 1;
                } else {
    
                  if (preg_match("/^[0-9]+$/", $_POST['cantidad'])) {
                    echo "<script>alert('Correcto')</script>";
                  } else {
                    echo "<script>alert('ERROR: Solo numeros')</script>";
    
                    $errores = $errores + 1;
                  }
                }
              }
            #validacion de precio
            if (isset($_POST['price'])) {
                
                if (empty($_POST['price'])) {
    
                  echo "<script>alert('ERROR: No puedes registrar el objeto sin su precio')</script>";
    
                  $errores = $errores + 1;
                } else {
    
                  if (preg_match("/^[0-9].+$/", $_POST['price'])) {
                    echo "<script>alert('Correcto')</script>";
                  } else {
                    echo "<script>alert('ERROR: Solo numeros, Puede ser decimal')</script>";
    
                    $errores = $errores+ 1;
                  }
                }
              }
              if ($errores === 0) {
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
                echo "<script>alert('Objeto agregado')</script>";
              }
              }else{
                echo "<script>alert('ERROR: Verifica tus datos')</script>"; 
              } 
            ?>
        </section>

        <section class="footer">
            <h5>Todos los derechos reservados 2021 GodBox</h5>
        </section>
    </main>

</body>

</html>