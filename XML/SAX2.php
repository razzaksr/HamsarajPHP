<?php

$hey=simplexml_load_file("second.xml");

foreach($hey->children() as $each)
{
    echo $each->name." ".$each->usage." ".$each->current." ".$each->type."<br/>";
}

?>