<?php
/*
    Author: Jose Ruz
    Email: daraeowl@outlook.com
*/

/*
 * Completa la funcion 'miniMaxSum' de abajo.
 *
 * La funcion acepta un INTEGER_ARRAY arr como unico parametro.
 */

function miniMaxSum($arr) {
    $min = 0;
    $max = 0;
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    $min = $sum - max($arr);
    $max = $sum - min($arr);
    print $min . "," . $max;
}

$arr = array(7, 3, 9, 1, 5);
miniMaxSum($arr);
?>
