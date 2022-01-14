<?php 
require_once('../controllers/sponsor-controller.php'); 
require_once('../controllers/header-controller.php');
error_reporting(0);
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
    <!-- Header -->
    <?php include($header); ?>

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
            <div class="container-items">
            <?php 
            $sponsor = new sponsor;
            $question = $sponsor->ShowSponsors();
            for ($i=0; $i< count($question); $i++){
            ?>
            <section class="item-title">
                <div class="item-1">
                    <h6><?php echo $question[$i]['rif'];?></h6>
                </div>
                <div class="item-2">
                    <h6><?php echo $question[$i]["name"];?></h6>
                </div>
                <div class="item-5">
                    <img src="<?php echo $question[$i]["image"]?>" class= "imagen" alt="">
                </div>
                <div class="item-3">
                    <h6><?php echo $question[$i]["email"];?></h6>
                </div>
                <div class="item-4">
                    <form action="" method="POST">
                    <input type="hidden" name="rif" value="<?php echo $question[$i]["rif"]?>">
                    <button type="submit" name ="submit" class="item-o">
                    <img src="../assets/icons/Eliminar-crud.png" alt="" class="img">
                    </button>
                    <?php 
                    $sponsorif = $_POST['rif'];
                    $submit = $_POST['submit'];
                    if(isset($submit)){
                        require('../CRUD/delete-sponsor.php');
                        echo '<meta http-equiv="refresh" content="0">';
                    }
                    ?>
                    </form>

                    <form action="../CRUD/register_sponsor-Update.php" method="POST">
                    <input type="hidden" name="rif" value="<?php echo $question[$i]["rif"]?>">
                    <button type="submit" class="item-o">
                    <img src="../assets/icons/Editar-crud.png" alt="" class="img">
                    </button>
                    </form>
                </div>
            </section>
            <?php }?>
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