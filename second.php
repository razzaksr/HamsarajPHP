<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second | Variables</title>
</head>
<body>
    <?php 
        $name="Razak Mohamed S";
        $pincode=636001;
        $mileage=34.6;

        function hey()
        {
            global $name;
            global $pincode;
            global $mileage;
            
            echo "Bike owner $name from $pincode said given mileage is $mileage";
            
        }

        function hello()
        {   
            echo "Bike owner ".$GLOBALS['name']." from ".$GLOBALS['pincode']. "said given mileage is ".$GLOBALS['mileage'];
            static $fine="Zealous";
            echo $fine;
        }



        //hey();
        hello();
    ?>
</body>
</html>