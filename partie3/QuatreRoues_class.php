<?php

class QuatreRoues extends Vehicule 
{ 
    private $nombre_portes;

    public function __construct($nombre_portes) {

    }
     
    public function repeindre($couleur) {

    }

    public function getNombre_portes() {
        return $this->nombre_portes;
    }

    public function setNombre_portes($nombre_portes) {
        return $this->nombre_portes = $nombre_portes;
    }
}
?>

