<?php
//     Author: Jose Ruz
//     Email: daraeowl@outlook.com

$arr = [5,5,5,10,15];

//target 15
function balancedSums($arr) {
    $sum = 0;
    $right = 0;
    $left = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $sum += $arr[$i];
    }
    for ($i=0; $i < count($arr); $i++) { 
        $right += $arr[$i];
        if($right - $arr[$i] == $sum - $right){
            return "YES";
        }
    }
    return "NO";
}

balancedSums($arr);
print balancedSums($arr);
?>
