<?php
$x = $_GET["x"] ?? "";
$y = $_GET["y"] ?? "";
$error = "";
if (!is_scalar($x) || !is_scalar($y) || !is_numeric($x) || !is_numeric($y)) {
    $error = "Introduce x e y numéricos en la URL, por ejemplo: calculadora.php?x=12&y=5";
} else {
    $suma = $x + $y;
    $resta = $x - $y;
    $multiplicacion = $x * $y;
    if ($y == 0) {
        $division = "No se puede dividir entre cero";
        $resto = "No se puede calcular el resto con divisor cero";
    } else {
        $division = $x / $y;
        $resto = fmod((float) $x, (float) $y);
    }
}
$ip = $_SERVER["REMOTE_ADDR"] ?? "";
$parametros = $_SERVER["QUERY_STRING"] ?? "";
$raiz = $_SERVER["DOCUMENT_ROOT"] ?? "";
require "calculadora.view.php";
