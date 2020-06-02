<!-- <div class="page-inner"> -->
<?php include 'Blog/script_php.php'; ?>
<nav class="gtco-nav" role="navigation">
   <div class="menu">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-2 col-xs-12 logo">
               <div id="gtco-logo"><a href="index.php?page=home">Visit-Africa<em> * </em></a></div>
               <!-- <img src="images/lo.png" alt=""> -->
            </div>
            <div class="col-xs-10 text-right menu-1">
               <ul>
                  <li><a href="index.php?page=home">Accueil </a> |</li>
                  <li class="has-dropdown">
                     <a href="#"> Pays</a> |
                     <ul class="dropdown">
                        <li><a href="index.php?page=comores"> Comores</a></li>
                        <li><a href="#">Mauritanie</a></li>
                        <li><a href="#">Madagascar</a></li>
                        <li><a href="#">Sénégal</a></li>
                        <li><a href="#">Guinée Cokry</a></li>
                        <li><a href="#">Gambi</a></li>
                        <li><a href="#">Ouganda</a></li>
                        <li><a href="#">Mozambique</a></li>
                        <li><a href="#">Cote d'Ivoir</a></li>
                        <li><a href="#">Nigeria</a></li>
                        <li><a href="#">Mali</a></li>
                        <li><a href="#">Gana</a></li>
                        <li><a href="#">Togo</a></li>
                     </ul>
                  </li>
                  <!-- <li><a href="index.php?page=forum">Forum</a></li> -->
                  <li><a href="index.php?page=blog"> Blog</a>|</li>
                  <li class="has-dropdown">
                     <a href="#"> Réservation </a>|
                     <ul class="dropdown">
                        <li><a href="index.php?page=reservation_H">Hôtels</a></li>
                        <li><a href="index.php?page=reservation_V">Billets</a></li>
                        <li><a href="#">Voitures</a></li>
                     </ul>
                  </li>
                  <li class="has-dropdown">
                     <a href="#"> Plus</a> |
                     <ul class="dropdown">
                        <li><a href="index.php?page=galerie">Galleries Photos</a></li>
                        <li><a href="#">Evenements</a></li>
                        <li><a href="#">Hebergements</a></li>
                        <li><a href="#">Transports</a></li>
                        <li><a href="#">Visa</a></li>
                        <li><a href="#">Activités de loisir</a></li>
                     </ul>
                  </li>
                  <li><a href="" data-toggle="modal" data-target="#Contacte">Contact</a> |</li>
                  <?php if (isset($_GET['page']) && $_GET['page'] == "comores") : ?>
                     <li class="has-dropdown">
                        <a href="#"> Îles</a> |
                        <ul class="dropdown">

                           <li>
                              <a href="index.php?page=activites">Ngazidja</a>
                           </li>
                           <li>
                              <a href="index.php?page=parametre">Anjouan</a>
                           </li>
                           <li><a href="index.php?page=deconnexion">Moheli</a></li>
                           <li><a href="index.php?page=deconnexion">Mayotte</a></li>
                        </ul>
                     </li>
                  <?php endif; ?>

                  <li class="has-dropdown">
                     <a href="#"> Mon compte</a> |
                     <ul class="dropdown">
                        <?php if (isset($_SESSION['Adresse'])) : ?>
                           <li>
                              <a href="index.php?page=activites">Mes Activités</a>
                           </li>
                           <li>
                              <a href="index.php?page=parametre">Paramètres</a>
                           </li>
                           <li><a href="index.php?page=deconnexion">Deconnexion</a></li>
                        <?php else : ?>

                           <!-- <li><a href="General/inscription.php">M'inscrire</a></li> -->
                           <li> <a href="" data-toggle="modal" data-target="#Inscription">M'inscrire</a>
                           </li>
                           <li><a href="" data-toggle="modal" data-target="#Connexion">Connexion</a></li>
                        <?php endif; ?>

                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class=" line"><span></span></div>

   <div class="adresse">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-5 col-md-5 col-lg-5">
               <span>Afrique de l'Est : contacte.zaenma@yahoo.com | zaenma@outlook.fr</span>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">
               <span>Afrique de l'Ouest : moussab9898@gmail.com | +221 765635873</span>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
               <a href="#"><i class="icon-twitter"></i></a>
               <a href="#"><i class="icon-facebook"></i></a>
               <a href="#"><i class="icon-linkedin"></i></a>
               <a href="#"><i class="icon-dribbble"></i></a>
            </div>
         </div>
      </div>
   </div>
</nav>

<!-- BOIT MODAL POUR -->

<div class="modal fade" id="Inscription" tabindex="-1" role="dialog" aria-labelledby="InscriptionLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="InscriptionLabel">Inscription</h4>
         </div>
         <div class="modal-body">
            <form action="" method="POST">
               <div class="form-group">
                  <label for="name" class="">Nom</label>
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
                  <input type="password" class="form-control" id="but" name="password_Confirme" placeholder="Confirmation de passe">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  <input type="submit" class="btn btn-primary" name="Btn_Inscription" value="CRÉER MON COMPTE">
                  <a href="" data-toggle="modal" data-dismiss="modal" data-target="#Connexion">Déjà inscrit</a>
               </div>
            </form>
         </div>

      </div>
   </div>
</div>

<div class="modal fade" id="Connexion" tabindex="-1" role="dialog" aria-labelledby="ConnexionLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="ConnexionLabel">Connexion à mon compte</h4>
         </div>
         <div class="modal-body">
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
                  <div class="col-md-3">
                     <input class="btn btn-primary" type="submit" value="Me connecter " name="Btn_connecter" id="">
                  </div>
                  <div class="col-md-3">
                     <input class="form-check-input" type="checkbox"> <label class="form-check-label" for="">Reste connecter</label>
                  </div>
                  <div class="col-md-3">
                     <a href="">Mot de passe oublié</a>
                  </div>
                  <div class="col-md-3">
                     <a href="" data-toggle="modal" data-dismiss="modal" data-target="#Inscription">Pas encore un compte</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>


<div class="modal fade" id="Contacte" tabindex="-1" role="dialog" aria-labelledby="ContacteLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="ContacteLabel">Contactez-nous</h4>
         </div>
         <div class="modal-body">
            <form action="" method="POST">
               <div class="form-group">
                  <label for="adresse" class="">Adresse personnel valide</label>
                  <input name="adresse" type="email" id="" class="form-control" placeholder="E-mail">
               </div>
               <div class="form-group">
                  <label for="nom" class="">Numéro de téléphone permanent</label>
                  <input name="nom" type="text" id="" class="form-control" placeholder="Nom complet">
               </div>
               <div class="form-group">
                  <label for="name" class="">Résumé du message en quelques mots</label>
                  <textarea name="sujet" id="" class="form-control" placeholder="Quelques mots résumant votre message"></textarea>
               </div>
               <div class="form-group">
                  <label for="message" class="">Votre message détaillé</label>
                  <textarea name="message" id="" class="form-control" placeholder="Votre message de manière détaillé et comprensif"></textarea>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  <input type="submit" class="btn btn-primary" name="Btn_Messages" value="ENVOYER LE MESSAGE">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>