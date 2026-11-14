<?php
function esPalindromo(string $frase): bool {
    $texto = strtolower(str_replace(" ", "", $frase));
    $reves = "";
    for ($i = strlen($texto) - 1; $i >= 0; $i--) $reves .= $texto[$i];
    return $texto === $reves;
}
foreach (["ligar es ser agil", "Hola"] as $frase) {
    echo htmlspecialchars($frase) . ": " . (esPalindromo($frase) ? "Sí" : "No") . "<br>";
}
