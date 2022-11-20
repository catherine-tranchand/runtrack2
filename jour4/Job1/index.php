
<!-- ---------------------------------------Consignes----------------------------------------------
Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “
--------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial scale=1">
      <title>Le Formulaire</title>
    </head>

    <body>
        
        <form action="" method="get" id="form" class="topBefore">  <!--The form with method "get"--->
        <input id="Surname" name="surname" label="NOM" type="text" ><br> 
        <input id="Name" name="name" label="PRENOM" type="text" ><br>
        <input id="Email" name="email" label="E-mail" type="text" ><br>
        <input id="submit" type="submit" value="GO"!><br>
        </form>

    <?php
    // var_dump($_GET) to display the data 

    
    $count = 0;   //To count the input values from 0
    
    foreach($_GET as $key => $value) {
        if ($value) { 
           // echo "value is $value";
            $count += 1;  // counting from 1 the values
            
        }
        
        echo "<p>$key is $value<p/>";
    }
    
    echo $count; // Display the somme of the values
    
  
    ?>
    </body>




</html>