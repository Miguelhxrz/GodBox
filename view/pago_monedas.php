<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <link href="css/pago_monedas.css" rel="stylesheet">
    <title>GodBox - Pago</title>
</head>

<body>
    <div class="cuadro">
        <header class="header">
            <div class="logo__container">
                <img src="./img/Logo-rezised.png" alt="Company logo">
            </div>

            <nav class="menu__container">
                <section class="basic__menu">
                    <ul class="menu">
                        <li class="menu__item"><a href="./Boxes.html">Cajas</a> </li>
                        <li class="menu__item">
                            <a href="./index.html"> <img src="./icons/Home.png" alt=""></a>
                        </li>
                        <li class="menu__item"><a href="#">Sobre Nosotros</a> </li>
                    </ul>
                </section>
            </nav>

            <nav class="menu__container">
                <section class="user__menu">
                    <ul class="menu">
                        <li class="menu__item-icon"><img src="./icons/coin.png" alt="">
                            <a href="#"></a>
                        </li>
                        <li class="menu__item"><img src="./icons/user.png" alt="">
                            <a href="#"></a>
                        </li>
                    </ul>
                </section>
            </nav>
        </header>

        <main class="container">
            <section class="container-form">
                <div class="title-form">
                    <h2>Ingresa los datos de la tarjeta de credito para completar el pago</h2>
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
            </section>
    </div>
</body>

</html>