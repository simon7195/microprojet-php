<?php

$tab=array('1'=>'Accueil','2'=>'Ma sélection','3'=>'Donnez votre avis','4'=>'Lire les avis');

$urls=array('1'=>'la-photographie-les-photographes','2'=>'selection-photographies','3'=>'photographies-votre-avis','4'=>'tous-les-avis-photographie');

$menu ='<a class="navbar-brand" href="1-la-photographie-les-photographes.html">
<img src="https://img.icons8.com/color/96/000000/old-time-camera.png" width="30" height="30" class="d-inline-block align-top" alt="">
Passion Photo
</a>
<button class="navbar-toggler animated-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
<div class="animated-icon"><span></span><span></span><span></span></div>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent1">
<ul class="navbar-nav">';


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

$menu.='</ul></div>';