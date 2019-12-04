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
 


?>
<form method="post" action="cible.php">
 
 <p>
     On insèrera ici les éléments de notre formulaire. 
 </p>
  <?php
   echo $prenom
   ?>
  
 </form>



</head>
<body>
    
</body>
</html>