<?php
$num = readline("Ingrese un número: ");
//Pedimos el numero
$divisible = 0;
//contamos las divisiones de cada uno
for ($i = 1; $i <= $num ; $i++) {
    if ($num % $i == 0) {
        $divisible++;
    }
   
}
if ($divisible > 2) {
        //En caso de tener mas divisiones
        echo "El número es primo";
    }
    else {
        //En caso de tener solo 2 divisiones
        echo "El número no es primo";
    }
?>
