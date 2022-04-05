<?php

$hai='["commercials","professions"]';

//echo var_dump($hai);

$hey=json_decode($hai);

echo $hey[1]."<br/>";

$check='{"frame1":"django","frame2":"flask"}';

$web=json_decode($check);

echo "<br/>".$web->frame2."<br/>";

$arr=json_decode($check,true);

echo "<br/>".$arr["frame1"]."<br/>";

echo "<br/>As Iterating</br>";
foreach($arr as $k=>$v)
{
    echo $k." - ".$v."<br/>";
}

?>