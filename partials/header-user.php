<?php 

session_start();

$_SERVER['user'];

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
                    <a href="../view/user.php">
                        <img src="../assets/icons/coin.png" alt="" class="item-u">
                        <h3 class="name">0</h3>
                    </a>
                    <li class="item-nav"><img src="../assets/icons/user.png" alt="" class="item-u">
                    <?php echo "<h3 class ='name'>".$_SESSION['user']."</h3>"?>
                    <ul class="submenu">
                        <li><a href="../view/user_Profile.php" class="profil">Perfil</a></li>
                        <li><a href="../view/userConfig.php" class="config">Configuración</a></li>
                        <li><a href="../view/buy_coins.php" class="Compra">Comprar LidGod</a></li>
                        <li><a href="../partials/logout.php" class="logout">Cerrar Sesión</a></li>
                    </ul>  
                    </li>
                    </ul>
                </div>
            </section>
        </div>
    </header>


