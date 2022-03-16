<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch block</title>
</head>
<body>
    <form action="switch.php" method="post">
        <input type="text" name="title" placeholder="Title you wish to challenge" />
        <input type="submit" value="Challenge"/>
    </form>
    <?php
        switch ($_POST['title']) 
        {
            case 'universal':
                echo "In order to face Roman for universal title, u need to beat the fatel 4 way opponents rollions, drew, goldberg and owens";
                break;
            
            case 'world':
                echo "In order to face Brock for wwe world title, u need to beat the opponents Bobbya and AJ styles in Boneyard match";
                break;
            
            case 'ic':
                echo "In order to face zyan for Intercontinental title, u need to beat Richochet on Hollwean day";
                break;
            
            case 'tag':
                echo "In order to face RK-BRO for tag team title, u need to beat the Alpha academy in HELL IN A CELL";
                break;
            
            default:
                echo "Invalid title in the wwe";
                break;
        }
    ?>
</body>
</html>