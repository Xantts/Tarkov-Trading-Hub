<?php
session_start();
if (!isset($_SESSION['nombre'])) {
  header('Location: login.php');
  exit();
}
$username = $_SESSION['nombre'];
$saludo = $_SESSION["nombre"] . ". <a href='logout.php'>Cerrar sesión</a>";
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" href="../css/inventario.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventario - Tarkov Trading Hub</title>
  </head>

  <body>
      <?php require('cabecera.php');?>

    <main>
      <h1>Inventario</h1>
      <table>
        <thead>
          <tr>
            <th>Item</th>
            <th>Rareza</th>
            <th>Tamaño</th>
            <th>Cantidad</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>M4A1</td>
            <td>Común</td>
            <td>4x2</td>
            <td>5</td>
          </tr>
          <tr>
            <td>AK-74N</td>
            <td>Raro</td>
            <td>4x1</td>
            <td>2</td>
          </tr>
          <tr>
            <td>SA-58</td>
            <td>Épico</td>
            <td>6x2</td>
            <td>1</td>
          </tr>
        </tbody>
      </table>
    </main>
  </body>
</html>
