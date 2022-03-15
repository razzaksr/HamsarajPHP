<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators</title>
</head>
<body>
    <?php
        // + - * / %
        $comercials=45000;
        $tds=7.9;
        $takehome=$comercials-($comercials*$tds)/100;
        echo "Your take home is ".$takehome;
    ?>
</body>
</html>