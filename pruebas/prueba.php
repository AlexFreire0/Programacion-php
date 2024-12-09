<?php
//error_reporting(E_WARNING);
//error_reporting(0);
function dividir($a, $b) {
    if ($b == 0) {
        throw new Exception("No se puede dividir entre cero.");
    }
    return $a / $b;
}

try {
    echo dividir(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}




?>