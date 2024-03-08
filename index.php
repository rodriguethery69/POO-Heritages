<?php

require_once 'Heritage/Classes/Compte.php';
require_once 'Heritage/Classes/CompteCourant.php';
require_once 'Heritage/Classes/CompteEpargne.php';

//On instancie le compte
$compte1 = new CompteCourant('Rodrigue', 500, 200);
$compte1->setTitulaire('Stephanie');
var_dump($compte1);

$compteEpargne = new CompteEpargne('Rodrigue', 200, 10);

var_dump($compteEpargne);

$compteEpargne->verserInterets();

var_dump($compteEpargne);