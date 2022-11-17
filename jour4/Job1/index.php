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
        <input id="Surname" name="surname" label="NOM" type="text" ><br>
        <input id="Name" name="name" label="PRENOM" type="text" ><br>
        <input id="Email" name="email" label="E-mail" type="text" ><br>
        <input id="submit" type="submit" value="GO"!><br>
        </form>

    <?php
   // var_dump($_GET);

    //$count = 0;
        //foreach($_GET as $box){
        //  $count ++;
            
        //}
        //echo $count;
    //echo $_GET['name'];

    $count = 0;
    
    foreach($_GET as $key => $value) {
        if ($value) { 
           // echo "value is $value";
            $count += 1;
            
        }
        
        echo "<p>$key is $value<p/>";
    }
    
    echo $count;
    
   // echo "<p>key is $key and value is $value</p>";
    ?>
    </body>




</html>