<!-- 
data types:
    String 
    Integer
    Float
    Boolean
    Array
    Object
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statements</title>
</head>
<body>
    <?php
        $income = (float)$_POST['annual'];
        if($income >= 2.5 and $income<=5.0)
        {
            echo "Person has to pay 5% tax";
        }
        else if($income >= 5.1 and $income<=10.0)
        {
            echo "Person has to pay 10% tax";
        }
        else if($income >= 10.1 and $income<=20.0)
        {
            echo "Person has to pay 15% tax";
        }
        else if($income >= 20.1 and $income<=30.0)
        {
            echo "Person has to pay 20% tax";
        }
        else if($income >= 30.1)
        {
            echo "Person has to pay 30% tax";
        }
        else{
            echo "Person no need to pay tax";
        }
    ?>
    <form action="control.php" method="post">
        <input type="text" name="annual" placeholder="Annual income"/>
        <input type="submit" value="send"/>
        <output name="status"></output>
    </form>
</body>
</html>