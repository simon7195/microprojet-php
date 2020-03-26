<?php

$titre ="Lire les avis";

//ouverture de la base de donnée
$mabdd = new mysql();

//ecriture de la requete
$requete = 'SELECT * FROM avis';

//execution de la requete
$tableau = $mabdd -> cherche($requete);

$contenu = '<div class="mx-auto row p-5">';

foreach ($tableau as $element) {
$contenu .= ' 
<div class="card m-2" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">'.$element['nom']." ".$element['prenom'].'</h5>
<p class="card-text">'.$element['avis'].'</p>
</div>
</div>';
}

$contenu .='</div>';

