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
        $nomsInput = [
            "nom"=>"text",
            "prénom"=>"text",
            "ville"=>"text",
            "email"=>"email",
        ];

        function setArray($nomsInput){
            $result = "";
                foreach($nomsInput as $element=>$input){
                    $result .= "<label for='$element'>$element :</label><br>";
                    $result .= "<input type='$input' id='$element' name='$element' required><br>";                   
                }
            return $result;
        }




        $formation = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet"); 

        function setTable($formation){
            $result = "";
            $result .= "<select name='métier' id='métier'>";
            $result .= "<label for='métier'></label>";
            $result.= "<option value='métier'>Choix du métier</option>";
                foreach($formation as $element){     
                    $result .= "   <option value='$element'>$element</option>";
                }
            $result.="<input type='submit'><br>";
            return $result;
        }




        $sexe = array("Homme","Femme","Autres");

        function setSexe($sexe){
            $result = "";
                foreach($sexe as $civilité){
                    $result .= "<label for='$civilité'>$civilité :</label>";
                    $result .= "<input type='radio' id='$civilité' name='nom'><br>";
                }
            return $result;
        }




        echo setArray($nomsInput);
        echo setSexe($sexe);
        echo setTable($formation);
    ?>
</body>
</html>