<?php
require_once "Productos.php";

class ProductoRebajado extends Productos{  
    private int $descuento;

    public function __construct($nombre,$precio,int $descuento) {
        parent::__construct($nombre,$precio);
        $this->descuento = $descuento;
    }

    public function precioFinal(){
        $descuento = $this->descuento / 100;
        $aplicado = 1 - $descuento;
        $total = $this->getPrecio() * $aplicado;
        return $total;
    }

    public function __toString(){
        return parent::__toString() . " - Descuento: " . $this->descuento  . " - Precio Final: " . $this->precioFinal();
    }
}

?>
