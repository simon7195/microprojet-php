<?php
//chargement du fichier include.php
include('includes/include.php');
//réception de la variable 'page' passée en GET, cette variable contient le numéro de la page demandée
$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT); //on vérifie qu'il s'agit bien d'un entier (protection antihacker)

switch($page) {
    case(0)://page d'accueil
    //action
    break;
    case(1)://page 1
    //action
    break;
    case(2)://page du formulaire de dépôt de données
    //action
    break;
    case(3)://affichage des données déposées par les utilisateurs
    //action
    break;
    default://le numéro de page est supérieur à 3, ce n'est pas normal.
    echo ('Alerte : mauvais numéro de page'); die;
   }

   include ('scripts/menu.php');

   //génération de l'affichage final
   //ouverture de la classe template
   $template=new template();
   //remplissage du template
   $template->remplace('titre',$titre);
   $template->remplace('menu',$menu);
   $template->remplace('content',$contenu);
   //affichage du template
   $template->affiche();