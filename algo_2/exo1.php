<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>Exercice 1</h1>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte)</header>
    <?php
    $texte = "mon texte en paramètre";

    function convertirMajRouge($texte){
        $texte = mb_strtoupper($texte);
        return "<p class='rouge'>$texte</p>";
    }
    echo convertirMajRouge($texte);
    echo convertirCouleur($texte, "vert");

    function convertirCouleur($texte, $couleur){
        $texte = mb_strtoupper($texte);
        return "<p class='$couleur'>$texte</p>";
    }

    ?>
</body>
</html>