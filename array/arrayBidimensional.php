<?php
$matriz = [];
$usados = [];
for ($f = 0; $f < 6; $f++) {
    for ($c = 0; $c < 9; $c++) {
        $numero = rand(100, 999);
        if (!in_array($numero, $usados)) {
            $matriz[$f][$c] = $numero;
            $usados[] = $numero;
        } else $c--;
    }
}
$mayor = $menor = $matriz[0][0];
$columnaMayor = $filaMenor = 0;
foreach ($matriz as $fila => $valores) {
    foreach ($valores as $columna => $numero) {
        if ($numero > $mayor) { $mayor = $numero; $columnaMayor = $columna; }
        if ($numero < $menor) { $menor = $numero; $filaMenor = $fila; }
    }
}
?>
<style>td {color: black; padding: 8px;} .azul {color: blue;} .verde {color: green;}</style>
<table border="1">
<?php foreach ($matriz as $fila => $valores) { ?>
<tr>
<?php foreach ($valores as $columna => $numero) {
    $clase = "";
    // En la intersección se da prioridad a la columna azul.
    if ($columna === $columnaMayor) $clase = "azul";
    elseif ($fila === $filaMenor) $clase = "verde";
?>
<td class="<?php echo $clase; ?>"><?php echo $numero; ?></td>
<?php } ?></tr>
<?php } ?></table>
