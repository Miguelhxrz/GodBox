<?php 
require_once('../controllers/header-controller.php');
require_once('../model/credit_card.php');
require_once('../model/user.php');
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
            
            <?php
            $id = $_POST['id'];
            $CC = new credit_card;
            $question = $CC->GetCCbyid($id);
            while ($fila = mysqli_fetch_array($question)){
                #`id`, `type`, `number`, `expiration date`, `cvv`?>
            
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
                            <input type="text" name="card_num" size="45" maxlength="45" class="email_input" value="<?php echo $fila['number']?>">
                        </label>
                            <label for="card_type" class="label-category">
                            Tipo de tarjeta de credito:
                            <select name="card_type" id="">
                                <option value="<?php echo $fila['type']?>"><?php echo $fila['type']?></option>
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
                            <input type="text" name="card_cvv" size="3" maxlength="3" class="email_input" value="<?php echo $fila['cvv']?>">
                        </label>
                        </section>
                    </div>

                    <input type="submit" class="btn" name="card_register" value="Registrar"></input>
                    <?php }?>
                    <?php 
                    
                    $credit_card = new credit_card();

  #Patterns
  $onlyNumbers = "/^[0-9]+$/";

  $errores = array();

  $PatronUsuario = "/^[a-zA-Z0-9\s-]+$/";
  $PatronCantidad = "/^[0-9]+$/";
  $PatronPrecio = "/^[0-9].+$/";
  $PatronID = "/^[A-Z]+$/";

  #variables
  $card_register = $_POST['card_register'];
  $card_id = $_POST['card_id'];
  $card_type = $_POST['card_type'];
  $card_num = $_POST['card_num'];
  $card_expiration = $_POST['card_expiration'];
  $array_expiration = explode("-",$card_expiration);
  $card_cvv = $_POST['card_cvv'];
      
  if(isset($card_register)) {

      #validacion del ID
      if (isset($card_id)) {
        if (empty($card_id)) {
          array_push($errores, "Error 077: El ID no puede estar vacio.");
        }else
        if (strlen($card_id) < 8) {
          array_push($errores, "Error 078:El ID debe tener un minimo de 8 numeros.");
        }else
        if (!preg_match($onlyNumbers,$card_id)) {
          array_push($errores, "Error 079: El ID solo debe contener los numeros.");
        }
      }

      #Validacion del typo de tarjeta
      if (isset($card_type)) {
        if (empty($card_type)) {
          array_push($errores, "Error 081: Debes seleccionar un tipo de tarjeta.");
        }
      }

      #validacion del numero de tarjeta
      if (isset($card_num)) {
        if (empty($card_num)) {
          array_push($errores, "Error 082: Debes digitar el numero de tu tarjeta.");
        }else
        if (strlen($card_num) > 19 || strlen($card_num) < 16 ) {
          array_push($errores, "Error 083: Verifique el numero de tarjeta, debe tener entre 16 y 18 numeros.");
        }else
        if (!preg_match($onlyNumbers, $card_num)) {
          array_push($errores, "Error 084: El campo de numero de tarjeta solo acepta numeros.");
        }
      }

      #validacion de fecha de vencimiento
      if(isset($card_expiration)) {
        if(empty($card_expiration)) {
          array_push($errores, "Error 085: Debe colocar la fecha de vencimiento de la tarjeta.");
        }else
        if($array_expiration[0] < 2022) {
          array_push($errores, "Error 086: La tarjeta esta expirada.");
        }
      }

      #validacion del cvv
      if(isset($card_cvv)) {
        if(empty($card_cvv)) {
          array_push($errores, "Error 087: Debes ingresar el codigo cvv de tu tarjeta.");
        }else
        if(strlen($card_cvv) < 3 || strlen($card_cvv) > 3) {
          array_push($errores, "Error 088: El codigo cvv debe contener 3 numeros.");
        }else
        if(!preg_match($onlyNumbers, $card_cvv)) {
          array_push($errores, "Error 089: El codigo cvv solo puede contener numeros.");
        }
      }
    
      #Errores
      if (count($errores) > 0) {
        echo "<div class='error'>
        <h3>Errores al Editar la Tarjeta</h3>";
        for ($i = 0; $i < count($errores); $i++) {
          echo "<li>" . $errores[$i] . "</li>";
        }
        echo "</div>
        <a class='volver-inven' href='../view/user_page.php'> <- Volver a mis datos</a>
        ";
        } else {

          $credit_card->setID($card_id);
          $credit_card->setType($card_type);
          $credit_card->setNum($card_num);
          $credit_card->setExpiration_date($card_expiration);
          $credit_card->setCvv($card_cvv);

          $result = $credit_card->UpdateCC();

            if($result==true){
                 header("location: ../view/user_page.php");
            }

        }
    }

?>

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