<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área del círculo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
    define("PI", 3.1416);

    $radio = 3.5;
    $area = PI * $radio * $radio;
    ?>

    <main>
        <h1>Ejercicio 2: Área del círculo</h1>
        <p>
            Calculamos el área de un círculo con radio
            <?php echo $radio; ?> mediante la fórmula π × radio².
        </p>

        <p class="resultado">
            El área del círculo es
            <?php echo number_format($area, 2, ".", ""); ?>.
        </p>
    </main>
</body>
</html>