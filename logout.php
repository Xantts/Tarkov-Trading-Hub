<?php
session_start();

unset($_SESSION["login"]);
unset($_SESSION["nombre"]);
unset($_SESSION["esAdmin"]);

session_destroy();

header('Location: index.php');
?>
