<?php
$mensaje = "";
$ruta = "";
$dimensiones = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $archivo = $_FILES["archivo"] ?? null;
    if (!$archivo || $archivo["error"] !== UPLOAD_ERR_OK) {
        $mensaje = "No se ha podido recibir el archivo";
    } elseif ($archivo["size"] > 1000000) {
        $mensaje = "El archivo supera 1 MB";
    } else {
        $tipo = mime_content_type($archivo["tmp_name"]);
        $tipos = ["image/jpeg", "image/png"];
        $nombre = basename($archivo["name"]);
        $extension = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
        // Se comprueba type (enunciado), contenido y extensión antes de guardar.
        if (!in_array($archivo["type"], $tipos) || !in_array($tipo, $tipos)
            || !in_array($extension, ["jpg", "jpeg", "png"])) {
            $mensaje = "Solo se permiten imágenes JPEG o PNG";
        } else {
            $dimensiones = getimagesize($archivo["tmp_name"]);
            $destino = __DIR__ . "/subidas/" . $nombre;
            if ($dimensiones === false) $mensaje = "Imagen no válida";
            elseif (file_exists($destino)) $mensaje = "Ya existe un archivo con ese nombre";
            elseif (move_uploaded_file($archivo["tmp_name"], $destino)) {
                $ruta = "subidas/" . rawurlencode($nombre);
                $mensaje = "Archivo guardado correctamente";
            } else $mensaje = "No se pudo guardar. Comprueba los permisos de subidas";
        }
    }
}
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Subida de imágenes</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<?php if ($ruta !== "") { ?><meta http-equiv="refresh" content="5;url=subidaImagen.php"><?php } ?>
</head><body><main class="container my-4"><h1>Subir imagen</h1>
<form action="subidaImagen.php" method="post" enctype="multipart/form-data">
<label class="form-label">JPEG o PNG, hasta 1 MB<input class="form-control" type="file" name="archivo" accept="image/jpeg,image/png" required></label>
<button class="btn btn-primary">Subir</button></form>
<p><?php echo htmlspecialchars($mensaje); ?></p>
<?php if ($ruta !== "") { ?>
<p>Ruta y nombre: <?php echo htmlspecialchars("subidas/" . $nombre); ?></p>
<p>Anchura: <?php echo $dimensiones[0]; ?> px. Altura: <?php echo $dimensiones[1]; ?> px.</p>
<img class="img-fluid" src="<?php echo htmlspecialchars($ruta); ?>" alt="Imagen subida">
<p>Volverás al formulario dentro de 5 segundos.</p>
<?php } ?>
<p><a href="subidaImagen.php?ver=1">Ver imágenes guardadas</a></p>
<?php if (isset($_GET["ver"])) { ?>
<ul>
<?php foreach (scandir(__DIR__ . "/subidas") as $fichero) {
    if ($fichero === "." || $fichero === ".." || $fichero[0] === ".") continue;
    $rutaArchivo = __DIR__ . "/subidas/" . $fichero;
    if (!is_file($rutaArchivo) || !in_array(mime_content_type($rutaArchivo), ["image/jpeg", "image/png"])) continue;
?>
<li><a href="subidas/<?php echo rawurlencode($fichero); ?>"><?php echo htmlspecialchars($fichero); ?></a></li>
<?php } ?></ul>
<?php } ?></main></body></html>
