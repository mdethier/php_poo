<?php

include 'vehicule_class.php';
include 'quatreRoues_class.php';
include 'deuxRoues_class.php';
include 'voiture_class.php';
include 'camion_class.php';

$deuxRoues = new DeuxRoues("rouge",150,1000);

$deuxRoues->ajouter_personne(70);
$deuxRoues->setCouleur("vert");
Vehicule::afficher_attribut($deuxRoues);

$camion = new Camion("blanc", 6000);
$camion->ajouter_personne(84);
$camion->setCouleur("bleu");
$camion->setNombre_portes(2);


Vehicule::afficher_attribut($camion);

?>