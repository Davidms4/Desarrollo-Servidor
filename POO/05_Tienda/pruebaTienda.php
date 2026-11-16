<?php
require_once "Productos.php";
require_once "ProductoRebajado.php";
require_once "Tienda.php";

$tienda1 = new Tienda("Bazar");
$producto1 = new Productos("Lapiz",2);
$productoRebajado1 = new ProductoRebajado("Libreta",5,20);
$producto1->setPrecio(1);
$tienda1->agregarProducto($producto1);
$tienda1->agregarProducto($productoRebajado1);
$tienda1->Mostrar();
try {
    $producto1->setPrecio(-2);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
