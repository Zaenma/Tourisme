<main class="page-content">
   <h2 class="text-center">Tableau de dord de blog </h2>
   <div class="container-fluid">
      <h5 class="text-center">Activités du blog</h5>
      <hr>
      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Publications</h6>
                  <span target="_blank" class=""><?= $nombrePublication ?></span>
                  <a href="administrateur.php?page=admin-blog&information=publications" target="_blank" class="btn btn-success btn-sm">Voir les Publications</a>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Commentaires </h6>
                  <span target="_blank" class="btn btn-primary btn-sm"><?= $nombreCommentaire ?> </span>
                  <a href="administrateur.php?page=admin-blog&information=commentaires" target="_blank" class="btn btn-success btn-sm">Voir les Commentaires</a>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Administrateurs</h6>
                  <a href="https://github.com/azouaoui-med/lightning-admin-angular" target="_blank" class="btn btn-primary btn-sm">Github</a>
                  <a href="https://azouaoui-med.github.io/lightning-admin-angular/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<!-- fin de wrapper -->
</div>