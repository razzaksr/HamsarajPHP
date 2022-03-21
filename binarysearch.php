<?php

$say=[9.2,12.8,34.9,54.2,89.3,129.5,256.8,512.5,1024.7];

function binary($data,$start,$end):int
{
    if($end>=$start)
    {
        $mid=($end+$start)/2;
        if($GLOBALS['say'][$mid]==$data)
            return $mid;
        else if($GLOBALS['say'][$mid]>$data)
            return binary($data,$start,$mid-1);
        else
            return binary($data,$mid,$end);
    }
    else
    {
        return -1;
    }
}

$u=floatval($_GET['users']);
echo $u." found @ ".binary($u,0,count($say)-1);
//echo $u;




?>

<form action="binarysearch.php">
    <input type="text" name="users">
    <input type="submit" value="Search">
</form>