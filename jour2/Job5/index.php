<?php

function nPrems($number){
    for($i = 2; $i < $number; $i++){
        if($number % $i ==0) {
            return FALSE;
        }

        }
         return TRUE;

    }

    for($i=2; $i < 1000; $i++){
        if(nPrems($i)) {
            echo $i . '<br>';
        }
    }


?>






