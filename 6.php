<?php
function figura($caracter, $numero) {
    for ($i = 1; $i <= $numero; $i++) {
        echo str_repeat($caracter, 2 * $i - 1) . "\n";
    }
    for ($i = $numero - 1; $i >= 1; $i--) {
        echo str_repeat($caracter, 2 * $i - 1) . "\n";
    }
}

figura('*', 4);
?>