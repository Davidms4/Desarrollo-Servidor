<?php
function mayor(): int {
    $numeros = func_get_args();
    if (count($numeros) === 0) throw new Exception("Introduce al menos un número");
    $mayor = $numeros[0];
    foreach ($numeros as $numero) if ($numero > $mayor) $mayor = $numero;
    return $mayor;
}
echo mayor(3, 9, 4) . "<br>";
echo mayor(-8, -2, -5);
