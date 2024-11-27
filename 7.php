<?php
function buscarPalabra($texto, $palabra) {
    $count = substr_count(strtolower($texto), strtolower($palabra));
    return $count > 0 ? "La palabra '$palabra' existe y aparece $count veces." : "La palabra '$palabra' no existe.";
}

function reemplazarPalabra($texto, $palabra) {
    return str_ireplace($palabra, strtoupper($palabra), $texto);
}

$texto = "Este es un texto de prueba. Este texto es solo para prueba.";
$palabra = readline("Ingrese la palabra a buscar: ");
echo buscarPalabra($texto, $palabra) . "\n";
echo "Texto modificado: " . reemplazarPalabra($texto, $palabra) . "\n";
?>