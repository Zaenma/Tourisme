<div class="gtco-loader"></div>

<div id="page">
   <?php

   if (!isset($_GET['Identifiant']) or empty($_GET['Identifiant'])) {
      $articles = Affiche_publications();
      foreach ($articles as $article) {
         ?>
         <?php include "General/diapos.php"; ?>
         <div class="container">
            <h3><?= $article->Titres; ?></h3><br>
            <div class="row">
               <div class="col-lg-8">
                  <p><?= $article->Contenus; ?></p><br>
               </div>
               <div class="col-lg-4">
                  <img class="img-responsive img-rounded" src="Images/<?= $article->Photos; ?>" alt="">
                  <a href="index.php?page=articles&&Identifiant=<?= $article->Identifiant ?>">Lire l'article complet</a>
               </div>
            </div>
         </div>

      <?php
         }
      } else {
         $article = Affiche_publication_precis();
         ?>

      <?php include "General/diapos.php"; ?>

      <div class="container">
         <h3><?= $article->Titres; ?></h3><br>
         <div class="row">
            <div class="col-lg-8">
               <p><?= $article->Contenus; ?></p><br>
            </div>
            <div class="col-lg-4">
               <img class="img-responsive" src="Images/<?= $article->Photos; ?>" alt="">
            </div>
         </div>
         <hr>
         <h3>Commentaires</h3>

         <?php
            $Commentaires = Affiche_Commentaire();

            if ($Commentaires != NULL) {
               foreach ($Commentaires as $Commentaire) {
                  echo $Commentaire->Nom . ' le ' . date("d/m/Y", strtotime($Commentaire->Date_Commentaire)) . '<br>';
                  echo $Commentaire->Commentaire . '<br>';
               }
            } else {
               echo "Aucun commentaire pour le momnent, soyez le premier à commenter ";
            }

            $erreur = NULL;
            if (!empty($_POST['Btn_Commentaire'])) {
               htmlspecialchars(trim(extract($_POST)));

               if (empty($_POST['User_Commentee']) || empty($_POST['Adresse_User_Commentee']) || empty($_POST['Commentaire'])) {

                  $erreur = "Tous les champs doivent être remplie";
               } else {
                  if (!filter_var($Adresse_User_Commentee, FILTER_VALIDATE_EMAIL)) {
                     $erreur = "L'adresse email n'est pas valide";
                  } else {
                     Insert_Commentaire($User_Commentee, $Adresse_User_Commentee, $Commentaire);
                  }
               }
            }

            if ($erreur != NULL) {
               echo $erreur;
            }
            ?>

         <form action="" method="POST">
            <div class="row">
               <div class="col-lg-6">
                  <div class="form-group">
                     <label for="" class="">Votre nom</label>
                     <input type="text" class="form-control" id="adresse" name="User_Commentee">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label for="" class="">Votre adresse</label>
                     <input type="email" class="form-control" id="adresse" name="Adresse_User_Commentee">
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label for="" class="">Votre commentaire</label>
               <textarea type="text" class="form-control" id="adresse" name="Commentaire"></textarea>
            </div>
            <div class="">
               <input type="submit" class="btn btn-pimary" name="Btn_Commentaire" value="Poster le commentaire">
            </div>
         </form>
      </div>

   <?php
   }

   ?>

   <div id="gtco-features">
      <div class="gtco-container">
         <div class="text-center gtco-heading animate-box">
            <h2>Quelques expériences de nos clients</h2>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-4">
                     <img src="images/person_4.jpg" alt="" class="img-responsive">
                  </div>
                  <div class="col-md-8 gtco-heading animate-box">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum pariatur veritatis ipsam aliquam accusamus. Corrupti numquam ea tempora dolores qui reiciendis neque error, magnam cupiditate, eaque excepturi voluptate aut illo.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="row">
                  <div class="col-md-4">
                     <img src="images/person_4.jpg" alt="" class="img-responsive rounded-circle">
                  </div>
                  <div class="col-md-8 gtco-heading animate-box">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum pariatur veritatis ipsam aliquam accusamus. Corrupti numquam ea tempora dolores qui reiciendis neque error, magnam cupiditate, eaque excepturi voluptate aut illo.</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="text-center gtco-heading animate-box">
            <h2>Publiez des expériences </h2>
         </div>
         <div class="row">
            <form action="" class="form-group">
               <div class="row form-group">
                  <div class="col-md-6">
                     <label for="name">Votre nom</label>
                     <input type="text" id="name" class="form-control">
                  </div>
                  <div class="col-md-6">
                     <label for="adresse">Votre adresse personnel électronique</label>
                     <input type="text" id="adresse" class="form-control">
                  </div>
                  <div class="col-md-6">
                     <label for="titre">Le titre de votre publication </label>
                     <input type="text" id="titre" class="form-control">
                  </div>
                  <div class="col-md-6">
                     <label for="photo">Importer une image de votre publication</label>
                     <input type="file" id="photo" class="form-control">
                  </div>
                  <div class="col-md-12">
                     <label for="texte">Publiez votre texte</label>
                     <textarea name="" id="texte" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12">
                     <input type="submit" value="Publier" class="btn btn-primary">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
