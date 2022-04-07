<?php

try{
    $obj=new PDO("mysql:host=localhost;dbname=hamsaraj","root","");

    $obj->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="create table resource(res_id int(4) not null auto_increment primary key,name varchar(255) not null, skills blob not null, commercials double not null,location varchar(255) not null)";

    $obj->exec($sql);

    echo "Table created";

    $obj=null;
}
catch(PDOException $pd)
{
    echo $pd->getMessage();
}

?>