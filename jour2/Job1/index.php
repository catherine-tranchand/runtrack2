<?php

for ($a=0; $a<=1337; $a++){   //For the range of numbers between 0 and 1337
    if ($a == 42){.           // In this case when number is equal to 42, display "42" bold and underline it
        echo '
        <b><u>' .$a. '</u></b>
        <br>';               
    }
    else {
        echo $a. '<br>';     // Otherwise display the rest of numbers in the range 
    }
    

}

?>
