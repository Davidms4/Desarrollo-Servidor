<?php
$numeros = [];
while (count($numeros) < 50) {
    $numero = rand(0, 99);
    if (!in_array($numero, $numeros)) $numeros[] = $numero;
}
sort($numeros);
?>
<ul>
<?php foreach ($numeros as $numero) { ?>
<li><?php echo $numero; ?></li>
<?php } ?>
</ul>
<?php
echo "Mayor: " . $numeros[count($numeros) - 1] . "<br>";
echo "Menor: " . $numeros[0] . "<br>";
echo "Media: " . array_sum($numeros) / count($numeros);
