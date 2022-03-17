<?php
    $hello=[34,78,12,90];
    $wet=array("Downey","Pratt","Ledger","Depp");

    function lists($which)
    {
        foreach($which as $v)
        {
            echo "$v<br/>";
        }
    }

    // iterate
    for($pos=0;$pos<count($hello);$pos+=2)
    {
        echo $hello[$pos]."<br/>";
    }
    echo "for each<br/>";
    
    lists($wet);

    array_push($wet,"Evans");

    echo "<br/>for each<br/>";
    lists($wet);

    array_pop($hello);

    lists($hello);

    

?>