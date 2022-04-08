<?php
include 'Controller.php';
include 'UI.php';
$who = $_GET['data'];

try{
    $obj=new PDO("mysql:host=localhost;dbname=hamsaraj","root","");

    $obj->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="delete from resource where res_id=:r";

    $statement=$obj->prepare($sql);

    $statement->bindParam(":r",$who);

    $statement->execute();

    header("Location:./List.php");

    $obj=null;
}
catch(PDOException $pd)
{
    echo $pd->getMessage();
}

echo "<h1>". $who ." has fired</h1>";

?>