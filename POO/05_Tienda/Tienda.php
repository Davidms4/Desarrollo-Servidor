<?php
class Tienda{
    private $nombre;  
    private $productos;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->productos = [];
    }

    public function agregarProducto(Productos $producto){
        $this->productos[] = $producto;
    }

    public function Mostrar(){
        echo "<p>Nombre: " . $this->nombre . "</p>";
        foreach ($this->productos as $producto) {
            echo "<p>" . $producto . "</p>";
        }
    }
}

?>
