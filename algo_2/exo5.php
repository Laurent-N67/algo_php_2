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

    <!-- <label for=Nom>Pays:</label>

        <input type="text" id=Nom name=Nom required>
       
    <label for=Prenom>Prenom:</label>

        <input type="text" id=Prenom name=Prenom required>
           
    <label for=Ville>Ville:</label>

        <input type="text" id=Ville name=Ville required> -->
        




    <?php
       $nomsInput = array("nom","prenom","ville");
        
       function setArray($nomsInput){
        $result = "";
        foreach($nomsInput as $element){
            $result .= "<label for='$element'>$element :</label>";
            $result .= "<input type='text' id='$element' name='$element' required><br>";
        }
        return $result;
    }
    echo setArray($nomsInput);
    ?>
</body>
</html>