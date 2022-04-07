<?php

if($_POST)
{
    $one=$_POST['nu1'];
    $two=$_POST['nu2'];
    try 
    {
        echo $one*$two;
    } 
    catch (TypeError $eq) 
    {
        echo $eq->getMessage()."<br/>Values should be numeric";
    }
    finally{
        echo "<br/>Calculation done";
    }
}

?>

<form method="POST">
    <input type="num1" name="nu1">
    <input type="num2" name="nu2">
    <input type="submit" value="execute">
</form>