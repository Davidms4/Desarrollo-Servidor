<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><title>Calculadora</title></head><body>
<h1>Calculadora</h1>
<?php if ($error !== "") { ?>
<p><?php echo htmlspecialchars($error); ?></p>
<?php } else { ?>
<ul>
<li>Suma: <?php echo $suma; ?></li>
<li>Resta: <?php echo $resta; ?></li>
<li>Resto: <?php echo $resto; ?></li>
<li>Multiplicación: <?php echo $multiplicacion; ?></li>
<li>División: <?php echo $division; ?></li>
</ul>
<?php } ?>
<h2>GET</h2><pre><?php echo htmlspecialchars(print_r($_GET, true)); ?></pre>
<h2>SERVER</h2><pre><?php echo htmlspecialchars(print_r($_SERVER, true)); ?></pre>
<p>Ordenador que hace la petición (REMOTE_ADDR): <?php echo htmlspecialchars($ip); ?></p>
<p>Parámetros (QUERY_STRING): <?php echo htmlspecialchars($parametros); ?></p>
<p>Raíz del sitio (DOCUMENT_ROOT): <?php echo htmlspecialchars($raiz); ?></p>
</body></html>
