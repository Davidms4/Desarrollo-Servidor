<?php
function cuenta($a, $b) {
    for ($i = $a; $i <= $b; $i++) {
        echo $i;
        if ($i < $b) echo ", ";
    }
}
cuenta(10, 20);
