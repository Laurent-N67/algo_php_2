<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <tbody>
        <tr>
            <td><input type="checkbox"></td>
            <td>hoge</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td>foo</td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td>bar</td>
        </tr>
    </tbody> -->



    <?php

    $tableau = [
        "case1"=>"",
        "case2"=>"checked",
        "case3"=>"",
    ];
    function setArray($tableau){
        $result = "";
        foreach($tableau as $case=>$checked){
            $result .= "<label for='$case'>$case :</label>";
            $result .= "<input type='checkbox' id='$case' name='$case'$checked ><br>";
        }
        return $result;
       }
       echo setArray($tableau);

    ?>
</body>
</html>