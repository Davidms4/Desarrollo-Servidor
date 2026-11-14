<?php
$error = "";
$datos = [];
$aficiones = [];
$menu = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach (["nombre", "apellidos", "email", "url", "sexo", "convivientes"] as $campo) {
        $valor = $_POST[$campo] ?? "";
        $datos[$campo] = is_string($valor) ? trim($valor) : "";
        if ($datos[$campo] === "") $error = "Completa los campos obligatorios";
    }
    if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) $error = "Email no válido";
    if (!filter_var($datos["url"], FILTER_VALIDATE_URL)) $error = "URL no válida";
    if (filter_var($datos["convivientes"], FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]]) === false) $error = "Número de convivientes no válido";
    $aficiones = $_POST["aficiones"] ?? [];
    $menu = $_POST["menu"] ?? [];
    if (!is_array($aficiones) || !is_array($menu)) {
        $error = "Selecciones no válidas";
        $aficiones = $menu = [];
    }
} else $error = "Envía primero el formulario";
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Resumen</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></head>
<body><main class="container my-4"><h1>Resumen</h1>
<?php if ($error !== "") { ?>
<p><?php echo htmlspecialchars($error); ?></p>
<?php } else { ?>
<table class="table table-striped"><tr><th>Campo</th><th>Valor</th></tr>
<?php foreach ($datos as $campo => $valor) { ?>
<tr><th><?php echo htmlspecialchars($campo); ?></th><td><?php echo htmlspecialchars($valor); ?></td></tr>
<?php } ?>
<tr><th>Aficiones</th><td><?php foreach ($aficiones as $aficion) if (is_string($aficion)) echo htmlspecialchars($aficion) . "<br>"; ?></td></tr>
<tr><th>Menú</th><td><?php foreach ($menu as $plato) if (is_string($plato)) echo htmlspecialchars($plato) . "<br>"; ?></td></tr>
</table>
<?php } ?><a href="formulario.html">Volver</a></main></body></html>
