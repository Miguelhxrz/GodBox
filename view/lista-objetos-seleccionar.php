<?php 
    require_once('../controllers/header-controller.php');
    require_once('../model/object.php');

    $object = new object_;

    $question = $object->ShowObjects();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/lista-objetos-seleccionar.css">
    <title>GodBox | Lista de Objetos</title>
</head>

<body>
    <!-- Header -->
    <?php include($header); ?>

    <main class="container">
        <h2 class="title">Agregar Objetos a Cajas</h2>
        <form action="" method="post" class="form-items">
        <section class="box__container">
        
        <?php while ($fila= mysqli_fetch_array($question)):?>
            <label class="box__card">
                <div class="box__image">
                    <img src="<?php echo $fila['image'] ?>" alt="">
                </div>
                <div class="box__description">
                    <h3>Nombre: <?php echo " " ; echo $fila['name'] ?></h3>
                    <h3>Precio: <?php echo " " ; echo $fila['price'] ?></h3>
                    <h3>Categoria: <?php echo " " ;echo $fila['category'];?></h3>
                    <h3>Patrocinador: <?php echo " " ; echo $fila['sponsor']?></h3>
                    <h3>Rango: <?php echo " " ; echo $fila['rank'] ?></h3>
                </div>
                <div class="box__button-buy"><input type="checkbox" name="<?php echo $fila['id']?>" value="<?php echo $fila['name']?>"></div>
            </label>
        <?php 
        $name = $fila['id'];
        endwhile;
        ?>
        </section>
        <input type="submit" name="btn" value="Seleccionar">
        </form>

        <?php 
        
        ?>
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

</body>

</html>