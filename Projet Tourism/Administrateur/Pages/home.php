<main class="page-content">
   <h2 class="text-center">Page d'administration de du site </h2>
   <div class="container-fluid">
      <h5 class="text-center">Activités du site </h5>
      <hr>
      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Nombre des billets réservés </h6>
                  <a href="https://github.com/azouaoui-med/angular-pro-sidebar" target="_blank" class="btn btn-primary btn-sm">Github</a>
                  <a href="https://azouaoui-med.github.io/angular-pro-sidebar/demo/" target="_blank" class="btn btn-success btn-sm">Plus des détails</a>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Nombre des Utilisateurs inscrits </h6>
                  <span target="_blank" class="btn btn-primary btn-sm"><?= $nombreMembres ?> </span>
                  <a href="?Option=Liste_Utilisateurs" target="_blank" class="btn btn-success btn-sm">Voir la liste complet</a>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Demandeurs d'infos</h6>
                  <a href="https://github.com/azouaoui-med/lightning-admin-angular" target="_blank" class="btn btn-primary btn-sm">Github</a>
                  <a href="https://azouaoui-med.github.io/lightning-admin-angular/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a>
               </div>
            </div>
         </div>
      </div>
   </div>



</main>
<!-- fin de wrapper -->
<div class="container">
   <div class="row">
      <div class="col-lg-1">
         <b>Identifiants</b><br>
        
      </div>
      <div class="col-lg-1">
         <b>Pseudos</b><br>
         
      </div>
      <div class="col-lg-1">
         <b>Noms</b><br>
        
      </div>
      <div class="col-lg-1">
         <b>Prénoms</b><br>
        
      </div>
      <div class="col-lg-3">
         <b>Adresses</b><br>
        
      </div>
      <div class="col-lg-1">
         <b>Téléphone</b><br>
        
      </div>
      <div class="col-lg-1">
         <b>Nationalités</b><br>
         
      </div>
      <div class="col-lg-1">
         <b>Photos</b><br>
         
      </div>
   </div>
   <hr>
   <?php
   if (isset($_GET['Option']) and !empty($_GET['Option']) and $_GET['Option'] == "Liste_Utilisateurs") {

      foreach ($Liste_membres as $Listes_User) {
         ?>
         <div class="row">
            <div class="col-lg-1">
               <?= $Listes_User->Identifiant ?>
            </div>
            <div class="col-lg-1">
               
               <?= $Listes_User->Pseudo ?>
            </div>
            <div class="col-lg-1">
               
               <?= $Listes_User->Nom ?>
            </div>
            <div class="col-lg-1">
               
               <?= $Listes_User->Prenom ?>
            </div>
            <div class="col-lg-3">
               
               <?= $Listes_User->Adresse ?>
            </div>
            <div class="col-lg-1">
               
               <?= $Listes_User->Telephone ?>
            </div>
            <div class="col-lg-1">
               
               <?= $Listes_User->Nationalite ?>
            </div>
            <div class="col-lg-1">
               <?= $Listes_User->Photo ?>
            </div>
         </div>
   <?php
      }
   }
   ?>
</div>
</div>