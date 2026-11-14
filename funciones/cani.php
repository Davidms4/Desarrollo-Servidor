<?php
function cani(string $frase): string {
    $resultado = "";
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($i % 2 === 0) $resultado .= strtoupper($frase[$i]);
        else $resultado .= strtolower($frase[$i]);
    }
    return $resultado;
}
echo htmlspecialchars(cani("estoy estudiando"));
