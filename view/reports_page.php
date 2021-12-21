<?php require('../controllers/reports_page-controller.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/reports_page.css">
  <link rel="shortcut icon" href="../assets/icons/favicon.ico" type="image/x-icon">
  <title>GodBox | reportes</title>
</head>
<body>
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
            <a href="../../view/About-us.php">
                <h4>Sobre Nosotros</h4>
            </a>
        </div>
    </section>

    <section class="user__menu">
        
        <a href="../../view/login.php">
            <h4>Iniciar Sesion</h4>
        </a>
        <h3>o</h3>
        <a href="../../view/register_page.php">
            <h4>Registrarse</h4>
        </a>

    </section>
</nav>

    </header>
    
     <main class="container">
        <section class="panel__container">
          <articles class="admin__container">
            <div class="admin__profile">
              <figure class="admin__ico-container">
                <img src="../assets/icons/user-profile.png" alt="" title="">
              </figure>
              <h4 class="title">Username</h4>
            </div>
            <div class="select__reports">
                <div class="btn__report">Datos</div>
                <div class="btn__report">Transacciones</div>
                <div class="btn__report">inventario</div>
                <!-- <div class="btn__report">Mis productos </div>
                <div class="btn__report">Mis transacciones</div>
                <div class="btn__report">Inventario de cajas</div>
                <div class="btn__report">Inventario de productos</div>
                <div class="btn__report">Patrocinadores</div>
            </div> -->
        </articles>
      </section>

      <section class="reports__container">
          <h4 class="title">Datos 🔒</h4>
          <div class="put__reports">
            <div class="essencial__crud">
              <div class="crud username">
                <h4>Username:</h4> <h4 class="respuesta">username</h4>
                <img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar username">
              </div>
              <div class="crud password">
                <h4>Password:</h4> <h4 class="respuesta">123456789</h4>
                <img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar password">
              </div>
              <div class="crud email">
                <h4>Email:</h4> <h4 class="respuesta">username@domain.com</h4>
                <img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar email">
              </div>
            </div>
            <div class="other__crud">
              <div class="crud address">
                <h4>address:</h4> <h4 class="respuesta">adress - 423414521r </h4>
                <img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar address">
              </div>
              <div class="crud credit-card">
                <h4>tarjeta:</h4> <h4 class="respuesta">xxxxx-xxxx-xxxx</h4> 
                <img src="../assets/icons/bx-edit-alt.svg" alt="editar" title="editar address">
              </div>
            </div>
          </div>
      </section>
    </main>

    <footer class="footer">
      <h3 class="footer__text">Todos los derechos reservados 2021 GodBox</h3>
      <div class="footer__social-media">
        <div class="footer_img-contaienr"><img src="../assets/icons/twitter.png" alt="twitter"></div>
        <div class="footer_img-contaienr"><img src="../assets/icons/instagram.png" alt="instagram"></div>
        <div class="footer_img-contaienr"><img src="../assets/icons/facebook.png" alt="facebook"></div>
      </div>
    </footer>
</body>
</html>