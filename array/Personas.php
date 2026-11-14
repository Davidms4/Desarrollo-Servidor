<?php
$personas = [
    ["nombre" => "David", "altura" => 170, "email" => "david@example.com"],
    ["nombre" => "Mateu", "altura" => 190, "email" => "mateu@example.com"],
    ["nombre" => "Cony", "altura" => 160, "email" => "cony@example.com"],
    ["nombre" => "Jose", "altura" => 170, "email" => "jose@example.com"],
    ["nombre" => "Dani", "altura" => 180, "email" => "dani@example.com"]
];
?>
<table border="1"><tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>
<?php foreach ($personas as $persona) { ?>
<tr><td><?php echo htmlspecialchars($persona["nombre"]); ?></td>
<td><?php echo $persona["altura"]; ?></td>
<td><?php echo htmlspecialchars($persona["email"]); ?></td></tr>
<?php } ?></table>
