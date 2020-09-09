<?php

/*
3. Teniendo en cuenta el salario de los empleados guardados en un arreglo, 
calcular el valor del auxilio de transporte para el año 2020, teniendo en cuenta la lesgilación 
vigente.

    Salario Mínimo => $877.803
    Aux de Transporte => $102.854

    Nota: Tienen derecho al auxilio de transporte quienes ganen 2 o menos salarios mínimos.

*/
                   // 0       1         2       3        4        5
$empleados = Array(900000, 1500000, 2200000, 2800000, 2500000, 3000000);

$salario_minimo = 877803;
$valor_aux_transporte = 102854;

$cantidad_empleados = count($empleados);
$validar_aux_transporte = $salario_minimo * 2;

for ($i=0; $i < $cantidad_empleados; $i++) {

    $salario_empleado = $empleados[$i];
    $valor_pagar_empleado = 0;

    echo ' ----------------------------------------- ';

    echo '<br>';
    echo 'El salario es: $'.$salario_empleado;
    echo '<br>';

    if ($salario_empleado <= $validar_aux_transporte) {

        echo 'Tiene derecho al auxilio de transporte';
        echo '<br>';
        $valor_pagar_empleado = $salario_empleado + $valor_aux_transporte;

    } else {
        echo 'No tiene derecho al auxilio de transporte';
        echo '<br>';
        $valor_pagar_empleado = $salario_empleado;
    }

    echo ' El valor a pagar al empleado es: '.$valor_pagar_empleado;
    echo '<br>';

}

?>
