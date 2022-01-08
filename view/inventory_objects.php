<?php
require_once('../controllers/inventory-objects-controller.php');
require_once('../controllers/header-controller.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inventory.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>GodBox - Inventario Objetos</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <h3>Inventario de Objetos</h3>
        <div class="container-inventory">
            <section class="item-title">
                <div class="item-1-1">
                    <h6>ID</h6>
                </div>
                <div class="item-2-1">
                    <h6>Nombre</h6>
                </div>
                <div class="item-2-1">
                    <h6>Precio</h6>
                </div>
                <div class="item-2-1">
                    <h6>Patrocinador</h6>
                </div>
                <div class="item-2-1">
                    <h6>Categoria</h6>
                </div>
                <div class="item-2-1">
                    <h6>Rango</h6>
                </div>
                <div class="item-5-1">
                    <h6>Foto</h6>
                </div>
                <div class="item-4-1">
                    <h6>Opciones</h6>
                </div>
            </section>
        <div class="container-items">
            <?php 
            while ($fila= mysqli_fetch_array($question)){
            #`id`, `name`, `stock`, `price`, `sponsor`, `rank`, `category`, `image`
            ?>
            <section class="item-title">
                <div class="item-1">
                    <h6><?php echo $fila['id'];?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $fila['name']?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $fila['price']?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo  $fila['sponsor']?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $fila['category']?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $fila['rank']?></h6>
                </div>
                <div class="item-5">
                    <img src="<?php echo $fila['image']?>" alt="" class="imagen">
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $fila['id']?>">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    <?php 
                    $submit=$_POST['submit'];
                    if(isset($submit)){
                        require_once('../CRUD/delete-objects.php');
                     }?>
                    </form>
                    <form action="../CRUD/register_objects-update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $fila['id']?>">
                    <button type="submit" name ="submit"  class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    <?php 
                    $submit = $_POST['submit'];
                    if(isset($submit)){
                        require_once('../CRUD/register_objects-update.php.php');
                     }?>
                    </form>
                    </button>
                </div>
            </section>
            <?php }?>
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