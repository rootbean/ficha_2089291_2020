<?php

/*
Desarrolle un algoritmo que permita leer un valor entero positivo N y 
determinar si es primo o no.
*/

function hallarNumeroPrimo($numero_verificar) {

    if ($numero_verificar >= 8 ) {

        if (
            $numero_verificar%2 == 0 || 
            $numero_verificar%3 == 0 ||
            $numero_verificar%5 == 0
        ) {
            return false;
        } else {
            return true;
        }
    } else {

        if (
            $numero_verificar == 1 || 
            $numero_verificar == 2 ||
            $numero_verificar == 3 ||
            $numero_verificar == 5 ||
            $numero_verificar == 7
        ) {
            return true;
        } else {
            return false;
        }
    }
}

$resultado = hallarNumeroPrimo(20);

if ($resultado) {
    echo 'El número es primo';
} else {
    echo 'El número no es primo';
}

?>