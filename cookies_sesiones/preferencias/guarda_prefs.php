<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"] ?? "";
    $color = $_POST["color"] ?? "";
    if (is_string($nombre) && trim($nombre) !== "" && is_string($color)
        && strlen($color) === 7 && $color[0] === "#" && ctype_xdigit(substr($color, 1))) {
        setcookie("nombreusu", $nombre, time() + 300);
        setcookie("colorusu", $color, time() + 300);
        header("Location: index.php");
        exit;
    }
}
echo 'Revisa los datos. <a href="preferencias.php">Volver</a>';
