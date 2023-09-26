<?php

function eraseArray($array, $number){
    $newArray = [];
    foreach ($array as $key => $value){
        // var_dump($value, $number);
        if ($value != $number) {
            unset($array[$key]);
            array_push($newArray, $value);
        }
    }
    return $newArray;
}

var_dump(eraseArray([1,2,3,4,5],4));

?>