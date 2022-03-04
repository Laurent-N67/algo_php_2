<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeurs2"));

    function varDump($tableauValeurs){
        $result="";
        foreach($tableauValeurs as $valeurs){
            $result.= var_dump($valeurs);
        }
        return $result;
    }
    echo varDump($tableauValeurs);
    
    ?>
</body>
</html>