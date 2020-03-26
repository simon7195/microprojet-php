<?php

$h1 = 'A propos de la photographie';

$texte = array("Aux origines, la photographie fut utilisée par les peintres comme aide pour leurs travaux. Puis, elle devint rapidement un moyen d'expression à part entière, de nombreux artistes la pratiquant parallèlement à d'autres modes d'expression ou s'y consacrant exclusivement.",

"Les peintres appliquaient leur art à diverses formes d'expression, et se spécialisaient dans les scènes de genre, la décoration, la peinture d'histoire ou le portrait ; assez vite les photographes explorèrent diverses voies pour mettre à profit les nouvelles techniques qui s'offraient à eux. Et ces applications se multiplièrent avec les progrès et la facilité d'utilisation qui s'ensuivirent.",

"La photographie se tourne vers la capture du réel alors que la peinture recherche la beauté, l’impression, la matière et le sentiment."
);

$titre ='Accueil';

$contenu ='
<img class="home-img img-fluid" src="https://www.iphon.fr/app/uploads/2019/09/test-photo-iphone-11-pro-austin-mann-0.jpg">
<div id="home-text" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">'.$h1.'</h1>';

foreach ($texte as $key => $value) {
  $contenu .= '<p class="lead">'.$value.'</p>';
}

$contenu .= '
</div>
</div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.iphon.fr/app/uploads/2019/09/test-photo-iphone-11-pro-austin-mann-0.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/1363876/pexels-photo-1363876.jpeg?cs=srgb&dl=a-contre-jour-arriere-plans-de-bureau-aube-chiemsee-1363876.jpg&fm=jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.naturimages.com/imgrsz/5c5bcccc000000000000000026428ca07ac91b253eb7a03239c669c1.jpg/bg-5c5bcccc0000000000000000.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
';