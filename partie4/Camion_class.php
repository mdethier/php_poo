<?php

class Camion extends QuatreRoues {

    private $longueur;

    public function __construct ($couleur, $poids) {
        parent::__construct($couleur, $poids);

    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function setLongueur($longueur_camion) {
         $this->longueur = $this->longueur + $longueur_camion;
    }




    public function ajouter_remorque($longueur_remorque){
        $this->longueur = $this->longueur + $longueur_remorque;
    }

    
}

?>