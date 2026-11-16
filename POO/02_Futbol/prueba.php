<?php
require_once "Player.php";
require_once "Team.php";
$equipo1 = new Team("Atlético de Madrid");
$archivo = fopen("plantillas(1).csv", "r");
if ($archivo !== false) {
    fgetcsv($archivo, 0, ",");
    $linea = fgetcsv($archivo, 0, ",");
    while ($linea !== false) {
        if ($linea[1] === "Atlético de Madrid") {
            // El CSV usa día/mes/año. Lo convertimos a año-mes-día.
            $fecha = explode("/", $linea[6]);
            $nacimiento = $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
            $jugador = new Player($linea[4] . " " . $linea[5], $nacimiento, $linea[9], $linea[11], $linea[10]);
            $equipo1->SignPlayer($jugador);
        }
        $linea = fgetcsv($archivo, 0, ",");
    }
    fclose($archivo);
    $equipo1->Render();
} else {
    echo "No se ha podido abrir el CSV";
}
