<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Ejercicio 5: Comparar tres notas</h1>

    <?php
    $nota1 = 7.5;
    $nota2 = 8.5;
    $nota3 = 6;

    echo "<p>Primera nota: $nota1</p>";
    echo "<p>Segunda nota: $nota2</p>";
    echo "<p>Tercera nota: $nota3</p>";

    if ($nota1 >= $nota2 && $nota1 >= $nota3) {
        echo "<p>La nota mayor es $nota1.</p>";
    } elseif ($nota2 >= $nota1 && $nota2 >= $nota3) {
        echo "<p>La nota mayor es $nota2.</p>";
    } else {
        echo "<p>La nota mayor es $nota3.</p>";
    }
    ?>
</body>
</html>