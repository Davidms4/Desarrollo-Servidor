<?php
$archivo = fopen(__DIR__ . "/plantillas.csv", "r");
if ($archivo === false) exit("No se pudo abrir el CSV");
fgetcsv($archivo, 0, ",", '"', "");
$atletico = [];
while (($linea = fgetcsv($archivo, 0, ",", '"', "")) !== false) {
    if (($linea[1] ?? "") === "Atlético de Madrid") $atletico[] = $linea;
}
fclose($archivo);
function comparaDorsales($a, $b) { return intval($a[11]) <=> intval($b[11]); }
usort($atletico, "comparaDorsales");
?>
<table border="1"><tr><th>Dorsal</th><th>Nombre</th><th>Apellidos</th><th>Posición</th></tr>
<?php foreach ($atletico as $jugador) { ?>
<tr><?php foreach ([11, 4, 5, 10] as $posicion) { ?>
<td><?php echo htmlspecialchars($jugador[$posicion]); ?></td>
<?php } ?></tr>
<?php } ?></table>
