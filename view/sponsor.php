<?php 
require_once('../model/sponsor.php'); 
            
$sponsor = new sponsor();

$question = $sponsor->ShowSponsor();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inventoy-sponsor.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Inventario</title>
</head>

<body>
    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="../assets/img/Logo-rezised.png" alt="" class="logoo">
                <a href="./index.php"></a>
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="./Boxes.php">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="./index.php">
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
        <h3>Patrocinadores</h3>
        <div class="container-inventory">
            <section class="item-title">
                <div class="item-1-1">
                    <h6>Rif</h6>
                </div>
                <div class="item-2-1">
                    <h6>Nombre</h6>
                </div>
                <div class="item-5-1">
                    <h6>Logo</h6>
                </div>
                <div class="item-3-1">
                    <h6>Correo Electronico</h6>
                </div>
                <div class="item-4-1">
                    <h6>Opciones</h6>
                </div>
            </section>
            <?php 
            while ($row = mysqli_fetch_array($question)){
            ?>
            <section class="item-title">
                <div class="item-1">
                    <h6><?php echo $row["rif"];?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $row["name"];?></h6>
                </div>
                <div class="item-5">
                    <h6></h6>
                </div>
                <div class="item-3">
                    <h6><?php echo $row["email"];?></h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="<?php echo $row["rif"]?>">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </button>
                    <?php 
                    $sponsorif = $_POST['rif'];
                    $submit = $_POST['submit'];
                    if(isset($submit)){
                    $result = $sponsor->deleteSponsor($sponsorif);
                    }
                    ?>
                    </form>

                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="<?php echo $row["rif"]?>">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                </div>
            </section>
            <?php };?>
            <div class="container-items">
            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>

            <section class="item-title">
                <div class="item-1">
                    <h6>J-12345678</h6>
                </div>
                <div class="item-2">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-5">
                    <img src="../assets/img/inte.png" alt="" class="imagen">
                </div>
                <div class="item-3">
                    <h6>Patrocinador@gmail.com</h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </form>
                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                    </button>
                </div>
            </section>
            </div>
        </div>
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