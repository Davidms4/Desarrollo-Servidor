<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Ejercicio 3: Operadores</h1>
    <p>Resultados de las operaciones del enunciado:</p>

    <?php
    $num1 = 3;
    $num2 = 5;
    $num3 = 8;

    $num1 *= 4;

    echo "Resultado 1: ";
    echo $num1; // 12
    echo "<br>";

    echo "Resultado 2: ";
    echo $num1 <= $num2; // Falso: no muestra nada.
    echo "<br>";

    echo "Resultado 3: ";
    echo $num3 > $num1 and $num3 > $num2; // Falso.
    echo "<br>";

    echo "Resultado 4: ";
    echo $num3 > $num1 or $num3 > $num2; // Verdadero: muestra 1.
    echo "<br>";

    echo "Resultado 5: ";
    echo $num1 > $num2 xor $num1 > $num3; // Falso.
    echo "<br>";

    $num3--;

    echo "Resultado 6: ";
    echo $num3; // 7
    echo "<br>";

    $num3 += $num1;

    echo "Resultado 7: ";
    echo $num3; // 19
    ?>
</body>
</html>