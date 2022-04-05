<?php

$var=simplexml_load_file("first.xml");

//echo $var->name;

foreach($var->children() as $v)
{
    echo $v."<br/>";
}

?>