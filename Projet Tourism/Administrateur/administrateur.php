<?php
ob_start();

include 'General/Page_Connexion.php';
include '../Blog/fonction.php';
//  include 'functions/main-functions.php';

$pages = scandir('Pages/');
if (isset($_GET['page']) && !empty($_GET['page'])) {
   if (in_array($_GET['page'] . '.php', $pages)) {
      $page = $_GET['page'];
   } else {
      $page = "error";
   }
} else {
   $page = "home";
}

$nombreMembres = Nombre_Ligne("Utilisateurs");
$nombrePublication = Nombre_Ligne("Publications");
$nombreCommentaire = Nombre_Ligne("Commentaires");
$nombreReponses = Nombre_Ligne("Reponses");
$nombreMessages = Nombre_Ligne("Messages");

$Liste_membres = Affiche_Les_lignes("Utilisateurs");
?>

<!doctype html>
<html lang="en">

<head>
   <title>Visit_Mauritania</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="fonts/icomoon/style.css">

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap-datepicker.css">
   <link rel="stylesheet" href="css/jquery.fancybox.min.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
   <link rel="stylesheet" href="css/aos.css">

   <!-- MAIN CSS -->
   <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="css/main.css"> -->
   <!-- <link rel="stylesheet" href="css/stylee.css"> -->
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

   <?php
   include "General/menu.php";
   include 'Pages/' . $page . '.php';
   // include "General/footer.php";

   ?>

   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/jquery-migrate-3.0.0.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.animateNumber.min.js"></script>
   <script src="js/jquery.fancybox.min.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/jquery.easing.1.3.js"></script>
   <script src="js/bootstrap-datepicker.min.js"></script>
   <script src="js/isotope.pkgd.min.js"></script>
   <script src="js/aos.js"></script>

   <script src="js/main.js"></script>
   <script src="js/script.js"></script>

</body>

</html>

<?php
ob_end_flush();

?>