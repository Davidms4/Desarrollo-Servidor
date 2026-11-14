<?php
session_start();
if (!isset($_SESSION["loginusu"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Zona privada</title></head><body>
<nav><a href="index.php">Inicio</a> | <a href="pag1.php">Página 1</a> | <a href="pag2.php">Página 2</a> | <a href="salir.php">Salir</a></nav><hr>
