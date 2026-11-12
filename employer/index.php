<?php
class Employe {
    public int $matricule;
    public string $nom;
    public float $salaire;
    public function __construct ($matricule, $nom, $salaire){
        $this->matricule=$matricule;
        $this->nom=$nom;
        $this->salaire=$salaire;
    }

    public function calculerSalaire(){
        return $this->salaire;
    }
    public function getType(){
        return "Employe";
    }

    
}