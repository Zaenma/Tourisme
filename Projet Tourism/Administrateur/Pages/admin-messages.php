<main class="page-content">
   <h2 class="text-center">Tableau de dord de messageries</h2>
   <div class="container-fluid">
      <h5 class="text-center">Activités du blog</h5>
      <hr>
      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Total des messages</h6>
                  <span target="_blank" class=""><?= $nombreMessages ?></span>
                  <a href="administrateur.php?page=admin-blog&information=publications" target="_blank" class="btn btn-success btn-sm">Lire les messages</a>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Messages non repondu </h6>
                  <span target="_blank" class="btn btn-primary btn-sm"><?= $nombreCommentaire ?> </span>
                  <a href="administrateur.php?page=admin-blog&information=commentaires" target="_blank" class="btn btn-success btn-sm">Répondes</a>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card rounded-0 p-0 shadow-sm">
               <div class="card-body text-center">
                  <h6 class="card-title">Réponses envoyés</h6>
                  <a href="" target="_blank" class="btn btn-primary btn-sm"><?= $nombreReponses ?></a>
                  <a href="" target="_blank" class="btn btn-success btn-sm">Plus d'actions</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<!-- fin de wrapper -->
</div>