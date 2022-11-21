<!----Consignes---->
<!---Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer.--->


<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial scale=1">
      <link rel="stylesheet" href="<?php echo $_POST['style']?>">  <!----To link page php with page css ------>
      <title>Le Formulaire</title>
    </head>


    <body>
        
        <form action="" method="post" id="form" class="topBefore">               <!----Our form wtih "post"-method-->
        <select name = "style" id="style">
            <option value="style1.css"> Style 1 </option>
            <option value="style2.css"> Style 2</option>
            <option value="style3.css"> Style 3</option>
            
</select>

       
        <input id="submit" type="submit" value="Submit"!><br>
        </form>

    
   

