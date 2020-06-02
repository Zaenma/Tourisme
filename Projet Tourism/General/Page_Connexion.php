<?php
session_start();
// $dbhost = 'localhost';
// $dbname = 'id11828652_visiteafrica';
// $dbuser = 'id11828652_admin';
// $dbpswd = 'Visite-Africa';


$dbhost = 'localhost';
$dbname = 'Tourisme';
$dbuser = 'Zaenma';
$dbpswd = 'Zaenma-Admin';

try {
   $bdd = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOexception $e) {
   die("Une erreur est survenue lors de la connexion à la base de données");
}
