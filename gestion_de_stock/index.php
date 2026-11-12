<?php
class Produit{
    //Proprietes
    public string $nom ;
    public float $prix;
    public int $quantite;
    //Methode
    public function __construct($nom, $prix, $quantite){
        $this->nom = $nom;
        $this->prix = $prix;
        $this ->quantite = $quantite;
    }
    public function __valeurStock (){
        $valeur = $this ->prix * $this ->quantite;
        return $valeur;
    }

    public function __vendre($qte){
        if ($qte <= $this->quantite) {
               $this->quantite =   $this->quantite - $qte;
        }
        else {
            echo "impossible : stock insuffisant" .$this->nom. "\n";
        }
    }
    public function __afficher (){
        $valeur= $this->valeurStock ();
        echo  $this->nom ."|". $this->prix . "Ar|".  $this->quantite."|".$valeur ."Ar\n";
    }
}

//principal

    $p1 = new Produit ();
    $p1 -> nom = "biscuit";
    $p1 -> prix = 3500;
    $p1 -> quantite = 30;

    $p2 = new Produit ();
    $p2 -> nom = "huile";
    $p2 -> prix = 10000;
    $p2 -> quantite = 20;

    $p3 = new Produit ();
    $p3 -> nom = "mouchoir";
    $p3 -> prix = 4200;
    $p3 -> quantite = 40;



//vente

$p1 ->vendre(10);
$p2 ->vendre(5);
//affichage
echo"\n";
echo "Nom | Prix | Quantité | Valeur |Stock \n";

$p1 -> afficher();
$p2 -> afficher();
$p3 -> afficher();

//TOTAL

$total = $p1 ->valeurStock() + $p2 ->valeurStock() + $p3 ->valeurStock();
echo "Valeur totale du stock : " . $total . "Ar\n";