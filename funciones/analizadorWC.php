<?php
function analizar(string $frase): void {
    $palabras = str_word_count($frase, 1);
    $letras = 0;
    foreach ($palabras as $palabra) {
        $longitud = strlen($palabra);
        $letras += $longitud;
        echo htmlspecialchars($palabra) . ": " . $longitud . " letras<br>";
    }
    echo "Letras totales: " . $letras . "<br>";
    echo "Cantidad de palabras: " . count($palabras);
}
analizar("Estoy aprendiendo PHP");
