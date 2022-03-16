<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loopings</title>
</head>
<body>
    <form action="looping.php" method="post">
        <input type="text" name="content"/>
        <input type="number" name="start"/>
        <input type="number" name="end"/>
        <input type="submit" value="repeat"/>
    </form>
    <?php
        // $step=$_POST['start'];

        // while($step<=$_POST['end'])
        // {
        //     echo $_POST['content']."<br/>";
        //     $step++;
        // }

        // $step=$_POST['start'];
        // do
        // {
        //     echo $_POST['content']."<br/>";
        //     $step++;
        // }while($step<=$_POST['start']);

        //for
        $posted=(int)$_POST['start'];
        $ended=(int)$_POST['end'];
        for($posted;$$ended<$posted;$posted++)
        {
            echo $_POST['content']."<br/>";
        }
    ?>
</body>
</html>