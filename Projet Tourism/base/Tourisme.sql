-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 04 Décembre 2019 à 12:37
-- Version du serveur :  5.7.28-0ubuntu0.19.04.2
-- Version de PHP :  7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Tourisme`
--

-- --------------------------------------------------------

--
-- Structure de la table `Commentaires`
--

CREATE TABLE `Commentaires` (
  `Identifiant` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Commentaire` text NOT NULL,
  `Id_Article_Commentee` int(11) NOT NULL,
  `Date_Commentaire` datetime NOT NULL,
  `Vu` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Commentaires`
--

INSERT INTO `Commentaires` (`Identifiant`, `Nom`, `Adresse`, `Commentaire`, `Id_Article_Commentee`, `Date_Commentaire`, `Vu`) VALUES
(1, 'Zaenma', 'contact.zaenma@yahoo.com', 'Teste', 2, '2019-11-20 09:32:25', 0),
(2, 'Zaenma', 'contact.zaenma@yahoo.com', 'Teste', 2, '2019-11-20 09:35:01', 0),
(3, 'Zaenma', 'contact.zaenma@yahoo.com', 'Les îles Comores sont bonnes ', 1, '2019-11-20 16:41:31', 0),
(4, 'Zaenma', 'contact.zaenma@yahoo.com', 'je suis Zaenma ', 1, '2019-11-22 15:53:48', 0);

-- --------------------------------------------------------

--
-- Structure de la table `Hotel`
--

CREATE TABLE `Hotel` (
  `Identifiant_Hotel` int(11) NOT NULL,
  `Identifiant_Ville` int(11) NOT NULL,
  `Nom_Hotel` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Fax` varchar(255) NOT NULL,
  `Classement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Messages`
--

CREATE TABLE `Messages` (
  `Identifiant` int(11) NOT NULL,
  `Identifiant_User` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Titres` text NOT NULL,
  `Message` text NOT NULL,
  `Date_Denvoie` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Messages`
--

INSERT INTO `Messages` (`Identifiant`, `Identifiant_User`, `Nom`, `Titres`, `Message`, `Date_Denvoie`) VALUES
(1, 'contact.zaenma@yahoo.com', '', 'xssadsfdsfsfd', 'dsfgfhghthghjtvt  tr', '2019-12-02 18:12:30'),
(2, 'raficat@raficat.fr', '212322123222', 'je suis Zaenma', 'je fais le teste', '2019-12-02 23:59:24'),
(3, 'saindou@saindou.fr', 'fatou', 'zaz', 'zaz', '2019-12-03 15:38:56');

-- --------------------------------------------------------

--
-- Structure de la table `Passer_R_Vole`
--

CREATE TABLE `Passer_R_Vole` (
  `Identifiant` int(11) NOT NULL,
  `U_Reserve` int(11) NOT NULL,
  `Date_Reservation` datetime NOT NULL,
  `N_Adult` int(11) NOT NULL,
  `N_Enfant` int(11) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `V_Depart` varchar(255) NOT NULL,
  `V_Arrivee` varchar(255) NOT NULL,
  `D_Depart` varchar(255) NOT NULL,
  `D_Arrivee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Pays`
--

CREATE TABLE `Pays` (
  `Identifiant` int(11) NOT NULL,
  `Nom_Pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Publications`
--

CREATE TABLE `Publications` (
  `Identifiant` int(11) NOT NULL,
  `Titres` text NOT NULL,
  `Contenus` text NOT NULL,
  `User_Publier` int(11) NOT NULL,
  `Date_Publication` datetime NOT NULL,
  `Photos` varchar(255) NOT NULL,
  `Confirme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Publications`
--

INSERT INTO `Publications` (`Identifiant`, `Titres`, `Contenus`, `User_Publier`, `Date_Publication`, `Photos`, `Confirme`) VALUES
(1, 'Les îles de la luns', 'Le tourisme en Afrique représente une importante activité économique. La particularité touristique de l\'Afrique réside dans la grande variété des points d’intérêts, la diversité et la multitude de paysages ainsi que le riche patrimoine culturel.', 1, '2019-11-20 16:35:08', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Reponses`
--

CREATE TABLE `Reponses` (
  `Identifiant` int(11) NOT NULL,
  `Message_Repondu` int(11) NOT NULL,
  `Reponses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Reservations`
--

CREATE TABLE `Reservations` (
  `Identifiant` int(11) NOT NULL,
  `Identifiant_User` varchar(255) NOT NULL,
  `Date_Aller` varchar(20) NOT NULL,
  `Date_retour` varchar(20) NOT NULL,
  `Commentaire` text NOT NULL,
  `Date_Denvoie` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Reservations`
--

INSERT INTO `Reservations` (`Identifiant`, `Identifiant_User`, `Date_Aller`, `Date_retour`, `Commentaire`, `Date_Denvoie`) VALUES
(1, 'contact.zaenma@yahoo.com', '12/21/1999', '13/12/2000', '', '2019-12-03 16:59:00'),
(2, 'contact.zaenma@yahoo.com', '2019-12-14', '2019-12-21', '', '2019-12-03 17:13:05'),
(3, 'contact.zaenma@yahoo.com', '2019-12-13', 'wcxxvcvcvcvc c fdvwf', '2019-12-20', '2019-12-03 17:15:57'),
(4, 'contact.zaenma@yahoo.com', '2019-12-13', 'wcxxvcvcvcvc c fdvwf', '2019-12-20', '2019-12-03 17:16:59'),
(5, 'contact.zaenma@yahoo.com', '2019-12-21', 'oieor o ufig uiuff', '2019-12-29', '2019-12-03 17:17:26');

-- --------------------------------------------------------

--
-- Structure de la table `Situer`
--

CREATE TABLE `Situer` (
  `Identifiant_Hotel` int(11) NOT NULL,
  `Identifiant_Ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `Identifiant` int(11) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `Nom` varchar(255) DEFAULT 'NULL',
  `Prenom` varchar(255) DEFAULT 'NULL',
  `Adresse` varchar(255) NOT NULL,
  `Telephone` varchar(100) DEFAULT 'NULL',
  `Nationalite` varchar(255) DEFAULT 'NULL',
  `Cle_confirme` varchar(255) NOT NULL,
  `Profiles` varchar(255) NOT NULL DEFAULT 'U_simple',
  `Mot_de_passe` varchar(255) NOT NULL,
  `Etat` int(11) NOT NULL DEFAULT '0',
  `Photo` varchar(255) DEFAULT 'NULL',
  `Date_Inscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`Identifiant`, `Pseudo`, `Nom`, `Prenom`, `Adresse`, `Telephone`, `Nationalite`, `Cle_confirme`, `Profiles`, `Mot_de_passe`, `Etat`, `Photo`, `Date_Inscription`) VALUES
(1, 'Zaenma', 'NULL', 'NULL', 'contacte.zaenma@yahoo.com', 'NULL', 'NULL', '19559394082527758092255358902386961859493330167416248940', 'Utilisateur', 'Zaenma', 1, 'NULL', '2019-12-02 15:47:47'),
(2, 'Moussab', 'NULL', 'NULL', 'moussab9898@gmail.com', 'NULL', 'NULL', '05657286129157328851002713798182453972483686158483916586', 'Utilisateur', '8cb2237d0679ca88db6464eac60da96345513964', 1, 'NULL', '2019-12-02 08:51:35'),
(3, 'Ali', 'NULL', 'NULL', 'ali@gmail.com', 'NULL', 'NULL', '1234567', 'U_simple', '89587578281832266179345566562275455999253612649561455818', 0, 'NULL', '2019-12-02 16:03:43'),
(4, 'Zaenma Halidi Salim', 'NULL', 'NULL', 'contact.zaenma@yahoo.com', 'NULL', 'NULL', '281035981324146782756832034911601471411224577443718543', 'U_simple', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 0, 'NULL', '2019-12-02 16:33:37');

-- --------------------------------------------------------

--
-- Structure de la table `Ville`
--

CREATE TABLE `Ville` (
  `Identifiant` int(11) NOT NULL,
  `Nom_Ville` varchar(2) NOT NULL,
  `Identifiant_Pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Vole`
--

CREATE TABLE `Vole` (
  `Identifiant` int(11) NOT NULL,
  `Date_Depart` datetime NOT NULL,
  `Date_Arrivee` datetime NOT NULL,
  `Prix` int(11) NOT NULL,
  `Utilisateur_Reserver` int(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Commentaires`
--
ALTER TABLE `Commentaires`
  ADD PRIMARY KEY (`Identifiant`);

--
-- Index pour la table `Hotel`
--
ALTER TABLE `Hotel`
  ADD PRIMARY KEY (`Identifiant_Hotel`),
  ADD KEY `fk_hotel_Ville` (`Identifiant_Ville`);

--
-- Index pour la table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`Identifiant`);

--
-- Index pour la table `Passer_R_Vole`
--
ALTER TABLE `Passer_R_Vole`
  ADD PRIMARY KEY (`Identifiant`);

--
-- Index pour la table `Pays`
--
ALTER TABLE `Pays`
  ADD PRIMARY KEY (`Identifiant`);

--
-- Index pour la table `Publications`
--
ALTER TABLE `Publications`
  ADD PRIMARY KEY (`Identifiant`);

--
-- Index pour la table `Reponses`
--
ALTER TABLE `Reponses`
  ADD PRIMARY KEY (`Identifiant`);

--
-- Index pour la table `Reservations`
--
ALTER TABLE `Reservations`
  ADD PRIMARY KEY (`Identifiant`,`Date_Denvoie`);

--
-- Index pour la table `Situer`
--
ALTER TABLE `Situer`
  ADD PRIMARY KEY (`Identifiant_Hotel`,`Identifiant_Ville`);

--
-- Index pour la table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`Identifiant`);

--
-- Index pour la table `Ville`
--
ALTER TABLE `Ville`
  ADD PRIMARY KEY (`Identifiant`),
  ADD KEY `fk_Ville_Pays` (`Identifiant_Pays`);

--
-- Index pour la table `Vole`
--
ALTER TABLE `Vole`
  ADD PRIMARY KEY (`Identifiant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Commentaires`
--
ALTER TABLE `Commentaires`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Hotel`
--
ALTER TABLE `Hotel`
  MODIFY `Identifiant_Hotel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Passer_R_Vole`
--
ALTER TABLE `Passer_R_Vole`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Pays`
--
ALTER TABLE `Pays`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Publications`
--
ALTER TABLE `Publications`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Reponses`
--
ALTER TABLE `Reponses`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Reservations`
--
ALTER TABLE `Reservations`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Ville`
--
ALTER TABLE `Ville`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Vole`
--
ALTER TABLE `Vole`
  MODIFY `Identifiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Hotel`
--
ALTER TABLE `Hotel`
  ADD CONSTRAINT `fk_hotel_Ville` FOREIGN KEY (`Identifiant_Ville`) REFERENCES `Hotel` (`Identifiant_Hotel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
