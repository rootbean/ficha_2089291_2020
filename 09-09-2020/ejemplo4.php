<?php

/*
 2. Se debe mostrar el valor doble de la variable contador, iniciando en 1 y finalizando en 5

    $i = 1    Mostrar 2    
    $i = 2    Mostrar 4
    $i = 5    Mostrar 10

*/

for ($i=1; $i <= 5; $i++) {

    $numero_mostrar = $i * 2;
    echo 'Número: '.$numero_mostrar;
    echo '<br>';
}

?>
