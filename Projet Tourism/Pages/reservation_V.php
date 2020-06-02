<?php include 'Blog/script_php.php'; ?>
<div class="gtco-loader"></div>
<div id="page">
   <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
      <div class="overlay"></div>
      <div class="gtco-container">
         <div class="mt-text animate-box" data-animate-effect="fadeInUp">
            <h1>Planifier votre tour d'Afrique et découvrir ce que le contient a à offrir</h1>
         </div>
         <?php
         if (isset($_SESSION['Adresse']) and !empty($_SESSION['Adresse'])) {

            ?>
            <div class="animate-box" data-animate-effect="fadeInRight">
               <div class="form-wrap">
                  <div class="tab">
                     <div class="tab-content">
                        <div class="tab-content-inner active" data-content="signup">
                           <?php if ($erreur != "NULL") {
                                 echo $erreur;
                              } ?>
                           <h3>Réservez votre voyage</h3>
                           <form action="" method="POST">
                              <div class="row form-group">
                                 <div class="col-md-4">
                                    <label for="name">Votre nom complet</label>
                                    <input name="nom" value="<?= (isset($_SESSION['Identifiant']) && ($utilisateur->Nom !== "NULL")) ? $utilisateur->Nom : "" ?>" placeholder="Entrer votre nom complet" type="text" id="name" class="form-control">
                                 </div>
                                 <div class="col-md-4">
                                    <label for="">Votre adresse personnel électronique</label>
                                    <input name="adresse" type="text" id="" class="form-control" value="<?= (isset($_SESSION['Identifiant'])) ? $utilisateur->Adresse : "" ?>" placeholder="Entrer votre adresse électronique">
                                 </div>
                                 <div class="col-md-4">
                                    <label for="telephone">Votre numéro de télephone permanent</label>
                                    <input name="telephone" type="text" id="telephone" class="form-control" value="<?= (isset($_SESSION['Identifiant']) && ($utilisateur->Telephone !== "NULL")) ? $utilisateur->Telephone : "" ?>" placeholder="Numéro de téléphone permanent">
                                 </div>
                              </div>
                              <div class="row form-group">
                                 <div class="col-md-5">
                                    <label for="destination">Ville de départ </label>
                                    <select name="V_depart" id="destination" class="form-control">
                                       <option value="">Comores</option>
                                       <option value="">Madagascar</option>
                                       <option value="">Mozambique</option>
                                       <option value="">Sénégal</option>
                                       <option value="">Mauritanie</option>
                                       <option value="">Guiné Conakry</option>
                                       <option value="">Guiné Bisao</option>
                                       <option value="">Cote d'Ivoir</option>
                                       <option value="">Mali</option>
                                       <option value="">Ouganda</option>
                                       <option value="">Gana</option>
                                       <option value="">Nigeria</option>
                                       <option value="">Zimbabwé</option>
                                       <option value="">Tanzanie</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                    </select>
                                 </div>
                                 <div class="col-md-5">
                                    <label for="destination">Ville d'arivée </label>
                                    <select name="V_arrivee" id="destination" class="form-control">
                                       <option value="">Philippines</option>
                                       <option value="">USA</option>
                                       <option value="">Australia</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                       <option value="">Singapore</option>
                                    </select>
                                 </div>
                                 <div class="col-md-2">
                                    <label for="destination">Les prix disponible</label>
                                    <select name="prix" id="destination" class="form-control">
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                       <option value="">OOOOO€</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="row form-group">
                                 <div class="col-md-4">
                                    <label for="">Date départ</label>
                                    <input name="D_depart" type="date" id="" class="form-control">
                                 </div>
                                 <div class="col-md-4">
                                    <label for="">Date de retour</label>
                                    <input name="D_arrivee" type="date" id="" class="form-control">
                                 </div>
                                 <div class="col-md-4">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <label for="">Nombre d'adults </label>
                                          <select name="N_enfant" id="" class="form-control">
                                             <option value="">0</option>
                                             <option value="">1</option>
                                             <option value="">2</option>
                                             <option value="">3</option>
                                             <option value="">4</option>
                                             <option value="">5</option>
                                             <option value="">6</option>
                                             <option value="">7</option>
                                             <option value="">8</option>
                                             <option value="">9</option>
                                             <option value="">10</option>
                                          </select>
                                       </div>
                                       <div class="col-md-6">
                                          <label for="">Nombre d'enfants</label>
                                          <select name="N_adult" id="" class="form-control">
                                             <option value="">0</option>
                                             <option value="">1</option>
                                             <option value="">2</option>
                                             <option value="">3</option>
                                             <option value="">4</option>
                                             <option value="">5</option>
                                             <option value="">6</option>
                                             <option value="">7</option>
                                             <option value="">8</option>
                                             <option value="">9</option>
                                             <option value="">10</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row form-group">
                                 <div class="col-md-12">
                                    <input name="Btn_Reserver_Vole" type="submit" class="btn btn-primary btn-block" value="Reserver mon billet">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php
         } else {
            ?>
            <div class="animate-box" data-animate-effect="fadeInRight">
               <div class="form-wrap">
                  <div class="tab">
                     <div class="tab-content">
                        <div class="tab-content-inner active" data-content="signup">
                           <h3 class="text-center">Réservez votre voyage, les étapes de réservation, facile et rapide</h3>
                           <ul>
                              <li>Inscription/Connexion rapide</li>
                              <li>Renseignez vos informations personnel</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php
         }
         ?>
      </div>
   </header>

   <div class="gtco-section">
      <div class="gtco-container">
         <div class="row  animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
               <h2>Nos destinations les plus populaire</h2>
               <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="fh5co-card-item">
                  <a href="images/img_1.jpg" class="image-popup">
                     <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </a>
                  <div class="fh5co-text">
                     <h2>Moroni <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Paris</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <a href="#" class="btn btn-primary">Réservez</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="fh5co-card-item">
                  <a href="images/img_2.jpg" class="image-popup">
                     <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </a>
                  <div class="fh5co-text">
                     <h2>Moroni <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Nouakchot</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <a href="#" class="btn btn-primary">Réservez</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="fh5co-card-item">
                  <a href="images/img_3.jpg" class="image-popup">
                     <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </a>
                  <div class="fh5co-text">
                     <h2>Moroni <i class="fa fa-exchange" aria-hidden="true"></i> Anjouan</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <a href="#" class="btn btn-primary">Réservez</a>
                  </div>
               </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="fh5co-card-item">
                  <a href="images/img_4.jpg" class="image-popup">
                     <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </a>
                  <div class="fh5co-text">
                     <h2>Moroni <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Dakar</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <a href="#" class="btn btn-primary">Réservez</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="fh5co-card-item">
                  <a href="images/img_5.jpg" class="image-popup">
                     <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </a>
                  <div class="fh5co-text">
                     <h2>Dakar <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Moroni</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <a href="#" class="btn btn-primary">Réservez</a>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="fh5co-card-item">
                  <a href="images/img_6.jpg" class="image-popup">
                     <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </a>
                  <div class="fh5co-text">
                     <h2>Conakry <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Nouakchott</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                     <a href="#" class="btn btn-primary">Réservez</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

   <div id="gtco-features">
      <div class="gtco-container">
         <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
               <h2>How It Works</h2>
               <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div class="feature-center animate-box" data-animate-effect="fadeIn">
                  <span class="icon">
                     <i>1</i>
                  </span>
                  <h3>Lorem ipsum dolor sit amet</h3>
                  <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="feature-center animate-box" data-animate-effect="fadeIn">
                  <span class="icon">
                     <i>2</i>
                  </span>
                  <h3>Consectetur adipisicing elit</h3>
                  <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="feature-center animate-box" data-animate-effect="fadeIn">
                  <span class="icon">
                     <i>3</i>
                  </span>
                  <h3>Dignissimos asperiores vitae</h3>
                  <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
               </div>
            </div>


         </div>
      </div>
   </div>


   <div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="gtco-container text-center">
         <div class="display-t">
            <div class="display-tc">
               <h1>We have high quality services that you will surely love!</h1>
            </div>
         </div>
      </div>
   </div>

   <div id="gtco-counter" class="gtco-section">
      <div class="gtco-container">

         <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
               <h2>Our Success</h2>
               <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
         </div>

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
                  <span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
                  <span class="counter-label">Happy Customer</span>

               </div>
            </div>

         </div>
      </div>
   </div>



   <div id="gtco-subscribe">
      <div class="gtco-container">
         <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
               <h2>Subscribe</h2>
               <p>Be the first to know about the new templates.</p>
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
         <div class="row row-p	b-md">

            <div class="col-md-4">
               <div class="gtco-widget">
                  <h3>About Us</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
               </div>
            </div>

            <div class="col-md-2 col-md-push-1">
               <div class="gtco-widget">
                  <h3>Destination</h3>
                  <ul class="gtco-footer-links">
                     <li><a href="#">Europe</a></li>
                     <li><a href="#">Australia</a></li>
                     <li><a href="#">Asia</a></li>
                     <li><a href="#">Canada</a></li>
                     <li><a href="#">Dubai</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-md-2 col-md-push-1">
               <div class="gtco-widget">
                  <h3>Hotels</h3>
                  <ul class="gtco-footer-links">
                     <li><a href="#">Luxe Hotel</a></li>
                     <li><a href="#">Italy 5 Star hotel</a></li>
                     <li><a href="#">Dubai Hotel</a></li>
                     <li><a href="#">Deluxe Hotel</a></li>
                     <li><a href="#">BoraBora Hotel</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-md-3 col-md-push-1">
               <div class="gtco-widget">
                  <h3>Get In Touch</h3>
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
                  <small class="block">Designed by <a href="https://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
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