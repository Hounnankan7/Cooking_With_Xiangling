<?php

    //BDD
    $mysqli = new mysqli("localhost:3307", "root", "root", "genshinkitchen_db");
    if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);

    //--------- CHEMIN
    define("RACINE_SITE","/Cooking_With_Xiangliang/");

    //--------- VARIABLES
    $contenu = '';
 
    //--------- AUTRES INCLUSIONS
    require_once("fonction.inc.php"); // inclusion du fichier contenant nos fonctions de travail

?>