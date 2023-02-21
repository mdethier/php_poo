<?php

include 'vehicule_class.php';
include 'quatreRoues_class.php';
include 'deuxRoues_class.php';
include 'voiture_class.php';
include 'camion_class.php';

$vehiculeNoir = new Vehicule("noir", 1500);


$vehiculeNoir->rouler();

$vehiculeNoir->ajouter_personne(70);

var_dump($vehiculeNoir);



    

?>