<?php

function narcissistic($number){
    $x = (string)$number;
    $numLength = strlen((string)$number);
    $result = 0;

    for($i=0; $i < strlen($x) ; $i++)
    { 
        $result += pow($x[$i], $numLength);
    }

    if($result == $number){
        return true;
    }else{
        return false;
    }
}

// var_dump((narcissistic((163224))));
?>