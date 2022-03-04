<?php

$email = array("jean@email.fr","michmich","michel@email.com","jean@email.fr");

function verifEmail($email){
        
    foreach ($email as  $mail) {
        
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse email '$mail' est considérée comme valide.<br>";
        } else {
            echo "L'adresse email '$mail' est considérée comme invalide.<br>";
        }
    }
}

echo verifEmail($email);
?>