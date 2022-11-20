<!------------------------------------------Consignes----------------------------------------------
        Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
        ayant deux champs <input> nommés username et password.
        Après validation du formulaire :
        ● si le username est “John” ET le password est “Rambo” afficher :
          “C’est pas ma guerre”
        ● sinon afficher : “Votre pire cauchemar”.
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
        
        <form action="" method="post" id="form" class="topBefore">               <!---Our form wtih "post"-method-->
        <input id="Username" name="Username" placeholder="Username" type="text" ><br>
        <input id="Password" name="Password" placeholder="Password" type="text" ><br>
        
        <input id="submit" type="submit" value="GO"!><br>
        </form>

    <?php



        if($_POST["Username"] == "John" and $_POST["Password"] == "Rambo"){  //Precise the cell (id) from your form which you want to use. Ici ["Username"] and ["Password"]
            echo "Ce n'est pas ma guerre";                                   
        
        }
    
        else {
            echo "Votre pire cauchemar";       //If other namers display "Votre pire cauchemar"
        }
        
     
    
    
    
    
    
   
    ?>
    </body>




</html>