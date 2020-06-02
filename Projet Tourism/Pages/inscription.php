<?php
// include 'General/Page_Connexion.php';
$erreur = NULL;
if (!empty($_POST['Btn_Inscription'])) {
   htmlspecialchars(trim(extract($_POST)));
   if (isset($pseudo_Inscription) and !empty($pseudo_Inscription)) {
      if (!empty($adresse_inscription) or filter_var($adresse_inscription, FILTER_VALIDATE_EMAIL)) {
         if (!empty($adresse_Confirme) or filter_var($adresse_Confirme, FILTER_VALIDATE_EMAIL)) {
            if ($adresse_inscription == $adresse_Confirme) {
               $SQL_section_Adresse = $bdd->query("SELECT Identifiant FROM Utilisateurs WHERE Adresse = '$adresse_inscription'") or die('Erreur de la requête SQL 1');
               $NomreTotal = $SQL_section_Adresse->rowCount();
               if ($NomreTotal == 0) {
                  if (!empty($password_Inscrit) or strlen($password_Inscrit) > 5) {
                     if ($password_Inscrit == $password_Confirme) {
                        $SQL_section_pseudo = $bdd->query("SELECT Identifiant FROM Utilisateurs WHERE Pseudo = '$pseudo_Inscription'") or die('Erreur de la requête SQL 2');
                        $total = $SQL_section_pseudo->rowCount();
                        if ($total == 0) {
                           $longueurcle = 30;
                           $cle_Confirme = "";
                           for ($i = 1; $i < $longueurcle; $i++) {
                              $cle_Confirme .= mt_rand(0, 100);
                           }

                           $password_Inscrit = sha1($password_Inscrit);
                           $nom = "NULL";
                           $prenom = "NULL";
                           $telephone = "NULL";
                           $nationalite = "NULL";
                           $profile = "Utilisateur";
                           $photo = "NULL";
                           $insert_donnees = $bdd->prepare("INSERT INTO Utilisateurs(Pseudo, Nom, Prenom, Adresse, Telephone, Nationalite, Cle_confirme, Profiles, Mot_de_passe, Photo)
                                                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                           $insert_donnees->execute(array($pseudo_Inscription, $nom, $prenom, $adresse_inscription, $telephone, $nationalite, $cle_Confirme, $profile, $password_Inscrit, $photo));

                           if ($insert_donnees) {
                              $erreur = "Merci de vous avoir inscrit sur notre site, Veillez vérifier dans votre boite électronique pour confirmer votre compte";
                           }
                        } else {
                           $erreur = "Le Pseudo que vous avez renseigné est déjà utilisé ";
                        }
                     } else {
                        $erreur = "Les deux mots de passe doivent être identiques";
                     }
                  } else {
                     $erreur = "Pour la sécurité de vos informations personnel, Veillez fournir un mot de passe correcte";
                  }
               } else {
                  $erreur = "L'adresse que vous avez fourni est déjà utilisé";
               }
            }
         } else {
            $erreur = "Les deux adresses doivent être identiques ! ";
         }
      } else {
         $erreur = "L'adresse mail n'est pas correcte, vous devez le remplire correctement avant de continuer !";
      }
   } else {
      $erreur = "Le Pseudo doit être rempli avant de continuer !";
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
                        <form action="" method="POST">
                           <div class="form-group">
                              <label for="name" class="">Pseudo</label>
                              <input type="text" class="form-control" id="name" name="pseudo_Inscription">
                           </div>
                           <div class="form-group">
                              <label for="adresse" class="">Votre adresse email</label>
                              <input type="text" class="form-control" id="adresse" name="adresse_inscription">
                           </div>
                           <div class="form-group">
                              <label for="adresse" class="field-label">Confirmer votre adresse email</label>
                              <input type="text" class="form-control" id="adresse" name="adresse_Confirme">
                           </div>
                           <div class="form-group">
                              <label for="but" class="field-label">Choisir un mot de passe</label>
                              <input type="password" class="form-control" id="but" name="password_Inscrit">
                           </div>
                           <div class="form-group">
                              <label for="but" class="field-label">Confirmer votre choix de passe de passe</label>
                              <input type="password" class="form-control" id="but" name="password_Confirme">
                           </div>
                           <input class="btn" type="submit" value="M'inscrir" name="Btn_Inscription" id="">
                        </form>
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
