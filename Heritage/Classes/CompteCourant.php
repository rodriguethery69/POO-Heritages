<?php

//Compte bancaire (heritage de compte)
class CompteCourant extends Compte
{
    private $decouvert;

    public function __construct(string $nom, float $montant, int $decouvert)

    {   // On tranfere les informations necessaires au constructeur de compte
        parent::__construct($nom, $montant); //Appel au constructeur du parent
        $this->decouvert = $decouvert;
    }

    public function getDecouvert():int
    {
        return $this->decouvert;
    }

    public function setDecouvert(int $montant): self
    {
        if($montant >= 0){
            $this-> decouvert = $montant;  
        }
        return $this;
    }

    public function retirer(float $montant)
    {
        //on verifie si le decouvert permet le retrait
        if($montant > 0 && $this->solde - $montant >= $this->decouvert){
            $this->solde -= $montant;
        }else{
            echo 'Solde insuffisant';
        }
    }
}