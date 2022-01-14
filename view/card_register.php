<?php
require_once('../controllers/header-controller.php');
require_once('../model/user.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/card_register.css">
    <script src="../scripts/helper.js"></script>
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <title>GodBox - registro de tarjeta </title>
</head>

<body>
       <!-- Header -->
       <?php include($header); ?>

    <main class="container">
        <section class="container-form">
            <div class="title-form">
                <h5>Datos de la tarjeta</h5> 
            </div>
            <h3 class="subtitle">Información Necesaria</h3>
            <form action="" class="form-register" name="form-register" method="POST" >
                    <div class="conta">
                        <section class="l-q">
                            <?php
                                $user = new user;
                                $question = $user->GetByUsername($_SESSION['user']);
                                while ($row = mysqli_fetch_array($question)){
                            ?>
                            <input type="hidden" name="card_id" size="45" maxlength="45" class="label-email" value="<?php echo $row['id']?>">
                            <?php }?>
                            <label for="card_num" class="label-email">
                            Numero de tarjeta de credito
                            <input type="text" name="card_num" size="45" maxlength="45" class="email_input">
                        </label>
                            <label for="card_type" class="label-category">
                            Tipo de tarjeta de credito:
                            <select name="select" id="">
                                <option value="">Selecciona una opcion</option>
                                <option value="Visa">Visa</option>
                                <option value="Mastercard">Mastercad</option>
                            </select>
                        </label>
                        </section>
                        <div class="line"></div>
                        <section class="r-q">
                            <label for="card_expiration" class="label-birth">
                            Fecha de vencimiento
                            <input type="date" name="card_expiration" class="date">
                        </label>
                            <label for="card_cvv" class="codigo">
                            Codigo CVV
                            <input type="text" name="card_cvv" size="3" maxlength="3" class="email_input">
                        </label>
                        </section>
                    </div>

                    <input type="submit" class="btn" name="card_register" value="Registrar"></input>

                    <?php require_once('../controllers/card_register-controller.php'); ?>

            </form>
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