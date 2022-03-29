<?php
include 'Remote.php';

class Manage implements ResourceActions
{
    private $arr=[];
    public function search($n = "", $s = "", $l = "", $c = 0)
    {
        if($n!="" and $s=="" and $l=="" and $c==0)
        {
            echo "<br/>Display All resources whose name contains ".$n."<br/>";
            foreach ($this->arr as $res) 
            {
                if(stristr($res->getName(),$n))
                {
                    echo "<br/>".$res->display()."<br/>";
                }
            }
        }
        elseif($n=="" and $s!="" and $l=="" and $c==0)
        {
            echo "<br/>Display All resources who has skills ".$s."<br/>";
            foreach ($this->arr as $res) 
            {
                foreach($res->getSkills() as $skills)
                {
                    if(stristr($skills,$s))
                    {
                        echo "<br/>".$res->display()."<br/>";
                    }
                }
            }
        }
    }
    public function recruite(Resource $obj): string
    {
        array_push($this->arr,$obj);
        return $obj->getName()." has recruited";
    }
    public function list()
    {
        echo "<br/>Display All resources<br/>";
        function hey($v)
        {
            echo "<br>".$v->display()."<br>";
        }
        array_map("hey",$this->arr);
    }
}

$res1=new Resource();
$res1->setName("Razak Mohamed S");
$res1->setSkills(["Java","Python"]);
$res1->setLocation("Salem");
$res1->setCommercials(120000);

$res2=new Resource("Rasheedha R",["Javascript","Java"],"Salem",100000);

$res3=new Resource("Annamalai S",["Java"],"Salem",10000);

$m=new Manage();

echo $m->recruite($res1)."<br/>";
echo $m->recruite($res2)."<br/>";
echo $m->recruite($res3)."<br/>";

$m->list();

$m->search("r");
$m->search("","java");

?>