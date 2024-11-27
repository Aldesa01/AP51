<?php
function diferenciaEdad($edad1, $edad2) {
    return abs($edad1 - $edad2);
}

$edadHermano1 = 25;
$edadHermano2 = 46;

echo "La diferencia de edad entre los hermanos es: " . diferenciaEdad($edadHermano1, $edadHermano2) . " años.\n";
?>