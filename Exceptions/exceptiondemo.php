<?php

if($_POST)
{
    $one=$_POST['nu1'];
    $two=$_POST['nu2'];
    try 
    {
        echo $one/$two;
    } 
    catch (DivisionByZeroError $eq) 
    {
        echo $eq->getMessage()."<br/>Number two shouldn't zero";
    }
    finally{
        echo "<br/>Calculation done";
    }
}

?>

<form method="POST">
    <input type="num1" name="nu1">
    <input type="num2" name="nu2">
    <input type="submit" value="divide">
</form>