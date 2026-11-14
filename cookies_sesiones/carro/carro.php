<?php
session_start();
$productos = [
    1 => ["nombre" => "Zapatillas Nike", "precio" => 60],
    2 => ["nombre" => "Sudadera Domyos", "precio" => 15],
    3 => ["nombre" => "Pala de pádel Vairo", "precio" => 50],
    4 => ["nombre" => "Pelota de baloncesto Molten", "precio" => 20]
];
if (!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
$idElegido = $_GET["id"] ?? "";
if (is_string($idElegido) && isset($productos[$idElegido])) {
    $_SESSION["carrito"][] = $productos[$idElegido];
    header("Location: carro.php");
    exit;
}
$total = 0;
foreach ($_SESSION["carrito"] as $producto) $total += $producto["precio"];
$_SESSION["total"] = $total;
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Carrito</title></head><body>
<h1>Catálogo</h1><ul>
<?php foreach ($productos as $id => $producto) { ?>
<li><a href="carro.php?id=<?php echo $id; ?>"><?php echo htmlspecialchars($producto["nombre"]) . " (" . $producto["precio"] . " euros)"; ?></a></li>
<?php } ?></ul>
<h2>Carrito</h2><ul>
<?php foreach ($_SESSION["carrito"] as $producto) { ?>
<li><?php echo htmlspecialchars($producto["nombre"]) . ": " . $producto["precio"] . " euros"; ?></li>
<?php } ?></ul>
<p>Total: <?php echo $_SESSION["total"]; ?> euros</p></body></html>
