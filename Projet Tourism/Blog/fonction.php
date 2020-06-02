<?php
   function Affiche_publications()
   {
      global $bdd;
      $SAL_selection_Article = $bdd->query("SELECT Publications.Identifiant,
                                                   Publications.Titres,
                                                   Publications.Photos,
                                                   Publications.Date_Publication,
                                                   Publications.Contenus,
                                                   Utilisateurs.Pseudo
                                             FROM Publications
                                             JOIN Utilisateurs
                                             ON Publications.User_Publier=Utilisateurs.Identifiant
                                             WHERE Confirme='1'
                                             ORDER BY Date_Publication DESC
                                             LIMIT 0,2");
      $results = [];
      while ($rows = $SAL_selection_Article->fetchObject()) {
         $results[] = $rows;
      }
      return $results;
   }

function Affiche_publication_precis()
{
   global $bdd;
   $req = $bdd->query("SELECT Publications.Identifiant,
                              Publications.Titres,
                              Publications.Photos,
                              Publications.Date_Publication,
                              Publications.Contenus,
                              Utilisateurs.Pseudo
                        FROM Publications
                        JOIN Utilisateurs
                        ON Publications.User_Publier=Utilisateurs.Identifiant
                        WHERE Publications.Identifiant='{$_GET['Identifiant']}'
                        AND Publications.Confirme = '1'
                     ");

   $result = $req->fetchObject();
   return $result;
}



function Insert_Commentaire($User_Commentee, $Adresse_User_Commentee, $Commentaire)
{
   global $bdd;

   $Donnees_Commentaire = array(
      'Nom'      => $User_Commentee,
      'Adresse'     => $Adresse_User_Commentee,
      'Commentaire'   => $Commentaire,
      'Id_Article_Commentee'   => $_GET["Identifiant"]
   );
   $sql = "INSERT INTO Commentaires(Nom,Adresse,Commentaire,Id_Article_Commentee,Date_Commentaire) VALUES(:Nom, :Adresse, :Commentaire, :Id_Article_Commentee, NOW())";
   $req = $bdd->prepare($sql);
   $req->execute($Donnees_Commentaire);
}

function Insert_Utilisateurs($PseudoUser, $Adresse_User, $password)
{
   global $bdd;

   $longueurcle = 30;
   $cle_Confirme = "";
   for ($i = 1; $i < $longueurcle; $i++) {
      $cle_Confirme .= mt_rand(0, 100);
   }

   $Donnees_Users = array(
      'Pseudo'        => $PseudoUser,
      'Adresse'       => $Adresse_User,
      'Mot_de_passe'  => $password,
      'Cle_confirme'  => $cle_Confirme
   );
   $sql = "INSERT INTO Utilisateurs(Pseudo,Adresse,Cle_confirme,Mot_de_passe,Date_Inscription) VALUES(:Pseudo, :Adresse, :Cle_confirme, :Mot_de_passe, NOW())";
   $req = $bdd->prepare($sql);
   $req->execute($Donnees_Users);
}

function Insert_Messages($adresse, $nom, $sujet, $message)
{
   global $bdd;   
   $Donnees_Messages = array(
      'Titres'             => $sujet,
      'Message'            => $message,
      'Identifiant_User'   => $adresse,
      'Nom'          => $nom
   );
   $sql = "INSERT INTO Messages(Identifiant_User,Nom,Titres,Message,Date_Denvoie) VALUES(:Identifiant_User, :Nom, :Titres, :Message, NOW())";
   $req = $bdd->prepare($sql);
   $req->execute($Donnees_Messages);
}



function Affiche_Commentaire()
{
   global $bdd;
   $req = $bdd->query("SELECT * FROM Commentaires WHERE Id_Article_Commentee = '{$_GET['Identifiant']}' ORDER BY Date_Commentaire DESC");
   $results = [];
   while ($rows = $req->fetchObject()) {
      $results[] = $rows;
   }
   return $results;
}


function Nombre_Ligne($Nom_Tableau)
{
   global $bdd;
   $req = $bdd->query("SELECT Identifiant FROM $Nom_Tableau");
   $resultat = $req->rowCount();
   return $resultat;
}

function Insert_Reservation($Nom_Tableau, $date_aller, $date_retour, $Commentaire){
   global $bdd;
   $Donnees_Messages = array(
      'Identifiant_User'   => $_SESSION['Adresse'],
      'Date_Aller'         => $date_aller,
      'Date_retour'        => $date_retour,
      'Commentaire'        => $Commentaire
      
   );
   $sql = "INSERT INTO $Nom_Tableau(Identifiant_User,Date_Aller,Date_retour,Commentaire,Date_Denvoie) VALUES(:Identifiant_User, :Date_Aller, :Date_retour, :Commentaire, NOW())";
   $req = $bdd->prepare($sql);
   $req->execute($Donnees_Messages);                                    
}


function User_en_Session(){
   global $bdd;
   if (isset($_SESSION['Identifiant'])) 
   {
      $utilisateur = $_SESSION['Identifiant'];
      $SQL_selection = $bdd->query("SELECT * FROM Utilisateurs WHERE Identifiant = $utilisateur");

      $resultat = $SQL_selection->fetchObject();
      return $resultat;
   }
}

function Affiche_Les_lignes($Nom_table)
{
   global $bdd;
   $SAL_selection_Article = $bdd->query("SELECT * 
                                          FROM $Nom_table
                                          ORDER BY Identifiant
                                          LIMIT 0,5");
   $results = [];
   while ($rows = $SAL_selection_Article->fetchObject()) {
      $results[] = $rows;
   }
   return $results;
}
/**
 * FONCTION QUI SELECTIONNE LES INFORMATIONS DE L'UTILISATEUR EN SESSION 
 */
function existe_session($variable){
   global $bdd;
   if (isset($_SESSION['$variable'])) 
   {
      $donnees = $_SESSION['$variable'];
      $SQL_selection = $bdd->query("SELECT * FROM Utilisateurs WHERE Identifiant = '$donnees' OR Adresse = '$donnees' OR Pseudo = '$donnees'");
      $resultat = $SQL_selection->fetchObject();
      return $resultat;
   }else{
      return 0;
   }
}


function Utilisateur_Existe($adresse, $password)
{
   global $bdd;
   $Infos = [
      'adresse_connexion'   =>  $adresse,
      'password_connexion'  =>  sha1($password)
   ];
   $sql = "SELECT * FROM Utilisateurs WHERE Adresse = :adresse_connexion AND password = :password_connexion";
   $req = $bdd->prepare($sql);
   $req->execute($Infos);
   $existe = $req->rowCount($sql);
   if ($existe != 0) 
   {
      $donnees = $req->fetchObject($sql);
      return $donnees;
   }else{
      return 0;
   }   
}

function verificationCulumn($nomColone, $Nom_table, $Valeur){
   global $bdd;

   $SQL_selection = $bdd->query("SELECT * FROM $Nom_table WHERE $nomColone = '$Valeur'");
   $resultat = $SQL_selection->rowCount();
   if ($resultat != 0) 
   {
      $donnees = $SQL_selection->fetchObject();
      return $donnees;
   }else{
      return 0;
   }
}


function Date_correcte($date, $format = 'd/m/Y')
{
   $dt = DateTime::createFromFormat($format, $date);
   return $dt && $dt->format($format) === $date;
}
