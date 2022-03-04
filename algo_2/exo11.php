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
    
        $now = new DateTime();
        $fmt = new IntlDateFormatter( "fr_FR" ,IntlDateFormatter::FULL, IntlDateFormatter::NONE,
        'Europe/Paris',IntlDateFormatter::GREGORIAN  );

        echo $fmt->format($now);

    ?>
</body>
</html>