<?php

class DeuxRoues extends Vehicule 
    { 
        private $cylindree;

        public function __construct($cylindree) {

        }
         
     
        public function mettre_essence($nombre_litre) 
        {
    
        }

        public function getCylindree() {
            return $this->cylindree;
        }

        public function setCylindree($cylindree) {
            return $this->cylindree = $cylindree;
        }
    }
        ?>