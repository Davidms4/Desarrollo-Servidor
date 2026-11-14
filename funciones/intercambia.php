<?php
function intercambia(&$a, &$b) {
    $antes = $a;
    $a = $b;
    $b = $antes;
}
$x = 5;
$y = 12;
intercambia($x, $y);
echo "X: $x - Y: $y";
