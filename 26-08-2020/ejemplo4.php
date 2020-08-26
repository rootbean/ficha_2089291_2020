<?php

/*
Determinar la hipotenusa de un triángulo rectángulo conocidas las longitudes de sus dos catetos.
*/

$cateto1 = 6;
$cateto2 = 10;

// h = raiz (a2 + b2);

// pow = potencia
// sqrt = raiz


$hipotenusa1 = sqrt($cateto1 * $cateto1 + $cateto2 * $cateto2);

$hipotenusa2 = sqrt(pow($cateto1, 2) + pow($cateto2,2));

$hipotenusa3 = hypot($cateto1, $cateto2);


echo 'La hipotenusa 1 es: '.$hipotenusa1;
echo '<br>';
echo 'La hipotenusa 2 es: '.$hipotenusa2;
echo '<br>';
echo 'La hipotenusa 3 es: '.$hipotenusa3;


?>