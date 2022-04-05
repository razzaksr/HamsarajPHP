<?php

$hey=simplexml_load_file("third.xml");

foreach($hey->children() as $each)
{
    echo $each->name." ".$each->name['current']." ".$each->usage." ".$each->type."<br/>";
}

?>