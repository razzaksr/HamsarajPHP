<?php

$hi=array(12,100,45,89,100,45,10,30,41,7,4,1,10);

if($_POST)
{
    $one=$_POST['nu1'];
    try 
    {
        if($one>count($hi)-1||$one<0)
        {
            throw new OverflowException();
        }
        else
        {
            echo $hi[$one];
        }
    } 
    catch (OverflowException $eq) 
    {
        echo $eq->getMessage()."<br/>Index with ".count($hi)." also greater than -1";
    }
    finally{
        echo "<br/>Extraction done";
    }
}

?>

<form method="POST">
    <input type="num1" name="nu1">
    <input type="submit" value="extarct">
</form>