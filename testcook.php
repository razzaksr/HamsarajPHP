<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing cook</title>
</head>
<body>
    <?php
        echo $_COOKIE['mypage'];
        if(isset($_COOKIE['mypage']))
        {
            setcookie("mypage","",time()-(86400*30),"/");
        }
    ?>
    <a href="./next.php">next</a>
</body>
</html>