<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/boxes.css">
    <title>GodBox | Boxes</title>
</head>

<body>
    <header class="header">
        <nav class="menu__container">
            <div class="logo__container">
                <img src="../assets/img/Logo-rezised.png" alt="Company logo">
            </div>
            <section class="basic__menu">
                <ul class="menu">
                    <li class="menu__item"> <a href="./Boxes.php">Cajas</a></li>
                    <li class="menu__item">
                        <a href="../index.php">
                            <img src="../assets/icons/Home.png" alt="">
                        </a>
                    </li>
                    <li class="menu__item"><a href="./About-us.php">Sobre Nosotros </a></li>
                </ul>
            </section>

            <section class="user__menu">
                <ul class="menu">
                    <li class="menu__item"><a href="./login.php">Iniciar sesión</a></li>
                    <li class="menu__item">o</li>
                    <li class="menu__item"><a href="./register_page.php">Registrar</a></li>
                </ul>
            </section>
        </nav>
    </header>

    <main class="container">

        <section class="search__container">
            <label for="rank">
      Rango
      <select id="rank" name='rank'>
        <option value="Nothing"></option>
        <option value="Olimpica">Olimpica</option>
        <option value="Heroe">Heroe</option>
        <option value="SemiDios">SemiDios</option>
        <option value="Dios">Dios</option>
      </select>
    </label>
            <label for="category">
      Categoria:
      <select id="category" name='category'>
        <option value="Nothing"></option>
        <option value="Tecnologia">Tecnologia</option>
        <option value="Ropa">Ropa</option>
        <option value="accesorios">accesorios</option>
        <option value="zapatos">zapatos</option>
      </select>
    </label>
            <label for="sponsor">
      Patrocinador
      <select id="sponsor" name='sponsor'>
        <option value="Nothing"></option>
        <option value="Nike">Nike</option>
        <option value="Ropa">Adidas</option>
        <option value="accesorios">Fila</option>
        <option value="zapatos">Apple</option>
      </select>
    </label>
        </section>

        <section class="box__container">

            <article class="box__card">
                <div class="box__image">
                    <img src="../assets/img/boxes/box_apple-god_resized.png" alt="">
                </div>
                <div class="box__description">
                    <h3>Categoria:</h3>
                    <h3>Codigo:</h3>
                    <h3>Patrocinador:</h3>
                    <h3>Rango:</h3>
                </div>
                <div class="box__button-buy">Comprar</div>
            </article>

            <article class="box__card">
                <div class="box__image">
                    <img src="../assets/img/boxes/box_apple-semidios-resized.png" alt="">
                </div>
                <div class="box__description">
                    <h3>Categoria:</h3>
                    <h3>Codigo:</h3>
                    <h3>Patrocinador:</h3>
                    <h3>Rango:</h3>
                </div>
                <div class="box__button-buy">Comprar</div>
            </article>

            <article class="box__card">
                <div class="box__image">
                    <img src="../assets/img/boxes/box_apple-heroe_resized.png" alt="">
                </div>
                <div class="box__description">
                    <h3>Categoria:</h3>
                    <h3>Codigo:</h3>
                    <h3>Patrocinador:</h3>
                    <h3>Rango:</h3>
                </div>
                <div class="box__button-buy">Comprar</div>
            </article>

            <article class="box__card">
                <div class="box__image">
                    <img src="../assets/img/boxes/box_apple-Olimpica_resized.png" alt="">
                </div>
                <div class="box__description">
                    <h3>Categoria:</h3>
                    <h3>Codigo:</h3>
                    <h3>Patrocinador:</h3>
                    <h3>Rango:</h3>
                </div>
                <div class="box__button-buy">Comprar</div>
            </article>

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