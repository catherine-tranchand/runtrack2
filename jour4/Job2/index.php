
   <!-- ---------------------------------------Consignes----------------------------------------------
        Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
        arguments $_GET et les valeurs associées.
        Il doit y avoir deux colonnes : argument et valeur.
        Tips :
        Pour tester votre code, créez un formulaire html <form> de type GET avec différents
        champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
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

        
        <form action="" method="get" id="form" class="topBefore">
        <input id="Surname" name="nom" placeholder="NOM" type="text" ><br>
        <input id="Name" name="prénom" placeholder="PRENOM" type="text" ><br>
        <input id="submit" type="submit" value="GO"!><br>
        </form>

        <style>                           
          table, tr, th {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;

          }
          </style>

      <table>                                         <!---The table with two elements---->
        <thead>
          <tr><th>Argument</th><th>Value</th></tr>
        </thead>

        <tbody>
        <?php
        foreach($_GET as $value => $key ){               //For each element aplly $_GET method; 
          echo "<tr><th>$value</th><th>$key</th></tr>"; //Display in row the elements and its values
        }
      
         ?>
          
     </tbody>

   
