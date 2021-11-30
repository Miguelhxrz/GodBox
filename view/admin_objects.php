<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/admin_objects.css">
    <title>GodBox - User Objects</title>
</head>

<body>
    <header class="header">
        <div class="container-header">

            <section class="logo">
                <img src="../img/Logo-rezised.png" alt="" class="logoo">
                <a href="../index.html"></a>
            </section>

            <section class="center-title">
                <div class="boxes-link">
                    <a href="../Boxes.html">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="../index.html">
                        <img src="../icons/icons8-ruins-50.png" alt="">
                    </a>
                </div>
                <div class="about-link">
                    <a href="./">
                        <h4>Sobre nosotros</h4>
                    </a>
                </div>
            </section>



            <section class="options">
                <div class="link">
                    <div class="btn-menu">
                        <label for="btn-menu"><img src="../icons/casco.png" alt="" class="item"></label>
                        <a href="admin_objects.php"><img src="../icons/coin.png" alt="" class="item"></a>
                    </div>
                </div>
            </section>

        </div>
    </header>
    <div class="container-fondo">
        <!--<div class="user">
        <div class="box-container">
            <div class="box">
                    <img src="./icons/casco.png" alt="user">
                </div>
            </div>
        </div>
        <h3>Admin</h3>-->

        <section class="selecction">
            <div class="container">
                <div class="box">
                    <a href="#" class="button"><img src="../icons/buycart.png" alt=""> Mis Productos</a>
                    <a href="#" class="button"><img src="../icons/coin2.png" alt=""> Transacciones</a>
                </div>
            </div>
        </section>

        <section class="selecction">
            <div class="container">
                <div class="box">
                    <a href="#" class="button">Reporte de usuarios registrados</a>
                    <a href="#" class="button">Reporte de monedas vendidas</a>
                </div>
            </div>
        </section>

        <section class="selecction">
            <div class="container">
                <div class="box">
                    <a href="#" class="button">Reporte de productos ganados</a>
                    <a href="#" class="button">Reporte de canjes</a>
                </div>
            </div>
        </section>

        <section class="selecction">
            <div class="container">
                <div class="box">
                    <a href="./inventory.php" class="button">Inventario de Cajas</a>
                    <a href="./inventory-sponsor.php" class="button">Inventario de Sponsors</a>
                </div>
            </div>
        </section>
        <section class="selecction">
            <div class="container">
                <div class="box">
                    <a href="./inventory-objects.php" class="button">Inventario de Objetos</a>
                </div>
            </div>
        </section>

        <div class="objectsContainer">
            <div class="box">
                <div class="objects">
                    <div>
                        <h5>2 objetos</h5>
                    </div>
                    <img src="./img/object1.png" alt="objet">
                    <img src="./img/object2.png" alt="objet">
                </div>
            </div>
        </div>
    </div>

    
    <footer class="footer">
      <h3 class="footer__text">Todos los derechos reservados 2021 GodBox</h3>
      <div class="footer__social-media">
        <div class="footer_img-contaienr"><img src="../assets/icons/twitter.png" alt="twitter"></div>
        <div class="footer_img-contaienr"><img src="../assets/icons/instagram.png" alt="instagram"></div>
        <div class="footer_img-contaienr"><img src="../assets/icons/facebook.png" alt="facebook"></div>
      </div>
    </footer>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="menu">
            <nav>
                <a href="userPerfil.php" class="profil">Perfil</a>
                <a href="#" class="config">Configuración</a>
                <a href="userPerfil.php" class="profil">Comprar lidGod</a>
                <a href="#" class="config">Registrar patrocinador</a>
                <a href="#" class="config">Registrar objetos</a>
                <a href="#" class="config">Registrar producto</a>
                <a href="#" class="config">Registrar caja</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
</body>

</html>

