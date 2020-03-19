<?php
//chargement du fichier include.php
include('includes/include.php');
//réception de la variable 'page' passée en GET, cette variable contient le numéro de la page demandée
$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT); //on vérifie qu'il s'agit bien d'un entier (protection antihacker)

if (!($page > 0 && $page < 5)) {
    $page = 1;
}

switch($page) {
    case '1'://page d'accueil
    //action
    include ('scripts/accueil.php');
    break;
    case '2'://page selection
    //action
    include ('scripts/selection.php');
    break;
    case '3'://page du formulaire de dépôt de données
    //action
    include ('scripts/laisser-avis.php');
    break;
    case '4'://affichage des données déposées par les utilisateurs
    //action
    include ('scripts/lire-avis.php');
    break;
    default:
    include ('scripts/accueil.php');
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