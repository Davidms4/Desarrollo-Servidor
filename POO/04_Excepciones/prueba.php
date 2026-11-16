<?php
require_once "NotaInvalida.php";
function comprobarNota($nota) {
    if ($nota >= 0 && $nota <= 10) {
        return "Nota válida";
    } else {
        throw new NotaInvalida("La nota debe estar entre 0 y 10");
    }
}
try {
    echo comprobarNota(12);
} catch (NotaInvalida $e) {
    echo $e->getMessage();
} finally {
    echo "<br>Comprobación terminada";
}
