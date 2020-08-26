<?php

/*
Desarrolle un algoritmo que permita leer un valor entero positivo N y determinar si es primo o no.
*/

function saludar ($mensaje) {
    echo $mensaje;
}

function sumar ($numero1, $numero2) {
    echo $numero1 + $numero2;
}

function sacarPromedio ($nota1, $nota2, $nota3) {
    $promedio_notas = ($nota1 + $nota2 + $nota3) / 3;
    echo 'El promedio de las notas es: '.$promedio_notas;
}

function hallarHipotenusa ($cateto1, $cateto2) {
    $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2,2));
    echo '<br>';
    echo 'La hipotenusa es: '.$hipotenusa;
}

function hallarHipotenusa2 ($cateto1, $cateto2) {
    $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2,2));
    return $hipotenusa;
}




// saludar('Bienvenidos aprendices');
 
// sumar(2,3);

// sacarPromedio(5,4,2);

// sacarPromedio(4,1,2);

// hallarHipotenusa(6,10);

// hallarHipotenusa(3,4);


$hipotenusa_prueba = hallarHipotenusa2(3,4);

echo 'La hipotenusa es: '.$hipotenusa_prueba;


?>