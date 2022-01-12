<?php 
require_once('../model/connect_db.php');
require_once('../model/user.php');
    
$user = new user();

$username = $_SESSION['user'];

$coins = $user->getCoinsdb($username);
?>
<header class="header-a">
        <div class="container-header-a">

            <section class="logo-a">
                <img src="../assets/img/Logo-rezised.png" alt="" class="logoo">
                <a href="./index.html"></a>
            </section>

            <section class="center-title-a">
                <div class="boxes-link-a">
                    <a href="../view/Boxes.php">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header-a">
                    <a href="../index.php">
                        <img src="../assets/icons/icons8-ruins-50.png" alt="">
                    </a>
                </div>
                <div class="about-link-a">
                    <a href="../view/About-us.php">
                        <h4>Sobre nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="options-a">
                <div class="link-a">
                <ul class="btn-menu-a">
                    <a href="../view/buy_coins.php">
                        <img src="../assets/icons/coin.png" alt="" class="item-a">
                        <h3 class="name"><?php echo $coins?></h3>
                    </a>
                    <li class="item-nav-a"><img src="../assets/icons/casco.png" alt="" class="item-a">
                    <h3 class="name">Admin</h3>
                    <ul class="submenu-a">
                        <li><a href="../view/admin_page.php" class="config">Pagina Admin</a></li>
                        <li><a href="../view/admin_page.php" class="config">Mis Datos</a></li>
                        <li><a href="../view/transaciones_admin.php" class="config">Mis Transaciones</a></li>
                        <li><a href="../view/productos_admin.php" class="config">Mis Productos</a></li>
                        <li><a href="../view/card_register.php" class="Compra">Agregar Tarjeta</a></li>
                        <li><a href="../view/buy_coins.php" class="profil">Comprar LidGod</a></li>
                        <li><a href="../view/inventarios.php" class="config">Inventarios</a></li>
                        <li><a href="../view/registros.php" class="config">Registros</a></li>
                        <li><a href="../view/reportes_admin.php" class="config">Reportes</a></li>
                        <li><a href="../partials/logout.php" class="logout">Cerrar Sesión</a></li>
                    </ul>  
                    </li>
                    </ul>
                </div>
            </section>
        </div>
    </header>