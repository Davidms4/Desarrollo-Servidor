<?php
$usuarios = ["ana" => "clave1", "david" => "clave2"];
$usuario = $_POST["usuario"] ?? "";
$password = $_POST["password"] ?? "";
if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $password) {
    include "ok.php";
} else {
    if (isset($usuarios[$usuario])) $error = "La contraseña es incorrecta";
    else $error = "El usuario no existe; no se puede validar su contraseña";
    include "ko.php";
}
