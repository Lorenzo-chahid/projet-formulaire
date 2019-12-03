<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
       <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        
    </head>
    <body>
        
        <div class="container"><!-- Page Content goes here -->
             <!-- NAVBAR  START-->
            <nav>
                <div class="nav-wrapper teal lighten-2">
                <a href="#!" class="brand-logo"><img src="assets/charte/assets/img/logo_blanc.png" alt="petit_logo_blanc" id="logoImg"/> </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#search"><i class="material-icons">search</i></a></li>
                    <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
                    <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                    <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
                </ul>
                </div>
            </nav>
            <!-- NAVBAR END-->
             <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="row">
        <div class="col s12  cyan darken-3 "id="background" >
            <div>
                <a class="waves-effect waves-light btn-large pulse" id="center">Button</a>
            </div>
        </div>
        <div class="col s12 m4 l2 cyan darken-3"><p>s12 m4</p></div>
        <div class="col s12 m4 l8 cyan darken-2"><p>s12 m4</p></div>
        <div class="col s12 m4 l2 cyan darken-1"><p>s12 m4</p></div>
    </div>
    <div class="row">
        <div class="col s12 m6 l3 cyan darken-3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3 cyan darken-3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3 cyan darken-3"><p>s12 m6 l3</p></div>
        <div class="col s12 m6 l3 cyan darken-3"><p>s12 m6 l3</p></div>
    </div>


  <!--FORMULAIRE HTML -->

<h4>Inscrivez-vous pour les informations relatives à la formation : </h4>
<form name="inscription" method="post" action="saisie.php">
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="prenom" type="text" class="validate">
          <label for="prenom">Prénom</label>
        </div>
        <div class="input-field col s6">
          <input id="nom" type="text" class="validate">
          <label for="nom">Nom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  id="ville" type="text" class="validate">
          <label for="ville">Ville</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
        
      </div>
    </form>
  </div>
  </form>

  <!--PHP DU FORMULAIRE -->
<?php
  $prenom = $_POST ["prenom"]; 
  $nom = $_POST["nom"]; 
  $ville = $_POST["ville"]; 
  $email = $_POST["email"];

  //Tableau message d'erreur 

  

  if (isset ($prenom)&& isset($nom)&& isset($ville)&& isset($email)){
    if (($prenom == true)&& ($nom == true) && ($ville==true) && ($email==true)){
      echo " Coucou $prenom, $nom, de $ville, adresse mail: $email";
    }
    
  }

?>


    <!-- FOOTER -->
    <footer class="page-footer" id="search">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        </div>

        
       
        
    
       
            
        <script src="" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>