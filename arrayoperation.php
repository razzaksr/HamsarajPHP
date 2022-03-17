<?php
    // array operators: == === != 

    $hello=[34,78,12,29];
    $hell=[34,78,12,36];

    // if($hell===$hello)
    // {
    //     echo "matched";
    // }
    // else{
    //     echo "Not";
    // }

    foreach($hell as $h)
    {
        ($h>=20 and $h<35)?print("eligible for TNPSC group1<br/>"):
        (($h>=35 and $h<40)?print("Eleigible to for MLA election")
        :print("Not For MLA<br/>"));
    }

    $wind=[78,12,90,33,45];
    $sand=[$wind,$wind,$wind];

    print("<br/>");
    foreach($sand as $row)
    {
        foreach($row as $v)
        {
            echo $v."&nbsp;";
        }
        echo "<br/>";
    }

    $find=[$sand,$sand];
    print("<br/>");
    foreach($find as $f)
    {
        foreach($f as $row)
        {
            foreach($row as $v)
            {
                echo $v."&nbsp;";
            }
            echo "<br/>";
        }
        echo "<br/>";
    }

?>