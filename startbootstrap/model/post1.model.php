<?php

if ( (!isset($_GET['article']))  || ($_GET['article'] == 1) ) {

$bg = 'assets/img/post-bg.jpg';
$title = "Les origines";
$subtitle = "D'ou ça vient?";
$content = "Pourquoi Dit-on sneakers ?
Résultat de recherche d'images pour
Le nom « sneakers » a pour origine le verbe anglais « to sneak » signifiant « se déplacer furtivement » et donc silencieusement. Il fait référence au silence des semelles en caoutchouc au sol, contrairement aux chaussures habillées à semelle en cuir dur standard, bruyantes.";
}

else if ($_GET['article'] == 2) {

$bg = 'https://cdn.futura-sciences.com/buildsv6/images/wide1920/6/9/7/697bcaaf34_50179672_ocean-min.jpg';
$title = '';
$subtitle = '';
$content = '';
}