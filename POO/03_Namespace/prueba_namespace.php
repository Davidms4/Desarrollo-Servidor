<?php
require_once "Producto.php";
$producto1 = new \Tienda\Producto("Cuaderno");
echo $producto1->getNombre();
