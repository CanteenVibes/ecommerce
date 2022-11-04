<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre || Canteen Vibes</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Canteen Vibes</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li><a href="about.php">Sobre</a></li>
          <li><a href="products.php">Produtos</a></li>
          <li><a href="cart.php">Ver Carrrinho</a></li>
          <li><a href="orders.php">Meus Pedidos</a></li>
          <li><a href="contact.php">Contato</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Minhha Conta</a></li>';
            echo '<li><a href="logout.php" translate="no">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php" translate="no">Login</a></li>';
            echo '<li><a href="register.php">Cadastre-se</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>Esse é um site feito para a agilidade e facilidade na hora de uma compra para uma cantina escolar. Devido a pouco tempo de intervalos escolares e os alunos consomem muito tempo em filas, isso foi feito para uma maior agilidade. </p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">Todos os direitos reservados Canteen Vibes &copy; 2022.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
