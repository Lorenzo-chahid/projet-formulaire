<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<?php

$prenom = $_POST ["prenom"]; 
$nom = $_POST["nom"]; 
$ville = $_POST["ville"]; 
$email = $_POST["email"];
 

if (isset ($prenom)&& isset($nom)&& isset($ville)&& isset($email)){
    if (($prenom == true)&& ($nom == true) && ($ville==true) && ($email==true)){
      echo " Coucou $prenom, $nom, de $ville, adresse mail: $email";
    }
    
  }
?>

</head>
<body>
    
</body>
</html>