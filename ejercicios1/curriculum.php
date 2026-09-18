<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Currículum</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Mi currículum</h1>

    <?php
    $estudios_es = "Estoy estudiando segundo de Desarrollo de Aplicaciones Web.";
    $idiomas_es = "Aquí escribiré los idiomas que hablo.";

    $estudios_va = "Estic estudiant segon de Desenvolupament d'Aplicacions Web.";
    $idiomas_va = "Ací escriuré els idiomes que parle.";

    $estudios_en = "I am studying the second year of Web Application Development.";
    $idiomas_en = "I will write the languages I speak here.";

    $idioma = "es";
    $estudios = "estudios_" . $idioma;
    $idiomas = "idiomas_" . $idioma;

    echo "<h2>Español</h2>";
    echo "<p>" . $$estudios . "</p>";
    echo "<p>" . $$idiomas . "</p>";

    $idioma = "va";
    $estudios = "estudios_" . $idioma;
    $idiomas = "idiomas_" . $idioma;

    echo "<h2>Valencià</h2>";
    echo "<p>" . $$estudios . "</p>";
    echo "<p>" . $$idiomas . "</p>";

    $idioma = "en";
    $estudios = "estudios_" . $idioma;
    $idiomas = "idiomas_" . $idioma;

    echo "<h2>English</h2>";
    echo "<p>" . $$estudios . "</p>";
    echo "<p>" . $$idiomas . "</p>";
    ?>
</body>
</html>