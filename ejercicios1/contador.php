<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
    for ($numero = 1; $numero <= 100; $numero++) {
        echo $numero;

        if ($numero < 100) {
            echo ",";
        }
    }

    echo "<br>";

    $numero = 10;

    while ($numero >= 0) {
        echo $numero;

        if ($numero > 0) {
            echo "-";
        }

        $numero--;
    }
    ?>
</body>
</html>