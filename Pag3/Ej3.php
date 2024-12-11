<?php
function manejarError($error, $errstring) {
    echo "Error: $errstring\n";
}


set_error_handler("manejarError");


function buscarElemento($array, $valor) {
    $posicion = array_search($valor, $array);


    if ($posicion === false) {
        trigger_error("El elemento no se encuentra en el array.", E_USER_WARNING);
    } else {
        return $posicion;
    }
}


$array = ["manzana", "naranja", "pera"];
echo buscarElemento($array, "pera") . "\n";
echo buscarElemento($array, "plátano") . "\n";
?>
