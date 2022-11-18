<?php


    for($i = 2; $i < 1000; $i++){   // The range of numbers between 0 and 1000

        $notAPrimeNumber = false;

        for ($n=2; $n < $i; $n++) {
            
            if (($i % $n) == 0) {
                // echo "$i can be divided by $n, so $i is not a prime number <br/>";
                $notAPrimeNumber = true;
                break;
            }

    
        }

        if ($notAPrimeNumber) {
            // echo "<p style='color:red;font-weight:bold;'>$i is not a prime number <p/>";
        }else {
            // echo "<p style='color:blue;font-weight:bold;'>$i is a prime number <p/>";
            
            echo $i . '<br/>';
        }



      

        }
        

    

   

?>

