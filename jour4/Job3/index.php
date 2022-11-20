<!------------------------------------------Consignes----------------------------------------------
        Développez un algorithme qui affiche le nombre d’arguments $_POST.
        Tips :
        Pour tester votre code, créez un formulaire html <form> de type POST avec différents
        champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
        Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
        “Le nombre d’argument POST envoyé est : “
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
        
        <form action="" method="post" id="form" class="topBefore">
        <input id="Surname" name="nom" placeholder="NOM" type="text" ><br>
        <input id="Name" name="prénom" placeholder="PRENOM" type="text" ><br>
        <input id="Email" name="email" placeholder="E-mail" type="text" ><br>
        <input id="submit" type="submit" value="GO"!><br>
        </form>

    <?php
  

    $count = 0;
    
    foreach($_POST as $key => $value) {     // Generally we use $_POST method to hide sensetive information
        if ($value) {                       //If there is any value(input), count it !
           // echo "value is $value";
            $count += 1;
            
        }
        
        echo "<p>$key is $value<p/>";
    }
    
    echo $count;                        //Display the somme
    
   
    ?>
    </body>




</html>