<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Personas y estudiantes</title></head>
<body>
<?php
require_once "Persona.php";
require_once "Estudiante.php";
$persona = new Persona("11111111A", "Ana", "ana@example.com");
$estudiante = new Estudiante("22222222B", "David", "david@example.com", 123);
$persona->setNombre("Laura");
$estudiante->setNumExpediente(456);
$persona->Mostrar();
$estudiante->Mostrar();
?>
</body></html>
