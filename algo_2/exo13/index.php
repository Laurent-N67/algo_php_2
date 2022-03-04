<?php


require 'exo13.php';

$v1 = new Voiture ("Peugeot","407",5);
$v2 = new Voiture ("Citroën","C4",3);
$v1 ->demarrer();

echo "INFO VEHICULE 1".$v1;
echo "INFO VEHICULE 2".$v2;

$v1->demarrer(); 
$v2->demarrer();