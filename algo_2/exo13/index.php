    <?php


require 'exo13.php';

$v1 = new Voiture ("Peugeot","407",5);
$v2 = new Voiture ("Citroën","C4",3);

$v1->demarrer();
$v1-> accel(160);
$v1->deccel(170);
echo "<br>";
$v2->demarrer();
$v2->accel(20);
$v2->deccel(15);
echo "<br>";
echo "INFO VEHICULE 1".$v1;
echo "INFO VEHICULE 2".$v2;

