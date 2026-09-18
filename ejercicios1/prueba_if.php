<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Ejercicio 4: Comparar notas</h1>

    <?php
    $nota1 = 7.5;
    $nota2 = 8.5;

    echo "<p>Primera nota: $nota1</p>";
    echo "<p>Segunda nota: $nota2</p>";

    if ($nota1 > $nota2) {
        echo "<p>La primera nota es mayor: $nota1.</p>";
    } else {
        if ($nota2 > $nota1) {
            echo "<p>La segunda nota es mayor: $nota2.</p>";
        } else {
            echo "<p>Las dos notas son iguales.</p>";
        }
    }
    ?>
</body>
</html>