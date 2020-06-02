<?php

ob_start();

include 'General/Page_Connexion.php';
include 'Blog/fonction.php';


$nombreMembres = Nombre_Ligne("Utilisateurs");
//  include 'functions/main-functions.php';

$dossier = 'Pages/';

$pages = scandir($dossier);

if (isset($_GET['page']) && !empty($_GET['page'])) {
   if (in_array($_GET['page'].'.php',$pages)) {
      $page = $_GET['page'];
   } else {
      $page = "error";
   }
} else {
   $page = "home";
}


$utilisateur = User_en_Session();

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Africa Travel | Accueil</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
   <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
   <meta name="author" content="FreeHTML5.co" />

   <!-- Facebook and Twitter integration -->
   <meta property="og:title" content="" />
   <meta property="og:image" content="" />
   <meta property="og:url" content="" />
   <meta property="og:site_name" content="" />
   <meta property="og:description" content="" />
   <meta name="twitter:title" content="" />
   <meta name="twitter:image" content="" />
   <meta name="twitter:url" content="" />
   <meta name="twitter:card" content="" />

   <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> -->
   <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet"> -->
   <!-- Animate.css -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- Icomoon Icon Fonts-->
   <link rel="stylesheet" href="css/icomoon.css">
   <!-- Themify Icons-->
   <link rel="stylesheet" href="css/themify-icons.css">
   <!-- Bootstrap  -->
   <link rel="stylesheet" href="css/bootstrap.css">

   <!-- Magnific Popup -->
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Magnific Popup -->
   <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

   <!-- Owl Carousel  -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">

   <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

   <!-- Theme style  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/main.css">

   <!-- Modernizr JS -->
   <script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>




   <?php
   include "General/menu.php";
   include 'Pages/' . $page . '.php';
   include "General/footer.php";
   ?>




   <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
   </div>

   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <!-- jQuery Easing -->
   <script src="js/jquery.easing.1.3.js"></script>
   <!-- Bootstrap -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Waypoints -->
   <script src="js/jquery.waypoints.min.js"></script>
   <!-- Carousel -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- countTo -->
   <script src="js/jquery.countTo.js"></script>

   <!-- Stellar Parallax -->
   <script src="js/jquery.stellar.min.js"></script>

   <!-- Magnific Popup -->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/magnific-popup-options.js"></script>

   <!-- Datepicker -->
   <script src="js/bootstrap-datepicker.min.js"></script>


   <!-- Main -->
   <script src="js/main.js"></script>
   <script src="js/script.js"></script>
</body>

</html>

<?php
ob_end_flush();

?>