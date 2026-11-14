<?php
function horaValida(string $hora): bool {
    $partes = explode(":", $hora);
    if (count($partes) !== 3) return false;
    foreach ($partes as $parte) {
        if (strlen($parte) !== 2 || !ctype_digit($parte)) return false;
    }
    return $partes[0] <= 23 && $partes[1] <= 59 && $partes[2] <= 59;
}
$hora = "21:30:12";
$valida = horaValida($hora);
require "comprueba_hora.view.php";
