<?php

$title="Mes photographies préférés";

$nom=array('Theo gosselin','Michel Hirsch','Rapahel Kriegel','Erwan Kéméré','Dominique Mayer');

$photo=array(
'https://www.iphon.fr/app/uploads/2019/09/test-photo-iphone-11-pro-austin-mann-0.jpg',
'https://images.pexels.com/photos/1363876/pexels-photo-1363876.jpeg?cs=srgb&dl=a-contre-jour-arriere-plans-de-bureau-aube-chiemsee-1363876.jpg&fm=jpg',
'https://www.naturimages.com/imgrsz/5c5bcccc000000000000000026428ca07ac91b253eb7a03239c669c1.jpg/bg-5c5bcccc0000000000000000.jpg',
'https://www.iphon.fr/app/uploads/2019/09/test-photo-iphone-11-pro-austin-mann-0.jpg',
'https://images.pexels.com/photos/1363876/pexels-photo-1363876.jpeg?cs=srgb&dl=a-contre-jour-arriere-plans-de-bureau-aube-chiemsee-1363876.jpg&fm=jpg',
'https://www.naturimages.com/imgrsz/5c5bcccc000000000000000026428ca07ac91b253eb7a03239c669c1.jpg/bg-5c5bcccc0000000000000000.jpg'
);

$bio=array(
	"Né au Havre en 1990, Théo Gosselin a grandi au bord de la mer et de la nature. Il a débuté en photographie en 2007. Eternel voyageur, il a photographié à travers l'Europe et les Etats-Unis ce qu'il aime : la vérité des grans espaces et les personnes rencontrées en cours du chemin.",
	"Le travail photographique de Michel Hirsch est avant tout le fruit de passions. Sa formation, à l’Ecole de l’Image des Gobelins à Paris sera la clé pour le développement d’un nouveau regard sur ce monde, point de départ d’une collection d'œuvres photographiques uniques et singulières.",
	"Raphaële Kriegel est photographe auteure affiliée à l'Agessa, élève de l'École de l'Image des Gobelins promo 1989, membre associée de l'ADAGP. Elle reproduit fidèlement les tableaux, sculptures, dessins, aquarelles, livres anciens, encadrés et sous verre, tous formats. ",
	"Erwan Quéméré, auteur photographe de 40 ans, réside dans le Golfe du Morbihan. Plutôt orienté vers la nature et aimant prendre le temps, il est particulièrement attiré par les poses longues pour les aspects contemplatif et manuel de la prise de vue sur le terrain. ",
	"Dominique Mayer fit ses premières armes photographiques en 1977. Passionné d’astronomie, il entreprit en 1981 de fixer un appareil photo sur un télescope pour pratiquer l’astrophotographie. Encouragé par ses résultats de laboratoires, il décida à partir de 1982 de pointer son appareil vers le reste du vaste monde."
);

$bioId = array(
	"biographie-1",
	"biographie-2",
	"biographie-3",
	"biographie-4",
	"biographie-5",
);

$titre ='Ma Sélection';

$contenu = '<div class="mx-auto row p-5">';

foreach ($nom as $key => $value) {

$contenu .= ' 
<div class="card w-100 m-2" style="width: 18rem;">
<img src="'.$photo[$key].'" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">'.$value.'</h5>
<p class="card-text">
<a class="badge badge-primary" data-toggle="collapse" href="#'.$bioId[$key].'" role="button" aria-expanded="false" aria-controls="'.$bioId[$key].'">
Lire la bio
</a></p>
<div class="collapse" id="'.$bioId[$key].'">'.$bio[$key].'</div>
</div>
</div>';
}

$contenu .='</div>';