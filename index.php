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
        <!-- Compiled and minified CSS -->
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


     

        
    </head>
    <body>
        
        <section class="container"> <!-- Page Content goes here -->
             <!-- NAVBAR  START-->
             <section id=#home>
            <nav>
                <div class="nav-wrapper teal lighten-2">
                <a href="#" class="brand-logo"><img src="assets/img/logo_blanc.png" alt="petit_logo_blanc" id="logoImg"/> </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#home"><i class="material-icons">search</i></a></li>
                    <li><a href="#base"><i class="material-icons">directions_walk</i></a></li>
                    <li><a href="#produit"><i class="material-icons">add_shopping_cart</i></a></li>
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
              <div id="center">
              <a class="waves-effect waves-light btn-large pulse tooltip" id="callTo" >REJOINGEZ NOUS</a>
              </div>
          </div>
        </section>
    


<!-- *********************************************-- SECTION ECRAN 2 START *********************************************-->
    <section class="row" id="base">

      <div class="col s12 m12">
      
        <div class="card horizontal">
          <div class="card-image">
            <img src="assets/img/mimi_car.jpeg" alt="mini car pink" class="imgBase">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

      <!-- DEUXIEME ARTICLE -->
      <div class="col s12 m12">
      
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
          <div class="card-image">
            <img src="assets/img/card.jpeg" alt="raspberry pi card" class="imgBase">
          </div>
        </div>
      </div>
 
    </section>
<!-- *********************************************-- SECTION ECRAN 2 FIN *********************************************-->


<!-- *********************************************-- SECTION ECRAN 3 START *********************************************-->
<section id="produit" >

  
  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="assets/img/Back_logo.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>

  <script>
$(document).ready(function() {
	$('.carousel').carousel();
});
</script>
</section>

 


  




<!-- *********************************************-- SECTION ECRAN 3 FIN *********************************************-->



  

  
<!-- *********************************************-- SECTION FORMULAIRE *********************************************-->





  <h4>Inscrivez-vous pour les informations relatives à la formation : </h4>
    <form name="inscription" method="post" onsubmit="validate()" >
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <div class="fake"><input name="fake-field"></div>
              <input id="prenom" type="text" class="validate" name="firstName" required pattern="^[A-Za-zÀ-ÿ ,.'-]+$"> <!--pattern="^[A-Za-zÀ-ÿ ,.'-]+$"-->
              <label for="prenom">Prénom</label>
              
            </div>
            <div class="input-field col s6">
              <div class="fake"><input name="fake-field"></div>
              <input id="nom" type="text" class="validate" name="secondName" required>
              <label for="nom">Nom</label>
            </div>
          </div>
            <div class="row">
              <div class="input-field col s12">
                <div class="fake"><input name="fake-field"></div>
                <input  id="ville" type="text" class="validate" name="ville" required>
                <label for="ville">Ville</label>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="input-field col s12">
                <div class="fake"><input name="fake-field"></div>
                <input id="email" type="email" class="validate" name="idEmail" required>
                <label for="email">Email</label>
              </div>
            </div>
            <div>
              <button class="btn waves-effect waves-light" type="submit" name="sendemail" id="submit">Submit
                <i class="material-icons right">send</i>
              </button>  
            </div>
        </form>
      </div>
    </form>




    <!--PHP DU FORMULAIRE -->
<?php
   


    require 'vendor/autoload.php'; // If you're using Composer (recommended)
    
    // Comment out the above line if not using Composer
    //require("sendgrid-php/sendgrid-php.php");
    // If not using Composer, uncomment the above line and
    // download sendgrid-php.zip from the latest release here,
    // replacing <PATH TO> with the path to the sendgrid-php.php file,
    // which is included in the download:
    // https://github.com/sendgrid/sendgrid-php/releases

    if(isset($_POST["sendemail"])){
      $name = $_POST["firstName"];
      $secondName = $_POST["secondName"];
      $city = $_POST["ville"];
      $mail = $_POST["idEmail"];

      $email = new \SendGrid\Mail\Mail(); 
      $email->setFrom("chahid.lorenzo@outlook.com", "Lorenzo");
      $email->setSubject("Sending with SendGrid is Fun");
      $email->addTo($mail, $name);
      $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
      $email->addContent(
          "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
      );
      $sendgrid = new \SendGrid(getenv("SENDGRID_API_KEY"));
      //if($sendgrid->send($email)){
       // echo " Email sent SuccessFully";
      //}else{
      //  echo "errors";
      //}
    
     try {
         $response = $sendgrid->send($email);
        //print $response->statusCode() . "\n";
        //print_r($response->headers());
        //print $response->body() . "\n";
        echo "SEND EMAIL WITH SUCCES";
     } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
     }
    }

    try{
      $bdd = new PDO('mysql:host=localhost;dbname=form_php;charset=utf8', 'root', 'root');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
    $req = $bdd->prepare('INSERT INTO hackers_poulette(nom, prenom, ville, email) VALUES(:nom, :prenom, :ville, :email)');
    $req->execute(array(
        'nom' => $name = $_POST["firstName"],
        'prenom' => $secondName = $_POST["secondName"],
        'ville' => $city = $_POST["ville"],
        'email' => $mail = $_POST["idEmail"],
        
        ));
    
    echo 'Les données ont bien été ajouté !';



?>
  

<!-- SEND EMAIL BY SENDGRID -->


<!-- *********************************************-- SECTION FORMULAIRE FIN *********************************************-->


<!-- *********************************************-- SECTION ABOUT US START *********************************************-->
<section id="about">
  <h2>QUI NOUS SOMMES</h2>
</section>

<!-- *********************************************-- SECTION ABOUT US END *********************************************-->

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

        
       
        
    
</section>


   
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <script src="assets/js/script.js"></script>
   
</body>
</html>