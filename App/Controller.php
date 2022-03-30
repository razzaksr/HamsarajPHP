<?php
include 'Remote.php';

class Manage implements ResourceActions
{
    private $arr=[];

    public function __construct()
    {
        array_push($this->arr,new Resource("Rasheedha R",["Javascript","Java"],"Salem",100000));
        array_push($this->arr,new Resource("Razak Mohamed S",["Javascript","Java","PHP"],"Salem",100870));
        array_push($this->arr,new Resource("Titus R",["Java"],"Banglore",100000));
        array_push($this->arr,new Resource("Annamalai S",["Javascript"],"Chennai",100000));
    }

    public function delete($ind)
    {
        global $in;
        $in=$ind;
        function erase($v)
        {
            global $in;
            return strcmp($v->getName(),$in)!=0;
        }
        $this->arr=array_filter($this->arr,"erase");
    }
    public function read($ind)
    {
        echo "<br/>".$this->arr[$ind]->display()."<br/>";
    }
    public function search($n = "", $s = "",$l="", $c = 0)
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
        elseif($n=="" and $s=="" and $l!="" and $c==0)
        {
            echo "<br/>Display All resources who lives in ".$l."<br/>";
            global $tk;
            $tk=$l;
            //echo $tk." Got in nested fun<br/>"; 
            function does($v)
            {
                global $tk;
                //echo $tk." Got in nested fun<br/>";
                return stristr($tk,$v->getLocation());
            }
            $t=array_filter($this->arr,"does");
            foreach ($t as $key => $value) {
                echo $value->display()."<br>";
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
        // echo "<br/>Display All resources<br/>";
        // function hey($v)
        // {
        //     echo "<br>".$v->display()."<br>";
        // }
        // array_map("hey",$this->arr);
        return $this->arr;
    }
}

// $res1=new Resource();
// $res1->setName("Razak Mohamed S");
// $res1->setSkills(["Java","Python"]);
// $res1->setLocation("Salem");
// $res1->setCommercials(120000);

// $res2=new Resource("Rasheedha R",["Javascript","Java"],"Salem",100000);

// $res3=new Resource("Annamalai S",["Java"],"Chennai",10000);

// $m=new Manage();

// echo $m->recruite($res1)."<br/>";
// echo $m->recruite($res2)."<br/>";
// echo $m->recruite($res3)."<br/>";

// // $m->list();

// // $m->search("r");
// // $m->search("","java");
// // $m->search("","","Salem");

// //$m->read(1);
// $m->delete("Annamalai S");
// $m->list();

?>