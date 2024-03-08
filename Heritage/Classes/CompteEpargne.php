<?php

class CompteEpargne extends Compte
{
    private $taux_interets;
    // Construteur du compte epargne
    public function __construct(string $nom, float $montant, int $taux)
    {
        parent::__construct($nom, $montant);
        $this->taux_interets = $taux;
    }
    /**
     * Get the value of taux_interets
     */ 
    public function getTauxInterets(): int
    {
        return $this->taux_interets;
    }

    /**
     * Set the value of taux_interets
     *
     * @return  self
     */ 
    public function setTauxInterets($taux_interets): self
    {
        if ($taux_interets >= 0){
            $this->taux_interets = $taux_interets;
        }
        return $this;
    }

    public function verserInterets()
    {
        $this->solde = $this->solde + ($this->solde * $this->taux_interets / 100);
    }
}