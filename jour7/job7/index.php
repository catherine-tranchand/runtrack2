<!--Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.-->


<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial scale=1">
      <title>Le Formulaire</title>
    </head>

    <body>
        
    <form action="" method="post" id="form" class="topBefore">  <!--The form with method "post"--->
        <input id="str" name="str" placeholder="Madness" type="text" ><br> 
        <select id="select" name="select">
            <option value="gras" > Gras </option>
            <option value="cesar">Cesar</option>
            <option value="platefomre">Plateforme</option>
        <input id="submit" type="submit" placeholder="Submit!" ><br>
    </form>


<?php


function operation($a, $str){
    $a = $_POST['select'];
    $str = $_POST['str'] ;
 if($a == 'gras' && $str == 'mandness'){
 $a = '<u><b>' .' Mandness' . '</u></b>';
 
 return $a;
}

}
echo $a





?>
</html>