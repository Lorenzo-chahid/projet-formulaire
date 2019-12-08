<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
 
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(e){
            $('.dropdown-button').dropdown();
        });
    </script>
</head>
<body container>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Profil</a></li>
        <li class="divider"></li>
        <li><a href="#!">Deconnexion</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
            <?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
            } else {
                echo "Sport Team Manager";
            }
            ?>
            <i class="material-icons right">arrow_drop_down</i>
                </a></li>
        </ul>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li> <a href="">Creer une équipe</a></li>
            </ul>
        </div>
    </nav>
  
    <h2 class="_bb1 _mts"><?=$title?></h2>
</body>
</html>
