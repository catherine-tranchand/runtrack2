<!----Créez une fonction nommée “occurrences($str, $char)”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
$str sera : 2--->




<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// header('Content-Type: text/html; charset=utf-8');
// ini_set('default_charset', 'gb2312');


$str = 'You will always be fond of me. I represent to you all the sins you never had the courage to commit" Dorian Grey';

$char = 'o';

// $str = 'Hey, baby';
// $char = 'b';


function occurrences($str,$char){
    
    $count = 0;
    for($i=0; isset($str[$i]); $i++){
    if($str[$i] === $char){
     $count += 1;
                                                
    }
}

return $count;                              

                                                     
}

echo occurrences('You will always be fond of me. I represent to you all the sins you never had the courage to commit" Dorian Grey', 'а'); 



?>
</body>
</html>
