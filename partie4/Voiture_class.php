<?php

class Voiture extends QuatreRoues {

    private $nombre_pneu_neige;

    public function getNombre_pneu_neige() {
        return $this->nombre_pneu_neige;
    }
    public function setNombre_pneu_neige($nombre_pneu_neige) {
         $this->nombre_pneu_neige = $nombre_pneu_neige;
    }

    public function ajouter_pneu_neige($nombre) {
        $this->nombre_pneu_neige = $this->nombre_pneu_neige + $nombre;
    }

    public function enlever_pneu_neige($nombre) {
        $this->nombre_pneu_neige = $this->nombre_pneu_neige - $nombre;
    }

    
    
}
