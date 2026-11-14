<?php
$valores = [];
for ($i = 0; $i < 100; $i++) {
    if (rand(0, 1) === 0) $valores[] = "M";
    else $valores[] = "F";
}
$recuento = ["M" => 0, "F" => 0];
foreach ($valores as $valor) $recuento[$valor]++;
foreach ($recuento as $letra => $cantidad) echo "$letra: $cantidad<br>";
