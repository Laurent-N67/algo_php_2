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
<!-- <table>
    <thead>
    <tr>
        <th>PAYS</th>
        <th>CAPITALES</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>France</td>
        <td>Paris</td>
    </tr>
    <tr>
        <td>Allemagne</td>
        <td>Berlin</td>
    </tr>
    <tr>
        <td>Italie</td>
        <td>Rome</td>
    </tr>
    <tr>
        <td>USA</td>
        <td>Washington</td>
    </tr>
    </tbody>
</table> -->

   <?php
   $capitales = [
       "France"=>"Paris",
       "Allemagne"=>"Berlin",
       "USA"=>"Washington",
       "Italie"=>"Rome"
    ];

   function afficherTableHTML($capitales){
        
        $result = "<table><thead><tr><th>PAYS</th><th>CAPITALE</th></tr></thead><tbody>";
        ksort($capitales);
        foreach($capitales as $pays => $capitale){
            $pays = mb_strtoupper($pays);
            $result .= "<tr><td>$pays</td><td>$capitale</td></tr>";
        }

        $result .= "</tbody></table>";
        return $result;
    }

    echo afficherTableHTML($capitales);

   ?> 
</body>
</html>