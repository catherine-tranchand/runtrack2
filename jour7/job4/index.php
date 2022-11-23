<!--Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération.--->


<?php

$a  = 6;
$b = 2;

function calcule($a, $operation, $b){
    switch($operation){                // Switch case - is an alternative of if..elseif..else. 
        case '+':
            $cal = $a + $b;
         break;

        case '-':
             $cal = $a - $b;
        break;

        case '*':
             $cal = $a * $b;
        break;

        case '/':
            $cal = $a / $b;

        case '%':
            $cal = $a % $b;
        break;
    }

    return $cal;                 // Get the result of the operation 
    
 }

 calcule($a, '+' , $b);        // Call the function 

 echo calcule($a, '+' , $b);    // Display the result of






?>