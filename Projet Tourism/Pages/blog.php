<div class="gtco-loader"></div>
<div id="page">
   <?php include "General/diapos.php"; ?>
   <!-- AFFICHAGES DES ARTICLES  -->
   <div class="container">
      <h1>Les dernières articles publier sur le site </h1>
      <?php
      $publications = Affiche_publications();
      foreach ($publications as $publication) {
         echo "Publier le " . date("d/m/Y à H:i", strtotime($publication->Date_Publication)) . " par " . $publication->Pseudo . '<br>';
         echo $publication->Titres . '<br>';
         echo $publication->Contenus . '<br> <hr>';
      }
      ?>
      <a href="index.php?page=articles">Voir tous les articles </a>
   </div>

   