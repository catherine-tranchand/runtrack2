<!---Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.--->



<?php

 /* session_start();
    session_destoy();
*/

session_start();                           // The session_start() function must be the very first thing in your document. Before any HTML tags.


 if(!isset($_SESSION['nbvisites'])){
        $_SESSION ['nbvisites'] = 0;       // If the value doesn't exist ("!"), number of visites is "0"
      
 }
    
    if (isset($_POST['reset'])){      
        $_SESSION ['nbvisites'] = 0;       // To reset our calculation of visites
        
    }
    $_SESSION['nbvisites'] ++;             

    echo 'Number of visites: ' . $_SESSION ['nbvisites']
    







?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHH Cookies</title>
</head>
<body>
    
    <form action="" method="post" id="form" class="topBefore">
          <input id="button" name="reset" placeholder="reset" type="submit" ><br> 
    </form>

</body>
</html>
