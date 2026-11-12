<?php
class compteBancaire {
    public int $numero;
    public string $titulaire;
    public float $solde;

    //constructeur
    public function __construct($numero, $titulaire, $solde){
        $this -> numero = $numero;
        $this -> titulaire = $titulaire;
        $this -> solde = $solde;
    }

    //DEPOSER

    public function deposer($montant){
        $this -> solde = $this ->solde + $montant;
    }

    //RETIRER
    
    public function retirer($montant){
        if ($montant <= $this -> solde){
            $this ->solde = $this ->solde - $montant;
            return true ;
        }else{
            echo "retrait refuser" . $this ->numero . "Solde insuffisant\n";
            return false;
        }
    }

    //VIRER
    public function virer($montant, $dest){
        if ($this -> retirer($montant)){
            $dest->deposer($montant);
        }

    }

    //AFFICHER
    public function afficher(){
        echo $this -> numero . "|" . $this->titulaire . "|" . $this->solde . "Ar\n";
    }

}
    //PRINCIPAL
    $c1 = new compteBancaire("001","Rabeza",4200000);
    $c2 = new compteBancaire("002","Anja",4522200);
    $c3 = new compteBancaire("003","Rija",1200000);


    $c1->retirer(52000);
    $c2->retirer(1000);
    $c2->virer(3000,$c1);
    $c3->virer(60000,$c2);

    $comptes = [$c1, $c2, $c3];
    echo "\n";

    $total = 0;
    
    foreach ($comptes as $compte){
        $compte->afficher();
        $total= $total + $compte->solde;
    }

    echo "Nombre de comptes :" . count($comptes) . "\n";
    echo "Total des soldes :" . $total . "Ar\n";


