<?php
class Productos{   
    private $nombre;
    private $precio;

    public function __construct($nombre,$precio) {
        $this->nombre = $nombre;
        $this->setPrecio($precio);
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precio){
        if ($precio < 0) {
            throw new Exception("El precio no puede ser negativo");           
        }else {
            $this->precio = $precio;
        }
    }

    public function __toString(){
        return "Nombre: " . $this->nombre  . " - Precio: " . $this->precio;
    }
}

?>
