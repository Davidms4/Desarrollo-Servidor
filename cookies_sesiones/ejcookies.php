<?php
$nombre = $_COOKIE["user"] ?? "";
if ($nombre !== "") echo "Hola, " . htmlspecialchars($nombre);
else {
    setcookie("user", "David", time() + 1000);
    echo "Cookie creada. Recarga la página";
}
