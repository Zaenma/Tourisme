<div class="container-fluid">
   <div id="" class="fh5co-card-item">
      <div class="gtco-container">
         <div class="text-center gtco-heading animate-box">
            <h2>Quelques expériences de nos clients</h2>
            <div class="ligne-separe-footer"><span></span></div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
               <div class="row">
                  <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                     <a href="images/person_4.jpg" class="image-popup">
                        <img src="images/person_4.jpg" alt="" class="img-expe img-responsive img-rounded">
                     </a>
                  </div>
                  <div class="col-xs-9 col-md-9 col-sm-9 col-lg-9 gtco-heading animate-box">
                     <i>Nous avons fait un excellent voyage aux Comores, tout a bien fonctionné. Les quatres Îles sont incroyables. Nous avons apprécié le fait qu'on a vu les cœlacanthes (des poisons très rares au monde). Fantastiques Îles, nous y retournerons certainement.</i>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
               <div class="row">
                  <div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
                     <a href="images/person_4.jpg" class="image-popup">
                        <img src="images/person_4.jpg" alt="" class="img-expe img-responsive img-rounded">
                     </a>
                  </div>
                  <div class="col-xs-9 col-md-9 col-sm-9 col-lg-9 gtco-heading animate-box">
                     <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum pariatur veritatis ipsam aliquam accusamus. Corrupti numquam ea tempora dolores qui reiciendis neque error, magnam cupiditate, eaque excepturi voluptate aut illo.</i>
                  </div>
               </div>
            </div>
         </div>
         <div class="text-center gtco-heading animate-box">
            <h2>Publiez des expériences </h2>
            <div class="ligne-separe-footer"><span></span></div>
         </div>
         <div class="row">
            <form action="" class="form-group">
               <div class="row form-group">
                  <div class="col-md-6">
                     <label for="titre">Le titre de votre publication </label>
                     <input type="text" id="titre" class="form-control" name="titre">
                  </div>
                  <div class="col-md-6">
                     <label for="photo">Importer une image de votre publication</label>
                     <input type="file" id="photo" class="form-control" name="photo">
                  </div>
                  <div class="col-md-12">
                     <label for="texte">Publiez votre texte</label>
                     <textarea name="" id="texte" class="form-control"></textarea>
                  </div>
               </div>
               <?php if (isset($_SESSION['Adresse'])) : ?>
                  <input type="submit" class="btn btn-primary" value="PUBLIER" name="Btn-publication">
               <?php else : ?>
                  <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#Connexion" value="PUBLIER">
               <?php endif; ?>
            </form>
         </div>
      </div>
   </div>
</div>
<div id="gtco-subscribe" class="fh5co-card-item">
   <div class="gtco-container">
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
            <h2>Récevoir le newslater </h2>
            <p>Recevoir des nouvelles ofores, des mis à jour de notre site</p>
         </div>
      </div>
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2">
            <form class="form-inline">
               <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                     <label for="email" class="sr-only">Email</label>
                     <input type="email" class="form-control" id="email" placeholder="Your Email">
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <button type="submit" class="btn btn-default btn-block">Subscribe</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<footer id="gtco-footer" role="contentinfo">
   <div class="gtco-container">
      <div class="row">
         <div class="col-xs-6 col-md-3 col-sm-6 col-lg-3">
            <div class="gtco-widget">
               <h3>Logo</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
            </div>
         </div>
         <div class="col-xs-6 col-md-2 col-sm-6 col-lg-3 col-md-push-1">
            <div class="gtco-widget">
               <h3>Destination</h3>
               <ul class="gtco-footer-links">
                  <li><a href="#">Comores</a></li>
                  <li><a href="#">Mauritanie</a></li>
                  <li><a href="#">Sénégal</a></li>
                  <li><a href="#">Togo</a></li>
                  <li><a href="#">Mali</a></li>
                  <li><a href="#">Mozambique</a></li>
                  <li><a href="#">Namibi</a></li>
                  <li><a href="#">Botsana</a></li>
                  <li><a href="#">Cote d'Ivoir</a></li>
                  <li><a href="#">Madagascar</a></li>
                  <li><a href="#">Etiopie</a></li>
                  <li><a href="#">Tchad</a></li>
                  <li><a href="#">Oungada</a></li>
                  <li><a href="#">Sao Tomé et Principe</a></li>
               </ul>
            </div>
         </div>

         <div class="col-xs-6 col-md-2 col-sm-6 col-lg-3 col-md-push-1">
            <div class="gtco-widget">
               <h3>Nos Expériences</h3>
               <ul class="gtco-footer-links">
                  <li><a href="#">Plages</a></li>
                  <li><a href="#">Forêts</a></li>
                  <li><a href="#">Familles</a></li>
                  <li><a href="#">Voyage de noces</a></li>
                  <li><a href="#">Auto-conduite</a></li>
                  <li><a href="#">L'observation des animeaux terrestre et marines</a></li>
                  <li><a href="#">L'Observation de Scœlacanthe (Aux Comores)</a></li>
               </ul>
            </div>
         </div>

         <div class="col-xs-6 col-md-2 col-sm-6 col-lg-3 col-md-push-1">
            <div class="gtco-widget">
               <h3>Contacte de l'agence principale</h3>
               <ul class="gtco-quick-contact">
                  <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                  <li><a href="#"><i class="icon-mail2"></i> info@freehtml5.co</a></li>
                  <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
               </ul>
            </div>
         </div>

      </div>

      <div class="row copyright">
         <div class="col-md-12">
            <p class="pull-left">
               <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
            </p>
            <p class="pull-right">
               <ul class="gtco-social-icons pull-right">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
               </ul>
            </p>
         </div>
      </div>

   </div>
</footer>
<!-- </div> -->