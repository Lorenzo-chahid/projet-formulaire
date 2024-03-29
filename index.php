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
                <a href="#infoclub" class="brand-logo"><img src="assets/img/logo_blanc.png" alt="petit_logo_blanc" id="logoImg"/> </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#home"><i class="material-icons">search</i></a></li>
                    <li><a href="#base"><i class="material-icons">directions_walk</i></a></li>
                    <li><a href="#produit"><i class="material-icons">add_shopping_cart</i></a></li>
                    <li><a href="#infoclub"><i class="material-icons">more_vert</i></a></li>
                </ul>
                </div>
            </nav>
            <!-- NAVBAR END-->
             <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
          <div class="row">
          <div class="col s12  cyan darken-3 "id="background" >
              <div class="center deux">
              <a href="#i"class="waves-effect waves-light btn-large pulse tooltip" id="callTo" >REJOINGEZ NOUS</a>
              </div>
          </div>
        </section>
    


<!-- *********************************************-- SECTION ECRAN 2 START *********************************************-->
    <section class="row" id="base">

      <div class="col s12 m12">
      
        <div class="card horizontal">
          <div class="card-image">
            <img src="assets/img/card.jpeg" alt="raspberry pi card" class="imgBase">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>Chez Hackers Poulettes nous vous proposons la vente de carte raspberry pi, ou bien carrément des kits. 
                Avec ces kits on peut faire tout un tas de choses, comme des petits robots ou bien des jeux vidéos rétros. 
                A vous de jouer ! </p>
            </div>
            <!--<div class="card-action">
              <a href="#">This is a link</a>-->
            </div>
          </div>
        </div>
      </div>

      <!-- DEUXIEME ARTICLE -->
      <div class="col s12 m12">
      
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p>Nous vous proposons aussi des diverses formations pour pouvoir coder les cartes et construires ce qu'il faut,
                comme une petite voiture, des bornes d'arcades etc.
                N'hésitez pas a vous inscrire pour avoir plus d'informations et pour eventuellement être pris dans nos formations ! </p>
            </div>
            <div class="card-action">
              <a href="#"></a>
            </div>
          </div>
          <div class="card-image">
            <img src="assets/img/mimi_car.jpeg" alt="obot_car" class="imgBase">
          </div>
        </div>
      </div>
 
    </section>
<!-- *********************************************-- SECTION ECRAN 2 FIN *********************************************-->


<!-- *********************************************-- SECTION CARROUSSEL 3 START *********************************************-->

<div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/gros-plan.jpg" alt= "robot_car"> 
        <div class="caption center-align"></div>
      </li>
      <li>
        <img src="assets/img/borne.jpg"> 
        <div class="caption left-align"></div>
      </li>
      <li>
        <img src="assets/img/ras3.jpg"> 
        <div class="caption right-align"></div>
      </li>
      <li>
        <img src="assets/img/nitendo.jpg"> 
        <div class="caption center-align"></div>
      </li>
    </ul>
  </div>


        

<!-- *********************************************-- SECTION CARROUSSEL 3 FIN *********************************************-->
 
<!-- *********************************************-- SECTION FORMULAIRE *********************************************-->

<section id="infoclub">



  <h4>Inscrivez-vous pour les informations relatives à la formation : </h4>
    <form name="inscription" method="post"  >
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <div class="fake"><input name="fake-field"></div>
              <input id="prenom" type="text" class="validate" name="firstName" > <!--pattern="^[A-Za-zÀ-ÿ ,.'-]+$"-->
              <label for="prenom">Prénom</label>
              
            </div>
            <div class="input-field col s6">
              <div class="fake"><input name="fake-field"></div>
              <input id="nom" type="text" class="validate" name="secondName">
              <label for="nom">Nom</label>
            </div>
          </div>
            <div class="row">
              <div class="input-field col s12">
                <div class="fake"><input name="fake-field"></div>
                <input  id="ville" type="text" class="validate" name="ville" >
                <label for="ville">Ville</label>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="input-field col s12">
                <div class="fake"><input name="fake-field"></div>
                <input id="email" type="email" class="validate" name="idEmail" >
                <label for="email">Email</label>
              </div>
            </div>
            <!--Liste deroulante1-->
            <div class="input-field col s12">
              <select>
                <option value="" >Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              
            </div>

            <!--Fin liste deroulante1-->

            <div class="center">
              <button class="btn waves-effect waves-light" type="submit" name="sendemail" id="submit" >Submit
                <i class="material-icons right">send</i>
              </button>  

            </div>
            
        </form>
      </div>
    </form>

</section>



  

<!-- SEND EMAIL BY SENDGRID -->


<!-- *********************************************-- SECTION FORMULAIRE FIN *********************************************-->


<!-- *********************************************-- SECTION ABOUT US START *********************************************-->
<section id="about" class="row">
  <h2>QUI SOMMMES-NOUS</h2>

  <div class="col s12 m6 l6 " class="moche2">
      <div class="card-panel grey lighten-5 ">
          <img src="assets/img/GabyMoche.jpg" alt="photo_grimace_fille" id="photoFille"class="circle responsive-img moche3"> <!-- notice the "circle" class -->
          <div class="black-text">
          <h4>CEO-Lorenzo</h4>
          <p class="txtImg">Formé chez Becode, il a vite développé son talent de CEO. Il a par la suite ouvert ce site de vente et formation.</p>
        </div>
      </div>
        
  </div>

  <div class="col s12 m6 l6 " class="moche2">
      <div class="card-panel grey lighten-5 ">
          <img src="assets/img/LorenzoMoche.jpg" alt="photo_grimace_garçon" id="photoGars" class="circle responsive-img moche3"> <!-- notice the "circle" class -->
          <div class="black-text">
          <h4>CEO-Lorenzo</h4>
          <p class="txtImg">Formé chez Becode, il a vite développé son talent de CEO. Il a par la suite ouvert ce site de vente et formation.</p>
        </div>
      </div>
        
  </div>

  

      
      
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
                
                
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Hackers Poulette
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        </div>

        
       
        
    
</section>
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
   
 
     if(isset($_POST['fake-field']) && $_POST['fake-field'] != ''){
               header('Location: http://www.monsite.com/fake-confirmation/');
               exit('Redirecting you to http://www.monsite.com/fake-confirmation/');
     } else {
      $options = array(
        'firstName' 	=> FILTER_SANITIZE_STRING,
        'secondName' 	=> FILTER_SANITIZE_STRING,
        'idMail' 		    => FILTER_VALIDATE_EMAIL,
        'subject' 		=> FILTER_SANITIZE_STRING,
        'country' 		=> FILTER_SANITIZE_STRING);
       
   
        $result = filter_input_array(INPUT_POST, $options);  
   
        if ($result != null AND $result != FALSE) {
   
         
        
        } else {
        
        
        
        }
        foreach($options as $key => $value) 
        {
           $result[$key]=trim($result[$key]);
           
        }
       if(isset($_POST["sendemail"])){
         $name = $_POST["firstName"];
         $secondName = $_POST["secondName"];
         $city = $_POST["ville"];
         $mail = $_POST["idEmail"];
   
         $email = new \SendGrid\Mail\Mail(); 
         $email->setFrom("chahid.lorenzo@outlook.com", "Lorenzo");
         $email->setSubject("Welcome to hackers poulette");
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
       
      
     
     }

   



?>
 

    

   
    <script src="assets/js/script.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   
   
</body>
</html>