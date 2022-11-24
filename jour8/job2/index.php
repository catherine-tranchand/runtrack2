<!---Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.-->

<?php

setcookie('nbvisites', '0', time()+ 3600, '/');   //setcookie('name', 'value', 'time before )

if(isset($_POST['reset'])){
    $_COOKIE['nbvisites'] = 0;
}

if(isset($_COOKIE['nbvisites'])){
    setcookie('nbvisites', $_COOKIE['nbvisites'] + 1);

}

echo 'Number of visites: ' . $_COOKIE['nbvisites'] ;

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