<?php

$hai=[89,10,20,45,2,4,10];
$hi=50;
function hey()
{
    
    global $hi;
    echo $hi."@ hey outer function";
    global $hai;
    function does($v)
    {
        global $hi;
        echo $hi." @ hey nested function";
        return $v<=$hi;
    }
    $newone=array_filter($hai,"does");
    return $newone;
}

function yet($v){echo $v;}
$t=hey(50);
array_map("yet",$t);

?>