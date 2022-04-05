<?php

$alpha=array("ironman"=>"Downey","steve"=>"Evans","banner"=>"ruffullo","spider"=>array("2004"=>"Tobey","2012"=>"Andrew","2019"=>"Holland"),"Phase"=>3,"Guardian"=>3.1);

$obj=new SimpleXMLElement("<root/>");

array_walk_recursive($alpha,array($obj,"addChild"));

$obj->asXML('fourth.xml');

?>