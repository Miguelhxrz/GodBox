<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
$_SESSION['object'];
$errores = 0;
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
            <form action="" class="form-register" name="form-register" method="POST">
                <div class="conta">
                    <section class="l-q">
                        <label for="Name" class="label-name">
                            Nombre
                            <input type="text" placeholder="Nombre de la caja" size="45" maxlength="45" name="name_input">
                        </label>
                        <label for="code" class="label-code">
                            Codigo
                            <input type="text" placeholder="Codigo de la caja" size="45" maxlength="45" name="codigo_input">
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
                                <option selected="true" disabled="disabled">Seleccionar</option>
                                <option value="Tecnologia">Tecnologia</option>
                                <option value="Accesorios">Accesorios</option>
                                <option value="Ropa">Ropa</option>
                            </select>
                        </label>
                        <label for="rank" class="label-rank">
                            Rango
                            <select name="rank" id="">
                                <option selected="true" disabled="disabled">Seleccionar</option>
                                <option value="Dios">Dios</option>
                                <option value="SemiDios">SemiDios</option>
                                <option value="Olimpica">Olimpica</option>
                                <option value="Heroe">Heroe</option>
                            </select>
                        </label>
                        <label for="objetos" class="label-objetos">
                            Objetos
                            <select name="objetos" id="">
                                <option selected="true" disabled="disabled">Seleccionar</option>
                                <option value="<?php echo $_SESSION['object']["name_object"]?>"><?php echo $_SESSION['object']["name_object"]?></option>
                                <option value="iPhone 13 PRO MAX">iPhone 13 PRO MAX</option>
                                <option value="Nike Air Jordan">Nike Air Jordan</option>
                                <option value="Nintendo Switch">Nintendo Switch</option>
                            </select>
                        </label>
                    </section>
                </div>

                <input type="submit" class="btn" name="Register" value="Registrar"></input>

            </form>
        </section>

        <?php 
        #validacion de nombre (no funciona)
        if (isset($_POST['name_input'])) {
            if (empty($_POST['name_input'])) {

              echo "<script>alert('ERROR: No puedes registrar el objeto sin nombre')</script>";

              $errores = $errores + 1;
            } else {

              if (preg_match("/^[a-zA-Z0-9\s-]+$/", $_POST['name_input'])) {
              } else {
                echo "<script>alert('ERROR: Nombre invalido')</script>";

                $errores = $errores + 1;
              }
            }
          }
        #validacion de codigo
        if (isset($_POST['codigo_input'])) {
                
            if (empty($_POST['codigo_input'])) {

              echo "<script>alert('ERROR: No puedes registrar el objeto sin su cantidad')</script>";

              $errores = $errores + 1;
            } else {

              if (preg_match("/^[A-Z0-9]+$/", $_POST['codigo_input'])) {
                echo "<script>alert('Correcto')</script>";
              } else {
                echo "<script>alert('ERROR: Solo Acepta Mayusculas y numeros')</script>";

                $errores = $errores + 1;
              }
            }
          }
        #validacion de precio
        if (isset($_POST['precio_input'])) {
                
            if (empty($_POST['precio_input'])) {

              echo "<script>alert('ERROR: No puedes registrar el objeto sin su precio')</script>";

              $errores = $errores + 1;
            } else {

              if (preg_match("/^[0-9].+$/", $_POST['precio_input'])) {
                echo "<script>alert('Correcto')</script>";
              } else {
                echo "<script>alert('ERROR: Solo numeros, Puede ser decimal')</script>";

                $errores = $errores+ 1;
              }
            }
          }
          if ($errores === 0) {
            session_start();

            $_SESSION['box_name'] = $_POST['name'];

            if (isset($_SESSION['box'])) {
              $_SESSION['box'] = array();
            }
            $name = $_POST['name_input'];
            $codigo = $_POST['codigo_input']; 
            $price = $_POST['precio_input'];
            $category = $_POST['category'];
            $rank = $_POST['rank'];
            $objetos = $_POST['objetos'];

            $_SESSION['box'] = array(
                "name" => $name,
                "codigo" => $codigo,
                "price" => $price,
                "category" => $category,
                "rank" => $rank,
                "objetos" => $objetos
            ); 
          echo $_SESSION['box']["sponsor"];
          if (isset($_SESSION['box'])){
            echo "<script>alert('Caja agregada')</script>";
          }
          }else{
            echo "<script>alert('ERROR: Verifica tus datos')</script>"; 
          } 
        ?>
        <section class="footer">
            <h5>Todos los derechos reservados 2021 GodBox</h5>
        </section>

    </main>

</body>

</html>