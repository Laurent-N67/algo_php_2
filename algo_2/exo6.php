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
           $sexe = array("monsieur","madame","iel");
            
           function setArray($sexe){
            $result = "";
            $result .= "<select name='civilité' id='civilité'>";
            $result .= "<label for='civilité'></label>";
            $result.= "<option value='civilité'>Choisir une civilité</option>";
            foreach($sexe as $element){
                  
                $result .= "   <option value='$element'>$element</option>";
            }
            return $result;
        }
        echo setArray($sexe);
    ?>
</body>
</html>