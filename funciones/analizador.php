<?php
function analizar(string $frase): void {
    $partes = explode(" ", trim($frase));
    $palabras = [];
    foreach ($partes as $parte) if ($parte !== "") $palabras[] = $parte;
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
