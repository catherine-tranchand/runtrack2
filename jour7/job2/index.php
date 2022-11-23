<!---Créez une fonction nommée “bonjour($jour)”.
Cette fonction prend en paramètre un booléen nommé “$jour”.
● Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
● Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”.-->

<?php


$jour = true;                    // Put the variable outside of our function

function bonjour($jour){         // function bonjour with argument $jour

    if($jour == true){          
        echo "Bonjour";

    }
else{
    echo "Bonsoir";
}


}

bonjour($jour);

?>