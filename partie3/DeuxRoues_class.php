<?php

class DeuxRoues extends Vehicule 
    { 
        private $cylindree;

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

        
    }
        ?>