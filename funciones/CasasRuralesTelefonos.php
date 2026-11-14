<?php
$archivo = fopen(__DIR__ . "/casas_rurales.csv", "r");
if ($archivo === false) { exit("No se pudo abrir el CSV"); }
fgetcsv($archivo, 0, ";", '"', "");
$descartadas = 0;
?>
<table border="1"><tr><th>Id</th><th>Localidad</th><th>Nombre</th><th>Teléfono</th></tr>
<?php
while (($linea = fgetcsv($archivo, 0, ";", '"', "")) !== false) {
    $telefono = trim($linea[9] ?? "");
    if ($telefono === "" || $telefono === "0") { $descartadas++; continue; }
    echo "<tr>";
    foreach ([0, 1, 3, 9] as $posicion) echo "<td>" . htmlspecialchars($linea[$posicion] ?? "") . "</td>";
    echo "</tr>";
}
fclose($archivo);
?>
</table>
<p>Casas descartadas: <?php echo $descartadas; ?></p>
