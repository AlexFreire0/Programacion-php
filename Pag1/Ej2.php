<?php
$num = readline("Ingrese un número: "); 
//pedimos el numero
for ($i = 1; $i <= 10; $i++) { 
    //hacemos un bucle hasta 10
    $multiplicacion = $num * $i;
    echo $multiplicacion. "\n";
    //Mostramos todas las multiplicaciones
}
?>
