<?php

    require 'voiture.php';
    require 'velec.php';

    $v1 = new Voiture ("Peugeot","408");
    $vel = new Velec ("BMW","I3",100);

    echo $v1->__toString()."<br>";
    echo $vel->__toString()."<br>";
?>