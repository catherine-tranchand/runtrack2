<?php

$mysqli = new mysqli("localhost","root", "root", "Jour9");

$conn = $mysqli->query("SELECT * FROM etudiants");

$result = $conn->fetch_all();

 echo '<pre>'; var_dump($result); echo '</pre>';
//s var_dump($result);

var_dump($mysqli);




?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial scale=1">
      <title>Le Formulaire</title>
    </head>

    <h1> Base de données Jour9 </h1>

    <style>
        table, tr, th, td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
        </style>
    <table>
      <tbody>
<tr>
    <th> Id </th>
    <th> Prenom </th>
    <th> Nom </th>
    <th> Naissance </th>
    <th> Sexe </th>
    <th> Email </th>
</tr>


<?php 

foreach ($result as $person) {
    echo "
    <tr>
        <td>$person[0]</td>
        <td>$person[1]</td>
        <td>$person[2]</td>
        <td>$person[3]</td>
        <td>$person[4]</td>
        <td>$person[5]</td>
    </tr>";
}
?>

</tbody>
</table>

</html>


