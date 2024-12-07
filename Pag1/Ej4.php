<?php
$secreto = rand(1, 100); //Creamos el numero aleatorio 
$encontrado = False; //Empezamos la variable de si esta encontrado en falso
while ($encontrado == False) {
    $introducido = readline("Introduzca un número entre 1 y 100: ");
    if ($secreto == $introducido) {
        echo "\nEnhorabuena!! Has adivinado el número secreto";
        $encontrado = true; //en caso de ser igual termina el bucle
    }
    elseif ($secreto > $introducido) {
        echo "El número secreto es mayor al introducido\n";
        //En caso de ser menor el puesto se lo decimos 
    }
    else {
        echo "El numero secreto es menor al introducido\n";
        //En caso de ser mayor el puesto se lo decimos 
    }
}
?>