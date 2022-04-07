<?php

try{
    $obj=new PDO("mysql:host=localhost","root","");

    $obj->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="create database hamsaraj";

    $obj->exec($sql);

    echo "Database created";

    $obj=null;
}
catch(PDOException $pd)
{
    echo $pd->getMessage();
}

?>