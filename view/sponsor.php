<?php
require_once('../controllers/sponsor-controller.php');

error_reporting(0);

require_once('../model/sponsor.php');
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
                <div class="item-1">
                    <h6>Rif</h6>
                </div>
                <div class="item-2">
                    <h6>Nombre</h6>
                </div>
                <div class="item-3">
                    <h6>Correo Electronico</h6>
                </div>
            </section>
            <?php
            $question->Show();

            while ($row = mysqli_fetch_array($question)) {
            ?>
                <section class="item-title">
                    <div class="item-1">
                        <h6><?php echo $row['rif'] ?></h6>
                    </div>
                    <div class="item-2">
                        <h6><?php echo $row['name'] ?></h6>
                    </div>
                    <div class="item-3">
                        <h6><?php echo $row['email'] ?></h6>
                    </div>
                </section>
            <?php } ?>
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