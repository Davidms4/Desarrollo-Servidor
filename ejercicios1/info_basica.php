<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información básica</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
    $nombre = "David";
    $anyoNacimiento = 2007; // Cambia este valor por tu año.
    ?>

    <main>
        <h1>Ejercicio 1: Información básica</h1>
        <p>Presentación personal utilizando variables en PHP.</p>

        <p class="resultado">
            Me llamo <?php echo $nombre; ?>
            y nací en el año <?php echo $anyoNacimiento; ?>.
        </p>
    </main>
</body>
</html>