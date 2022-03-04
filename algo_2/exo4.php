<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
   $capitales = [
       "France"=>"Paris",
       "Allemagne"=>"Berlin",
       "USA"=>"Washington",
       "Italie"=>"Rome"
    ];

   function afficherTableHTML($capitales){
        
        $result = "<table><thead><tr><th>PAYS</th><th>CAPITALE</th><th>Lien wiki</th></tr></thead><tbody>";
        ksort($capitales);
        foreach($capitales as $pays => $capitale){
            $wiki ="<a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank' >lien</a>";
            $pays = mb_strtoupper($pays);
            $result .= "<tr><td>$pays</td><td>$capitale</td><td>$wiki</td></tr>";
        }

        $result .= "</tbody></table>";
        return $result;
    }

    echo afficherTableHTML($capitales);
   ?> 
</body>
</html>