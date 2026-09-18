<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Contadores</h1>

    <p>Este contador va del 1 al 100:</p>

    <p>
        <?php
        for ($numero = 1; $numero <= 100; $numero++) {
            echo $numero;

            if ($numero < 100) {
                echo ",";
            }
        }
        ?>
    </p>

    <p>Este otro va del 10 al 0:</p>

    <p>
        <?php
        $numero = 10;

        while ($numero >= 0) {
            echo $numero;

            if ($numero > 0) {
                echo "-";
            }

            $numero--;
        }
        ?>
    </p>
</body>
</html>