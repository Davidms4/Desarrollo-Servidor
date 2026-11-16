<?php
class Persona {
    private $dni;
    private $nombre;
    private $email;
    public function __construct($dni, $nombre, $email) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->email = $email;
    }
    public function getDni() { return $this->dni; }
    public function getNombre() { return $this->nombre; }
    public function getEmail() { return $this->email; }
    public function setDni($dni) { $this->dni = $dni; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setEmail($email) { $this->email = $email; }
    public function Mostrar() {
        echo "<p>" . $this->dni . " - " . $this->nombre . " - " . $this->email . "</p>";
    }
}
