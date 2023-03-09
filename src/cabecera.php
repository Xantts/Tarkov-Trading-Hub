<?php
    function login(){
        if (!isset($_SESSION['nombre'])) {
            header('Location: login.php');
            exit();
        }
        $username = $_SESSION['nombre'];
        $saludo = $_SESSION["nombre"] . ". <a href='logout.php'>Cerrar sesión</a>";
    }
?>

<header>
      <div class="logo">
        <a href="index.php"><img src="../img/logo_sin_fondo.PNG" alt="Logo" height="100" /></a>
      </div>
      <div class="menu">
        <ul>
          <li><a href="inventario.php">Inventario</a></li>
          <li><a href="mercado.php">Mercado</a></li>
          <li><a href="subastas.php">Subastas</a></li>
          <li><a href="comunidad.php">Comunidad</a></li>
        </ul>
      </div>
      <div class="user">
        <p>Bienvenido <?php echo $saludo; ?></p>
      </div>
</header>