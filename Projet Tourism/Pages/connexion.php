<?php
$erreur = NULL;

if (!empty($_POST['Btn_connecter'])) {

   htmlspecialchars(trim(extract($_POST)));

   if (!empty($adresse_connexion)) {
      $SQL_Connexion = $bdd->query("SELECT * FROM Utilisateurs WHERE Pseudo = '$adresse_connexion' OR Adresse = '$adresse_connexion'") or die('Erreur de la requête SQL');
      $total = $SQL_Connexion->rowCount();

      if ($total != 0) {
         if (!empty($password_connexion)) {
            $resultat = $SQL_Connexion->fetch();

            $password = sha1($adresse_connexion);
            if ($resultat['Mot_de_passe'] == $password) {

               $_SESSION['Adresse'] = $adresse_connexion;
               $_SESSION['Identifiant'] = $resultat['Identifiant'];

               header('Location:index.php?page=home&&Identifiants=' . $_SESSION['Identifiant']);
            }
         }
      } else {
         $erreur = "Le pseudo ou adresse mail n'existe pas <br>Veillez vérifier Votre pseudo";
      }
   } else {
      $erreur = "Entrer l'adresse ou le pseudo pour vous connecter ";
   }
}
?>



<div class="gtco-loader"></div>
<div id="page">
   <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
      <div class="overlay"></div>
      <div class="gtco-container">
         <div class="mt-text animate-box" data-animate-effect="fadeInUp">
            <h1>Planifier votre tour d'Afrique et découvrir ce que le contient a à offrir</h1>
         </div>
         <div class="animate-box" data-animate-effect="fadeInRight">
            <div class="form-wrap">
               <div class="tab">
                  <div class="tab-content">
                     <div class="tab-content-inner active" data-content="signup">
                        <h3>Réservez votre voyage</h3>
                        <div class="container">
                           <?php if ($erreur != NULL) {
                              echo $erreur;
                           } ?>
                           <div class="form-banier">
                              <h1 class="text-center">Connectez vous pour amélirer vos activités </h1>
                              <form action="" method="POST">
                                 <div class="form-group">
                                    <label for="" class="">Votre adresse email ou Pseudo</label>
                                    <input type="text" class="form-control" id="adresse" name="adresse_connexion">
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="field-label">Votre de passe de passe</label>
                                    <input type="password" class="form-control" id="but" name="password_connexion">
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <input class="btn" type="submit" value="Me connecter " name="Btn_connecter" id="">
                                    </div>
                                    <div class="col-md-4">
                                       <input class="form-check-input" type="checkbox"> <label class="form-check-label" for="">Garder ma session </label>
                                    </div>
                                    <div class="col-md-4">
                                       <a href="">Mot de passe oublier</a>
                                    </div>
                                 </div>

                              </form>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <div class="gtco-section">
      <div class="gtco-container">
         <div class="row">
            <div class="text-center gtco-heading animate-box">
               <h2>Découvrir les endroits idéals de l'Afrique</h2>
               <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
         </div>
         <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6 animate-box">
               <div class="fh5co-card-item">
                  <a href="images/img_1.jpg" class="image-popup">
                     <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="images/img_1.jpg" alt="Image" class="img-responsive img-fluid">
                     </figure>
                  </a>
                  <div class="fh5co-text">
                     <h2>Comores</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <!-- <p><span class="btn btn-primary">Schedule a Trip</span></p>  -->
                  </div>
               </div>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 animate-box">
               <a href="images/img_2.jpg" class="fh5co-card-item image-popup">
                  <figure>
                     <div class="overlay"><i class="ti-plus"></i></div>
                     <img src="images/img_2.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <div class="fh5co-text">
                     <h2>Moheli - Comores</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <!-- <p><span class="btn btn-primary">Schedule a Trip</span></p> -->
                  </div>
               </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 animate-box">
               <a href="images/img_3.jpg" class="fh5co-card-item image-popup">
                  <figure>
                     <div class="overlay"><i class="ti-plus"></i></div>
                     <img src="images/img_3.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <div class="fh5co-text">
                     <h2>Lac de Lingoni Anjouan</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <!-- <p><span class="btn btn-primary">Schedule a Trip</span></p> -->
                  </div>
               </a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6 animate-box">
               <a href="images/img_4.jpg" class="fh5co-card-item image-popup">
                  <figure>
                     <div class="overlay"><i class="ti-plus"></i></div>
                     <img src="images/img_4.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <div class="fh5co-text">
                     <h2>Moheli Comores</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <!-- <p><span class="btn btn-primary">Schedule a Trip</span></p> -->
                  </div>
               </a>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 animate-box">
               <a href="images/img_5.jpg" class="fh5co-card-item image-popup">
                  <figure>
                     <div class="overlay"><i class="ti-plus"></i></div>
                     <img src="images/img_5.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <div class="fh5co-text">
                     <h2>Parc soumarin de Moheli</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <!-- <p><span class="btn btn-primary">Schedule a Trip</span></p> -->
                  </div>
               </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 animate-box">
               <a href="images/img_6.jpg" class="fh5co-card-item image-popup">
                  <figure>
                     <div class="overlay"><i class="ti-plus"></i></div>
                     <img src="images/img_6.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <div class="fh5co-text">
                     <h2>Ville de Mutsamudu - Comores</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <!-- <p><span class="btn btn-primary">Schedule a Trip</span></p> -->
                  </div>
               </a>
            </div>

         </div>
         <h2 class="alert alert-info text-center"><a href="reservation.php?page=gallerie">Découvrir plus d'endroits idéals </a></h2>
      </div>
   </div>

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
               </div>
            </form>
         </div>
      </div>
   </div>

   <div id="gtco-counter" class="gtco-section">
      <div class="gtco-container">
         <div class="row">
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
               <div class="feature-center">
                  <span class="counter js-counter" data-from="0" data-to="196" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Destination</span>

               </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
               <div class="feature-center">
                  <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Hotels</span>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
               <div class="feature-center">
                  <span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Travelers</span>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
               <div class="feature-center">
                  <span class="counter js-counter" data-from="0" data-to="<?= $nombreMembres ?>" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Happy Customer</span>
               </div>
            </div>

         </div>
      </div>
   </div>