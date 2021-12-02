<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pago_monedas.css">
    <link rel="shortcut icon" href="../assets/" type="image/x-icon">
    <title>GodBox - Comprar Monedas </title>
</head>

<body>

    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="../assets/img/Logo-rezised.png" alt="" class="logoo">
                <a href="../index.php"></a>
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
                    <a href="./login.php">
                        <h4>Iniciar sesion</h4>
                    </a>
                </div>
            </section>
        </div>
    </header>

    <main class="container">
        <section class="container-form">
            <div class="title-form">
                <h5>Datos de la tarjeta</h5> 
            </div>
            <form action="" class="form-register">
                    <div class="conta">
                        <section class="l-q">
                            <label for="id" class="label-id">
                            Identificación:
                            <input type="text"  size="45" maxlength="45" class="id_input">
                        </label>
                            <label for="Tipo de tarjeta" class="label-category">
                            Tipo de tarjeta de credito:
                            <select name="Tipo de tarjeta" id="">
                                <option selected="true" disabled="disabled">Select</option>
                                <option value="2">Visa</option>
                                <option value="3">Mastercad</option>
                            </select>
                        </label>
                        </section>
                        <div class="line"></div>
                        <section class="r-q">
                            <label for="Numero de tarjeta" class="label-email">
                            Numero de tarjeta de credito
                            <input type="text"size="45" maxlength="45" class="email_input">
                        </label>
                            <label for="fecha" class="label-birth">
                            Fecha de vencimiento
                            <input type="date" class="date">
                        </label>
                            <label for="codigo" class="codigo">
                            Codigo CVV
                            <input type="text"size="3" maxlength="3" class="email_input">
                        </label>
                        </section>
                    </div>

                    <input type="submit" class="btn" name="confirmar" value="Confirmar"></input>
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