<?php
$numeros = [];
$cantidadnumeros = 10;
for ($i = 0; $i < $cantidadnumeros; $i++) {
    $numeros[] = rand(1, 100);
}

for ($antiguo = 0; $antiguo < count($numeros) - 1; $antiguo++) {
    for ($nuevo = 0; $nuevo < count($numeros) - 1 - $antiguo; $nuevo++) {
        if($numeros[$nuevo]>$numeros[$nuevo + 1]) {
            $intercambio = $numeros[$nuevo];
            $numeros[$nuevo] = $numeros[$nuevo + 1];
            $numeros[$nuevo + 1] = $intercambio;
        }
    }
}

echo "El array ordeando es : " . implode(", ", $numeros) . "\n";
?>