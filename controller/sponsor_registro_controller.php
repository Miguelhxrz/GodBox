<?php
$errores = array();
$patron_id = "/^(V|E|v|e|J|P|G|j|p|g|R|r)-[0-9]+$/";
$patron_email = "/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/";
$patron_name = "/^[a-zA-Z0-9\s-]+$/";


error_reporting(0);

            $sponsor_name = $_POST['name_input'];
            $rif = $_POST['rif_input'];
            $email = $_POST['email_input'];
            $register = $_POST['register'];


            if(isset($register)){

            #validacion de rif
            if (isset($rif)){
              if($rif == ''){
                array_push($errores,"Error 000: El Rif no puede estar vacio.");
              }
              if(strlen($rif) < 3) {
                array_push($errores,"Error 001:El Rif debe tener un tamaño mayor a 3 letras.");
              }if(preg_match($patron_id,$rif)){
              }else{
                array_push($errores,"Error 003: El Rif debe ser de esta manera: V,E,R,J,P ó G-12345678.");
              }
              }else {
                    array_push($errores,"Error 002: El Rif no existe.");
                  }

            #validacion name
            if (isset($sponsor_name)){
              if($sponsor_name == ''){
                array_push($errores,"Error 000: El Nombre no puede estar vacio.");
              }
              if(strlen($sponsor_name) < 3) {
                array_push($errores,"Error 001:El Nombre debe tener un tamaño mayor a 3 letras.");
              }if(preg_match($patron_name ,$sponsor_name)){
              }else{
                array_push($errores,"Error 003: El Nombre no puede contener caracteres especiales.");
              }
              }else {
                    array_push($errores,"Error 002: El Nombre no existe.");
                  }

            #validacion email
            if (isset($email)){
              if($email == ''){
                array_push($errores,"Error 000: El Correo no puede estar vacio.");
              }
              if(strlen($email) < 15) {
                array_push($errores,"Error 001:El Correo debe tener un tamaño mayor a 15 letras.");
              }if(preg_match($patron_email, $email)){
              }else{
                array_push($errores,"Error 003: Dato invalido al escribir el correo.");
              }
              }else {
                    array_push($errores,"Error 002: El Nombre no existe.");
                  }

            #Errores
            if(count($errores)>0){
              echo "<div class='error'>";
              for ($i=0; $i < count($errores); $i++) { 
                echo "<li>".$errores[$i]."</li>";

              } 
            }else{
                echo "<div class='correcto'><h4>¡Todo correcto!</h4></div>";

                require_once('../model/sponsor.php');
            
                $sponsor = new sponsor();
            
                $sponsor->setName($sponsor_name);
                $sponsor->setRif($rif);
                $sponsor->setEmail($email);
            
                $sponsor->addDataBase(); 
            
                header("location: ../view/sponsor.php");
              }
            } 
?>