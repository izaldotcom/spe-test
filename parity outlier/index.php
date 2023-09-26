<?php

function checkArray($array){
    if(count($array) < 3){
        echo "Minimal 3 array";
    }else{
        $arrayGenap = [];
        $arrayGanjil = [];
        for($x = 0; $x < count($array); $x++){
            if($array[$x] % 2 == 0){
                array_push($arrayGenap, $array[$x]);
            }
            if($array[$x] % 2 != 0){
                array_push($arrayGanjil, $array[$x]);
            }
        }
        if(count($arrayGanjil) < count($arrayGenap)){
            return array_values($arrayGanjil);
        }else{
            return array_values($arrayGenap);
        }

    }
}

var_dump(checkArray([1,2,3, 4, 8, 10]));
?>