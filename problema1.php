<?php

/*
    Author: Jose Ruz
    Email: daraeowl@outlook.com

/*
 * Completa la funcion 'simpleArraySum' de abajo.
 *
 * Se espera que la funcion retorne un INTEGER.
 * La funcion acepta un INTEGER_ARRAY ar como parametro.
 */
$numbers = array(664, 12, 9, 1, 4);
$arr_sum = array_sum($numbers);


function simpleArraySum($ar) {
    // Escribe tu codigo aqui
    $sum = 0;
    foreach($ar as $value){
        $sum += $value;
    }
    return $sum;

}

print  $arr_sum;

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");

// $ar_count = intval(trim(fgets(STDIN)));

// $ar_temp = rtrim(fgets(STDIN));

// $ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

// $result = simpleArraySum($ar);

// fwrite($fptr, $result . "\n");

// fclose($fptr);


?>
