<?php
if (isset($_POST['Btn_connecxion_Admin'])) {
   htmlspecialchars(trim(extract($_POST)));
   $UserExiste = Utilisateur_Existe($adresse_connexion, $password_connexion);
   $erreur = "NULL";
   if (empty($adresse_connexion) || empty($password_connexion)) 
   {
      $erreur = "Tous les champs n'ont pas été remplis!";
   } else if ($UserExiste == 0) {
      $erreur  = "Assurez vous de renseigner les bonnes informations pour acceder à la page d'administration";
   }elseif ($UserExiste->Profile != "Administrateur") 
   {
      $erreur = "Désolé !!! Vous n'etes pas autorisé d'acceder dans cet espace";
   }
   if ($erreur != "NULL") {
      ?>
      <p class="alter alter-warning"><?= $erreur ?></p>
<?php
   } else {
      $_SESSION['administrateur'] = $adresse_connexion;
      header("Location:administration.php?page=home");
   }
}


?>

<div class="container">
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
               <input class="btn" type="submit" value="Me connecter " name="Btn_connecxion_Admin" id="">
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