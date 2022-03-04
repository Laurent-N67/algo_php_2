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

$nomsInput = array("choix 1","choix 2","choix 3");
        
function setArray($nomsInput){
 $result = "";
 foreach($nomsInput as $element){
     $result .= "<label for='$element'>$element :</label>";
     $result .= "<input type='radio' id='$element' name='nom'><br>";
 }
 return $result;
}
echo setArray($nomsInput);
    ?>
</body>
</html>