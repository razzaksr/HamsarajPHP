<?php
    setcookie("mypage","www.zealousacademy.com",time()+(86400*2),"/")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test cookie</title>
</head>
<body>
    <?php
        echo count($_COOKIE);
        echo $_COOKIE["mypage"];
    ?>
</body>
</html>
