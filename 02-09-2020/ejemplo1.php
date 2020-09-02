<?php

/*
Desarrolle un algoritmo que permita leer un valor entero positivo N y 
determinar si es primo o no.

||  => O  => Con una de las condiciones que sea verdadera el resultado es V

&&  => Y  => Todas las condiciones deben ser verdaderas para que el resultado sea V

condición 1 && condición 2 = resultado;

    V               F      =     F

*/

function hallarNumeroPrimo($numero_verificar) {

// Número primo es divisible por 1 y por si mismo

    if ($numero_verificar >= 8 ) {

        if (
            $numero_verificar%2 == 0 || 
            $numero_verificar%3 == 0 ||
            $numero_verificar%5 == 0
        ) {
            echo "$numero_verificar : No es número primo";
        } else {
            echo "$numero_verificar : Es número primo";
        }
    } else {

        if (
            $numero_verificar == 1 || 
            $numero_verificar == 2 ||
            $numero_verificar == 3 ||
            $numero_verificar == 5 ||
            $numero_verificar == 7
        ) {
            echo "$numero_verificar : Es número primo";
        } else {
            echo "$numero_verificar : No es número primo";
        }
    }
}

hallarNumeroPrimo(19);

?>