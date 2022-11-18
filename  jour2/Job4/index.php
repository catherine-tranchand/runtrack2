<?php
for($a=1; $a<=100; $a++){   // For range of numbers between 1 and 100
       
    if($a%3==0) {           // If the number in the range is divisible by 3, display 'Fizz'
        echo 'Fizz<br>';
    }
    elseif($a%5==0) {      //Second condition: if the number in the range is divisible by 5, display 'Buzz'
        echo 'Buzz<br>';
}
    elseif($a%3==0 && $a%5==0){  //Third condition: if the number is divisible by 3 and by 5 in the same time, display 'FizzBizz'
        echo 'FizzBuzz<br>';
    } 
    else{
        echo $a . '<br>'; // Othewise display the rest of the nubers in the range

    }
}

?>