<?php

$arr=[89,4,1,5,78,31,990,42,5,234,54,345,6,54,35,24,65,245,63,56,245,6,7];

function quick($start,$end)
{
    $piData=$GLOBALS['arr'][$end];
    $initial=$start-1;

    for($current=$start;$current<$end;$current++)
    {
        if($GLOBALS['arr'][$current]>$piData)
        {
            $initial++;
            $third=$GLOBALS['arr'][$current];
            $GLOBALS['arr'][$current]=$GLOBALS['arr'][$initial];
            $GLOBALS['arr'][$initial]=$third;
        }
    }

    $third=$GLOBALS['arr'][$end];
    $GLOBALS['arr'][$end]=$GLOBALS['arr'][$initial+1];
    $GLOBALS['arr'][$initial+1]=$third;

    return $initial+1;// new pivotal point to separate next$GLOBALS['arr']
}

function divide($start,$end)
{
    if($end>$start)
    {
        $point=quick($start,$end);
        divide($start,$point-1);
        divide($point+1,$end);
    }
}

function bubble()
{
    for($times=0;$times<count($GLOBALS['arr'])-1;$times++)
    {
        for($current=0;$current<count($GLOBALS['arr'])-$times-1;$current++)
        {
            if($GLOBALS['arr'][$current]>$GLOBALS['arr'][$current+1])
            {
                $GLOBALS['arr'][$current]+=$GLOBALS['arr'][$current+1];
                $GLOBALS['arr'][$current+1]=$GLOBALS['arr'][$current]-$GLOBALS['arr'][$current+1];
                $GLOBALS['arr'][$current]-=$GLOBALS['arr'][$current+1];
            }
        }
    }
}

function selection()
{
    for($hold=0;$hold<count($GLOBALS['arr']);$hold++)
    {
        for($com=$hold+1;$com<count($GLOBALS['arr']);$com++)
        {
            if($GLOBALS['arr'][$hold]<$GLOBALS['arr'][$com])
            {
                $third=$GLOBALS['arr'][$hold];
                $GLOBALS['arr'][$hold]=$GLOBALS['arr'][$com];
                $GLOBALS['arr'][$com]=$third;
            }
        }
    }
}

function lists()
{
    foreach($GLOBALS['arr'] as $a)
    {
        echo $a." ";
    }
    echo "<br/>";
}

lists();
echo "After sort<br/>";
//bubble();
//selection();
divide(0,count($arr)-1);
lists();

?>