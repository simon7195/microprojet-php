<?php

$tab=array('1'=>'Accueil','2'=>'Ma sélection','3'=>'Donnez votre avis','4'=>'Lire les avis');

$urls=array('1'=>'la-photographie-les-photographes','2'=>'selection-photographies','3'=>'photographies-votre-avis','4'=>'tous-les-avis-photographie');

$menu ='<ul class="navbar-nav">';


foreach ($tab AS $key => $value) {
	//on teste si on est sur la page active
	if($key==$page){
		//si c'est le cas on valorise la variable classe 
		$classe="active";
    } else {
		//sinon on pense a reinitialiser la variable classe
		$classe='';
    }

	$menu.="<li class='nav-item' ><a class='nav-link' '" .$classe. "' href='".$key."-". $urls[$key] .".html'>" .$value. "</a></li>";

}

$menu.='</ul>';