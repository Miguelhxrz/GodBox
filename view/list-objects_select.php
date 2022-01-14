<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/lista-objetos-seleccionar.css">
    <script src="../scripts/list-objects.js"></script>
    <title>GodBox | Lista de Objetos</title>
</head>

<body>
    <!-- Header -->
    <?php require_once('../controllers/header-controller.php'); include($header);
    error_reporting(0);
     ?>

    <main class="container">
        
        <h2 class="title">Agregar Objetos</h2>
        <section class="objects__container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form__items">
        <?php require_once('../controllers/list-objects_select-controller.php'); ?>
            <section class="items_container">
                <?php for ($i=0; $i < count($showitems); $i++) { 
                echo "<article class='item__card' id='item__card'>
                        <div class='item__card-select' id='item__card-select'>
                            <section class='card__info'>
                                <div class='card__info-title'>
                                    <p>Datos del objeto</p>
                                </div>
                                <ul class='card__info-dates'>
                                    <li><p>ID:</p>".$showitems[$i]['id']."</li>
                                    <li><p>Nombre:</p>".$showitems[$i]['name']."</li>
                                    <li><p>Cantidad:</p>".$showitems[$i]['stock']."</li>
                                    <li><p>Precio:</p>".$showitems[$i]['price']."</li>
                                    <li><p>Sponsor:</p>".$showitems[$i]['sponsor']."</li>
                                    <li><p>Rank:</p>".$showitems[$i]['rank']."</li>
                                    <li><p>Categoria:</p>".$showitems[$i]['category']."</li>
                                </ul>
                            </section>
                            <section class='card__add-container'>
                                <input type='checkbox' class='toCheck hidden' name='items[]' id='".$showitems[$i]['name']."' value =".$showitems[$i]['id'].">
                                <label for='".$showitems[$i]['name']."' class='item__card-check' id='item__card-check'></label>
                            </section>
                        </div>
                        <img src=".$showitems[$i]['image'].">
                </article> ";         
            }; ?> 

            </section>
            
            <input type="submit" name="finish_btn" class="form__btn" id="finish_btn" value="Finalizar">

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

</body>

</html>