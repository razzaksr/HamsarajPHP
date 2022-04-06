<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing cook</title>
</head>
<body>
    <h1>Next page to test cookie</h1>
    <?php
        if(isset($_COOKIE['mypage']))
        {
            echo $_COOKIE['mypage'];
        }
    ?>
</body>
</html>