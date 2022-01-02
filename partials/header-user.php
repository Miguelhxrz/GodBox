<?php 

session_start();

$_SERVER['user'];

$coins = 0;

?>

<header class="header-u">
        <div class="container-header-u">
            <section class="logo-a">
                <img src="../assets/img/Logo-rezised.png" alt="">
            </section>

            <section class="center-title-u">
                <div class="boxes-link-u">
                    <a href="../view/Boxes.php">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header-u">
                    <a href="../index.php">
                        <img src="../assets/icons/Home.png" alt="">
                    </a>
                </div>
                <div class="about-link-u">
                    <a href="../view/About-us.php">
                        <h4>Sobre Nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="options-u">
                <div class="link-u">
                    <ul class="btn-menu-u">
                    <a href="../view/buy_coins.php">
                        <img src="../assets/icons/coin.png" alt="" class="item-u">
                        <h3 class="name"><?php echo $coins?></h3>
                    </a>
                    <li class="item-nav"><img src="../assets/icons/user.png" alt="" class="item-u">
                    <?php echo "<h3 class ='name'>".$_SESSION['user']."</h3>"?>
                    <ul class="submenu">
                        <li><a href="../view/user_page.php" class="datos">Mis Datos</a></li>
                        <li><a href="../view/transaciones_user.php" class="transaciones">Mis Transaciones</a></li>
                        <li><a href="../view/productos_user.php" class="productos">Mis Productos</a></li>
                        <li><a href="../view/buy_coins.php" class="Compra">Comprar LilGod</a></li>
                        <li><a href="../partials/logout.php" class="logout">Cerrar Sesión</a></li>
                    </ul>  
                    </li>
                    </ul>
                </div>
            </section>
        </div>
    </header>


