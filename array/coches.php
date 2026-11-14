<?php
$coches = [
    "3333CCC" => ["Seat", "Ibiza", 5],
    "1111AAA" => ["Ford", "Focus", 5],
    "2222BBB" => ["Renault", "Clio", 3]
];
ksort($coches);
foreach ($coches as $matricula => $datos) {
    echo $matricula . " => " . $datos[0] . ", " . $datos[1] . ", " . $datos[2] . " puertas<br>";
}
