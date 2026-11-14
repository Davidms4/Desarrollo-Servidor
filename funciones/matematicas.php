<?php
// Posiciones desde cero. Se trabaja con la magnitud, sin contar el signo.
function digitos(int $num): int {
    return strlen(ltrim(strval($num), "-"));
}
function digitoN(int $num, int $pos): int {
    $texto = ltrim(strval($num), "-");
    if ($pos < 0 || $pos >= strlen($texto)) throw new Exception("Posición fuera de rango");
    return intval($texto[$pos]);
}
function quitaPorDetras(int $num, int $cant): int {
    if ($cant < 0) throw new Exception("Cantidad negativa");
    $texto = ltrim(strval($num), "-");
    $longitud = strlen($texto) - $cant;
    if ($longitud <= 0) return 0;
    $resultado = intval(substr($texto, 0, $longitud));
    return $num < 0 ? -$resultado : $resultado;
}
function quitaPorDelante(int $num, int $cant): int {
    if ($cant < 0) throw new Exception("Cantidad negativa");
    $texto = ltrim(strval($num), "-");
    $resultado = intval(substr($texto, $cant));
    return $num < 0 ? -$resultado : $resultado;
}
echo digitos(5824) . "<br>";
echo digitoN(5824, 2) . "<br>";
echo quitaPorDetras(5824, 2) . "<br>";
echo quitaPorDelante(5824, 1);
