<?php
include 'Remote.php';

class Manage implements ResourceActions
{
    private $arr=[];

    private $filename="records.doc";

    public function dump()
    {
        $op=fopen($this->filename,"w");
        fwrite($op,serialize($this->arr));
        fclose($op);
    }

    public function load()
    {
        $op=fopen($this->filename,"r");
        $tmp=fread($op,filesize($this->filename));
        $this->arr=unserialize($tmp);
    }

    public function __construct()
    {
        // array_push($this->arr,new Resource("Rasheedha R",["Javascript","Java"],"Salem",100000));
        // array_push($this->arr,new Resource("Razak Mohamed S",["Javascript","Java","PHP"],"Salem",100870));
        // array_push($this->arr,new Resource("Titus R",["Java"],"Banglore",100000));
        // array_push($this->arr,new Resource("Annamalai S",["Javascript"],"Chennai",100000));
        // $this->dump();
    }

    public function delete($ind)
    {
        $this->load();
        global $in;
        $in=$ind;
        function erase($v)
        {
            global $in;
            return strcmp($v->getName(),$in)!=0;
        }
        $this->arr=array_filter($this->arr,"erase");
        //foreach($this->arr as $v){echo $v->display();}
        $this->dump();
    }
    public function read($ind)
    {
        $this->load();
        $count=0;
        //echo "<br/>".$this->arr[$ind]->display()."<br/>";
        foreach($this->arr as $v)
        {
            if(strcmp($v->getName(),$ind)==0)
            {
                return [$v,$count];
            }
            $count++;
        }
    }
    public function update($obj,$index)
    {
        $this->load();
        global $in;
        $in=$obj->getName();
        function erass($v)
        {
            global $in;
            return strcmp($v->getName(),$in)!=0;
        }
        $this->arr=array_filter($this->arr,"erass");

        array_push($this->arr,$obj);

        $this->dump();
    }
    public function search($n = "", $s = "",$l="", $c = 0)
    {
        $this->load();
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
        $this->load();
        array_push($this->arr,$obj);
        $this->dump();
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
        $this->load();
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