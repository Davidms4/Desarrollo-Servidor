<?php
session_start();
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["borrar"])) {
        unset($_SESSION["alumnos"]);
        header("Location: calificaciones.php");
        exit;
    }
    $nombre = $_POST["nombre"] ?? "";
    $notas = $_POST["notas"] ?? [];
    $validas = is_string($nombre) && trim($nombre) !== "" && is_array($notas) && count($notas) === 3;
    if ($validas) {
        foreach ($notas as $nota) {
            if (!is_numeric($nota) || $nota < 0 || $nota > 10) $validas = false;
        }
    }
    if ($validas) {
        if (!isset($_SESSION["alumnos"])) $_SESSION["alumnos"] = [];
        $_SESSION["alumnos"][trim($nombre)] = $notas;
        header("Location: calificaciones.php");
        exit;
    } else $mensaje = "Revisa el nombre y las tres notas (0 a 10)";
}
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Calificaciones DWES</title></head><body>
<h1>Calificaciones DWES</h1><p><?php echo htmlspecialchars($mensaje); ?></p>
<form method="post" action="calificaciones.php">
<label>Nombre <input name="nombre" required></label>
<?php for ($i = 1; $i <= 3; $i++) { ?>
<label>Trimestre <?php echo $i; ?><input type="number" name="notas[]" min="0" max="10" step="0.01" required></label>
<?php } ?><button>Guardar</button></form>
<p>Al guardar el mismo nombre se actualizan sus notas.</p>
<table border="1"><tr><th>Alumno</th><th>Primera</th><th>Segunda</th><th>Tercera</th><th>Media</th></tr>
<?php foreach ($_SESSION["alumnos"] ?? [] as $nombre => $notas) { ?>
<tr><td><?php echo htmlspecialchars($nombre); ?></td>
<?php foreach ($notas as $nota) { ?><td><?php echo htmlspecialchars($nota); ?></td><?php } ?>
<td><?php echo array_sum($notas) / count($notas); ?></td></tr>
<?php } ?></table>
<form method="post" action="calificaciones.php"><button name="borrar" value="1">Borrar los datos</button></form>
</body></html>
