<?php

$titre ='Donnez votre avis';

//je teste la variable cachée reception $_POST['reception']
$reception= filter_input(INPUT_POST, 'reception', FILTER_VALIDATE_INT);
$nom= filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$prenom= filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$message= filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$contenu = '';

//Message alerte champs requis
if(($reception == 1) && ($nom == '' || $prenom == ''|| $message == '')) {
    $contenu ='
    <div class="alert alert-warning" role="alert">
    Veuillez renseigner les champs du formulaire avant d\'envoyer !
    </div>
    ';
}

if($reception != 1 || $nom == '' || $prenom == ''|| $message == ''){

//création du code html pour le formulaire, à mettre dans la variable $content
$contenu .='
<form method="POST" action="index.php?page=3" class="m-5 mx-auto w-50">
<input type="hidden" name="reception" value="1" />
<div class="form-group">
<label>Votre prénom</label>
<input class="form-control" name="prenom" type="texte" />
</div>
<div class="form-group">
<label>Votre nom</label>
<input class="form-control" type="texte" name="nom" />
</div>
<div class="form-group">
<label>Votre message</label>
<textarea class="form-control" name="message"></textarea>
</div>
<input type="submit" name="envoi" class="btn btn-primary" value="Envoyer" />
</form>';
} else {
//affichage du tableau $_POST
 //echo '<pre>';
 //print_r($_POST);
 //echo'</pre>';
 $contenu ="<div class='p-5 send-message'><p class='text-center text-white p-5 bg-success'>Merci ! Votre avis est enregistré ! Vous pouvez le retrouver <a href='4-tous-les-avis-photographie.html' class='badge badge-light'>ici</a> !</p></div>";

//Ouvrir une connexion
 $mabdd = new mysql();

//Ecrire une requête de type INSERT
$requete = "INSERT INTO avis(nom, prenom, avis) VALUES('".$nom."','".$prenom."','".$message."')";

//Executer la requète grace à la méthode insertion
$mabdd ->insertion($requete);

//Redirection page 4
//header('location:index.php?page=4');

}