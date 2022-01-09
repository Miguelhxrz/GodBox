<?php
  require_once('../model/credit_card.php');

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
          <figure>
            <img src='../assets/icons/close.png' alt='icon close' id='close'>
          </figure>";
          for ($i = 0; $i < count($errores); $i++) {
            echo "<li>" . $errores[$i] . "</li>";
          }
          echo $age;
          echo "</div>";
        } else {

          echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";
      

          $credit_card->setID($card_id);
          $credit_card->setType($card_type);
          $credit_card->setNum($card_num);
          $credit_card->setExpiration_date($card_expiration);
          $credit_card->setCvv($card_cvv);

          $result = $credit_card->addDataBase();

          header("location: ../index.php");
        }
    }
?>