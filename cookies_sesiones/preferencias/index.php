<?php
$nombre = $_COOKIE["nombreusu"] ?? "";
$color = $_COOKIE["colorusu"] ?? "";
$preferencias = is_string($nombre) && $nombre !== "" && is_string($color)
    && strlen($color) === 7 && $color[0] === "#" && ctype_xdigit(substr($color, 1));
if (!$preferencias) $color = "#ffffff";
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Inicio</title></head>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;">
<?php if ($preferencias) { ?>
<h1>Bienvenido, <?php echo htmlspecialchars($nombre); ?></h1>
<a href="borrar_prefs.php">Borrar preferencias</a>
<?php } else { ?><h1>Página de inicio</h1><?php } ?>
<a href="preferencias.php">Cambiar preferencias</a>
</body></html>
