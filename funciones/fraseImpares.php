<?php
function imparesFrase(string $frase): string {
    $final = "";
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($i % 2 !== 0) $final .= $frase[$i];
    }
    return $final;
}
echo htmlspecialchars(imparesFrase("abcdef"));
