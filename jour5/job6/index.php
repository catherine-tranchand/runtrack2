<!------------------------------------------Consignes----------------------------------------------
        Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
        bouton submit.
        Après validation du formulaire :
        ● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
        ● si c’est un nombre impair, afficher “Nombre impair”.
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
        
        <form action="" method="get" id="form" class="topBefore">               <!---Our form wtih "post"-method-->
        <input id="Number" name="Number" placeholder="Number" type="text" ><br>
        <input id="submit" type="submit" value="Submit"!><br>
        </form>

    <?php
if($_GET["Number"]%2 == 0){
    echo "Nombre pair";
}
else {
    echo "Nombre impair";
}

?>
 



  


