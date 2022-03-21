<?php 

$hai=["Razak",90.4,78,"Zealous",12900,"Mohamed"];

// linear search



function linear($data):int
{
    for($pos=0;$pos<count($GLOBALS['hai']);$pos++)
    {
        if($GLOBALS['hai'][$pos]==$data)
        {
            return $pos;
            //echo $GLOBALS['hai'][$pos];
        }
    }
    return -1;
}

$data=$_POST['data'];
//echo count($hai);
echo $data." found @ ".linear($data);

?>


<form action="arraysearch.php" method="post">
    <input type="text" name="data">
    <input type="submit" value="search">
</form>