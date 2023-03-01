<?php

class DeuxRoues extends Vehicule 
    { 
        
        private $cylindree;

        public function __construct ($couleur, $poids, $cylindree) {
            parent::__construct($couleur, $poids);
            $this->cylindree = $cylindree;
        }


        public function getCylindree() {
            return $this->cylindree;
        }

        public function setCylindree($cylindree) {
             $this->cylindree = $cylindree;
        }
         
     
        public function mettre_essence($nombre_litre) 
        {
            $this->setPoids($this->getPoids()+ $nombre_litre);
        }

        public function ajouter_personne($poids_personne) {
            // $this->poids = $this->poids + $poids_personne + 2;
            $this->setPoids($this->getPoids()+ $poids_personne + 2);
        }
        
    }
        ?>