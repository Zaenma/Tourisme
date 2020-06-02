<?php

if (isset($_POST['Btn_Inscription']) && !empty($_POST['Btn_Inscription'])) 
{
   htmlspecialchars(trim(extract($_POST)));
   
   if (!empty($pseudo_Inscription) && !empty($adresse_inscription)) 
   {
      $existe = verificationCulumn("Adresse", "Utilisateurs", $adresse_inscription);
      if ($existe == 0 || $existe->Adresse != $adresse_inscription) 
      {
         if (!empty($adresse_Confirme) && $adresse_Confirme == $adresse_inscription) 
         {
            if (!empty($password_Inscrit) && strlen($password_Inscrit) > 6) 
            {
               if (!empty($password_Confirme) && $password_Confirme == $password_Inscrit) 
               {
                  $password_Inscrit = sha1($password_Inscrit);
                  Insert_Utilisateurs($pseudo_Inscription, $adresse_inscription, $password_Inscrit);
                  header("location:index.php?page=" . $_GET['page'] . "&&message=Félicitation, votre inscription est bien faite, maintenant la découvert de l'Afrique est facile pour vous");
               }else{
                  header("location:index.php?page=" . $_GET['page'] . "&&message=Les deux mots de de passe doivent être identiques et contenir au moins 6 caractères");
               }
            }else{
               header("location:index.php?page=".$_GET['page']."&&message=Le mot de de passe doit contenir au moins 6 caractères");
            }
         }else{
            header("location:index.php?page=home&&message=Veillez verifier la confirmation de votre adresse");
         }
      }else{
         header("Location:index.php?page=home&&message=L'Adresse que vous avez saisi n'est pas valide pour l'inscription, veillez vérifier !");
      }
   }else{
      header("Location:index.php?page=home&&message=Le champs Nom ne doit pas être vide !");
   }
}

/**
 * SCRIPT DE CONNEXION 
 */

if (!empty($_POST['Btn_connecter'])) {

   htmlspecialchars(trim(extract($_POST)));

   if (!empty($adresse_connexion)) 
   {
      if (!empty($password_connexion)) 
      {
         $existe = Utilisateur_Existe($adresse_connexion, $password_connexion);
         if ($existe == 0) 
         {
            $_SESSION['Adresse'] = $adresse_connexion;
            $_SESSION['password'] = $password_connexion;

            header("location:index.php?page=home&&utilisateur=".$_SESSION['Adresse']);
         }else{
            header("location:index.php?page=" . $_GET['page'] . "&&message=Veillez renseigner les bonnes informations pour connexion");
         }
      }else{
         header("location:index.php?page=" . $_GET['page'] . "&&message=Le mot de passe saisi est incorecte");
      }
   }else{
      header("location:index.php?page=" . $_GET['page'] . "&&message=Veillez vérifier votre adresse de connexion ou inscrivez -vous si c'est pas encore faite");
   }
}
/***
 * 
 * SCRIPT D'ENVOI DES MESSAGES
 */
if (!empty($_POST['Btn_Messages'])) {

   htmlspecialchars(trim(extract($_POST)));

   if (!empty($adresse)) {
      if (!empty($nom)) 
      {
         if (!empty($sujet)) {
            if (!empty($message)) 
            {
               Insert_Messages($adresse, $nom, $sujet, $message);
            } else {
               header("location:index.php?page=" . $_GET['page'] . "&&message=Le mot de passe saisi est incorecte");
            }
         } else {
            header("location:index.php?page=" . $_GET['page'] . "&&message=Veillez remplir corectement les deux champs ");
         }
      }else{
      header("location:index.php?page=" . $_GET['page'] . "&&message=Il est récommendé d'ajouter votre numéro de téléphone");
      }
   }else{
      header("location:index.php?page=" . $_GET['page'] . "&&message=Pour récevoir une réponse détaillé de votre message, veillez entrer votre adresse électronique");
   }
   
}

if (isset($_POST['reserver']) && !empty($_POST['reserver'])) 
{
   htmlspecialchars(trim(extract($_POST)));
   
   if (!empty($commentaire) && strlen($commentaire) > 5) 
   {
      if (!empty($date_aller) && !empty($date_retour)) 
      {
         Insert_Reservation("Reservations", $date_aller, $date_retour, $commentaire);
         header("location:index.php?page=details&&ile=" . $_GET['ile'] . "&&message=Merci pour votre message, on vous sera contacter dans quelques minute dans votre adresse mail pour la confirmation de votre message");
      }else{
      header("location:index.php?page=details&&ile=" . $_GET['ile'] . "&&message=Les date ne sont pas correctes");
      }
      
   }else{
      header("location:index.php?page=details&&ile=" . $_GET['ile'] . "&&message=S'il vous plait, parlez nous l'objectif complet de votre message");
   }  
}


if (isset($_POST['Btn-publication']) && !empty($_POST['Btn-publication'])) 
{
   htmlspecialchars(trim(extract($_POST)));

   header('location:index.php?page=home&&messageInfo=merci');

   // if (!empty($titre)) 
   // {
   //    if (isset($photo) && !empty($photo)) 
   //    {
         
   //       if (isset($_FILES['photo']) and !empty($_FILES['Photo']['name'])) {
   //          $tailleMax = 5242880;
   //          $extensionsValides = array('jpg', 'jpeg',  'gif', 'png');
   //          if ($_FILES['photo']['size'] <= $tailleMax) {
               
   //             $extensionImporter = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1)); // Prend l'extension après le point, soit "jpg, jpeg, gif ou png"
   //             if (in_array($extensionImporter, $extensionsValides)) {
   //                $chemin = "Publications/" . $_POST['titre'] . "." . $extensionImporter;
   //                $resultat = move_uploaded_file($_FILES['Photo']['tmp_name'], $chemin);
                  
   //             } else {
   //                header("location:index.php?page=" . $_GET['ile'] . "&&messageInfo=L'extention de votre fichier n'est pas pris en charge !");
   //             }
   //          } else {
   //             header("location:index.php?page=" . $_GET['ile'] . "&&messageInfo=La taille maximal de votre photo doit être 5Mo");
   //          }
   //       }
   //    }else{
   //       header("location:index.php?page=" . $_GET['ile'] . "&&messageInfo=La photo permet d'illustrer votre publication, si vous en avez pas, choisir une image par defaut");
   //    }
   // }else{
   //    header("location:index.php?page=" . $_GET['page'] . "&&messageInfo=Le titre de votre publication est important, vous devez l'ajouter avant de publier");
   // }
}
