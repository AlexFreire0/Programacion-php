<?php
// Pedir altura
$altura = (int) readline("Ingrese la altura de la pirámide: ");
//bucle de la piramide
for ($i = 1; $i <= $altura; $i++) { 
    echo str_repeat(" ", $altura - $i); // utilizamos str_repeat para repetir los espacios dependiendo de que tan alto sea
    for ($j = 1; $j <= $i; $j++) {
        echo $j; //ponemos el numero correspondiente
    }
    for ($j = $i - 1; $j >= 1; $j--) {
        echo $j; //al llegar a la mitad empezamos a poner los numeros hacia atras.
    }
    echo "\n"; //bajamos de linea
}
?>