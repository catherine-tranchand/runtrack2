<?php

for($i = 0; $i < 101; $i++ ) {     // For range of numbers between 0 and 100 

    if($i >= 0 && $i <= 21) {      // If numbers are between 0 and 20 display them 

        echo '<i>' . $i . '</i><br>';

    } elseif ($i >= 25 &&  $i <= 50) {  // Range of numbers between 25 and 50
        if ($i == 42) {
            echo 'La Plateforme_<br>';   // If the number is 42 display "La Plateforme_"
          
    
        } else{
           echo '<u>' . $i . '</u><br>';  // Otherwise underline and display rest of the numbers in range 
        }
        


    } else {
        echo $i . '<br>';  // Display rest of the numbers (between 50 and 100)
    }

}

?>