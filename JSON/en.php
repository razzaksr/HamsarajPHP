<?php

$alpha=array("ironman"=>"Downey","steve"=>"Evans","banner"=>"ruffullo","spider"=>array("2004"=>"Tobey","2012"=>"Andrew","2019"=>"Holland"),"Phase"=>3,"Guardian"=>3.1);

//echo var_dump($alpha)."<br/>";

$wow=json_encode($alpha);

//echo var_dump($wow)."<br/>";

$dec=json_decode($wow);

//echo $dec->ironman;

echo "<br/>".$dec->ironman."<br/>";
echo "<br/>".$dec->steve."<br/>";
echo "<br/>".$dec->banner."<br/>";

foreach($dec->spider as $k=>$v)
{
    echo "<br/>".$k.":".$v."<br/>";
}

echo "<br/>".$dec->Phase."<br/>";
echo "<br/>".$dec->Guardian."<br/>";

?>