<?php 

session_start();

$_SERVER['user'];

?>
<header class="header">
        <nav class="menu__container">
            <section class="logo__container">
                <img src="../assets/img/Logo-rezised.png" alt="">
            </section>

            <section class="basic__menu">
                <div class="boxes-link">
                    <a href="../view/Boxes.php">
                        <h4>Cajas</h4>
                    </a>
                </div>
                <div class="ico-header">
                    <a href="../index.php">
                        <img src="../assets/icons/Home.png" alt="">
                    </a>
                </div>
                <div class="about-link">
                    <a href="#">
                        <h4>Sobre Nosotros</h4>
                    </a>
                </div>
            </section>

            <section class="user__menu">
                <div class="user__menu-options">
                    <div class="user__menu-config">
                        <label for="wrap-menu__container">
                        <img src="../assets/icons/user.png" alt="user icon" class="item">
                        <?php echo "<h4>".$_SESSION['user']."</h4>" ?>
                        </label>
                        <input type="checkbox" name="wrap-menu" id="wrap-menu" class="wrap-menu">

                        <section class="wrapper__menu">
                            <nav class="wrapper__menu-options">
                                
                            </nav>
                        </section>

                    </div>
                    <div class="user__menu-money">
                        <a href="user.php" class="">
                            <img src="../assets/icons/coin.png" alt="coin icon" class="item">
                            <?php echo "<h4>0</h4>" ?>
                        </a>
                    </div>                    
                </div>
            </section>
        </nav>
        
    </header>

