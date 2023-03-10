<?php
session_start();

$usuariosValidos = [
    "user" => "userpass",
    "admin" => "adminpass"
];

$username = htmlspecialchars(trim(strip_tags($_POST["username"])));
$password = $_POST["password"];

if (isset($usuariosValidos[$username]) && $usuariosValidos[$username] === $password) {
    $_SESSION["login"] = true;
    $_SESSION["nombre"] = ($username === "admin") ? "Administrador" : "Usuario";
    
    if ($username === "admin") {
        $_SESSION["esAdmin"] = true;
    }

    if (isset($_GET["next"])) {
        $_SESSION["next"] = $_GET["next"];
    }
    else {
        $_SESSION["next"] = "index.php";
    }

    header("Location: " . $_SESSION["next"]);
}
else {
    echo "Error: nombre de usuario o contraseña incorrectos.";
    header("login.php");
}
?>