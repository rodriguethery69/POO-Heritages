<?php
//Le fichier "Compte.php" contiendra donc la déclaration de classe "Compte" comme ceci
abstract class Compte // Classe correspondant à un compte bancaire
{
    //nous allons pouvoir déclarer les propriétés de l'objet.
    private string $titulaire; //Titulaire du compte
    protected float $solde; //solde du compte

    //Constantes
    // const TAUX_INTERETS = 5;

    //Construteur de notre objet Compte
    //@param string $titulaire Titulaire du compte
    //@param float $solde Solde du compte

    public function __construct(string $titulaire, float $solde = 500)
    {
        // On affecte le titulaire à la propriété titulaire
        $this->titulaire = $titulaire;

        //On affecte le solde à la propriété solde
        $this->solde = $solde;
    }

    //Accesseurs
    public function getTitulaire(): string // Retourne le Titulaire du compte
    {
        return $this->titulaire;
    }

    public function setTitulaire(string $titulaire): self // Modifie le nom du titulaire et retourne l'objet
    {
        //on verifie si on a un titulaire
        if($titulaire != ""){
            $this->titulaire = $titulaire;
        }
        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    //Modifie le solde du compte
    public function setSolde(float $montant): self
    {
        if($montant >= 0){
            $this->solde = $montant;
        }
        return $this;
    }

    //Voir le solde du compte
    public function voirSolde() 
    {
        echo" le solde du compte est de $this->solde euros ";
    }

    //Déposer de l'argent sur le compte
    public function deposer(float $montant)
    {
        // On vérifie si le montant est positif
        if($montant > 0){
            $this->solde += $montant;
        }
    }

    //Retire un montant du solde du compte
    public function retirer(float $montant)
    {
        //On vérifie le montant et le solde
        if($montant > 0 && $this->solde >= $montant){
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
    }

}