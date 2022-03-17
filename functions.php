<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        
        function hello()
        {
            echo "simple no arg no return<br/>";
        }

        function yet($fb,$bb)
        {
            echo "received ".$fb." and ".$bb." result ".($fb*$bb)."<br/>";
        }

        function wind()
        {
            return "<ul><li>PHP</li><li>MySQL</li><li>laravel</li></ul><br/>";
        }

        function pareturn($alpha,$cosmo,$delta)
        {
            return "<select><option>".$alpha."</option><option>".$cosmo."</option><option>".$delta."</option></select>";
        }

        hello();
        yet(34,12);
        echo wind();
        echo pareturn("Spring","Flask","Laravell");

        function place():int
        {
            return 23;
        }

        function calculate(float $liter,int $kms)
        {
            echo "<br/>Mileage is ".($kms/$liter)."<br/>";
        }

        echo place();
        calculate(34,450.5);
    ?>
</body>
</html>