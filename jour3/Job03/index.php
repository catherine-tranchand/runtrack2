<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

for($i=0; isset($str[$i]); $i++){
  foreach($voyelles as $voy){
    if($voy === $str[$i]){
        echo $str[$i];
    }

  }
    
}

?>