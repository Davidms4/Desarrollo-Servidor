<?php
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["login"] ?? "";
    $password = $_POST["password"] ?? "";
    $usuarios = file(__DIR__ . "/usuarios.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($usuarios === false) $error = "No se pudo leer usuarios.txt";
    else {
        foreach ($usuarios as $usuario) {
            $datos = explode(":", $usuario, 2);
            if (count($datos) === 2 && $login === $datos[0] && $password === $datos[1]) {
                $_SESSION["loginusu"] = $login;
                header("Location: index.php");
                exit;
            }
        }
        $error = "El login o la contraseña son incorrectos";
    }
}
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Login</title></head><body>
<p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
<form method="post" action="login.php">
<label>Usuario <input name="login" required></label>
<label>Contraseña <input type="password" name="password" required></label>
<button>Entrar</button></form></body></html>
