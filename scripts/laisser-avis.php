<?php

$titre ='Donnez votre avis';

//je teste la variable cachée reception $_POST['reception']
$reception= filter_input(INPUT_POST, 'reception', FILTER_VALIDATE_INT);

if($reception == 0){
//création du code html pour le formulaire, à mettre dans la variable $content
$contenu ='
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
 echo '<pre>';
 print_r($_POST);echo'</pre>';
}