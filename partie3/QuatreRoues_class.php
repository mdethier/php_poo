<?php

class QuatreRoues extends Vehicule 
{ 
    private $nombre_portes;

    public function getNombre_portes() {
        return $this->nombre_portes;
    }

    public function setNombre_portes($nombre_portes) {
         $this->nombre_portes = $nombre_portes;
    }
     
    public function repeindre($couleur) {
        $this->setCouleur($couleur);
    }

    
}
?>

