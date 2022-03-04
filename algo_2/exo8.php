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

    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    $times = 6;
    echo repeterImage($url, $times);

    function repeterImage(string $url, int $times) :string{
        $result ="";
        foreach(range(1, $times) as $image){
            $result .= "<img src='$url'>";
        }

        // for ($i = 1; $i <= $times ; $i++) { 
        //     $result .="<img src='$url'>";
        // }

        return $result;
    }


    ?>
</body>
</html>