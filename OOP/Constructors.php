<?php
    class Resource
    {
        private $name,$skills,$location,$commercials;

        // polytmorphism: overloading same block different parameters
        public function __construct($n="",$s=[],$l="",$c=0)
        {
            echo "<br/>Constructor called<br/>";
            $this->name=$n;$this->skills=$s;$this->location=$l;$this->commercials=$c;
        }

        public function __destruct()
        {
            echo $this->name." has destroyed/freed from memory<br/>";
        }

        public function display()
        {
            $data="";
            //$data.pack("S",$this->name);
            $data="<br/>".$this->getName()." ".$this->getLocation()." ".strval($this->getCommercials())."<br/>";

            foreach ($this->skills as $v) {
                $data.=$v." ";
            }

            $data.="<br/>";

            return $data;
            
        }
        
        public function setName($nm){$this->name=$nm;}
        public function getName(){return $this->name;}
        public function setSkills($sk){$this->skills=$sk;}
        public function getSkills(){return $this->skills;}
        public function setLocation($lc){$this->location=$lc;}
        public function getLocation(){return $this->location;}
        public function setCommercials($cm){$this->commercials=$cm;}
        public function getCommercials(){return $this->commercials;}
    }

    $res1=new Resource();
    $res1->setName("Razak Mohamed S");
    $res1->setSkills(["Java","Python"]);
    $res1->setLocation("Salem");
    $res1->setCommercials(120000);

    echo $res1->display();
    //echo "<br/>".$res1->getName()." ".$res1->getSkills()." ".$res1->getLocation()." ".$res1->getCommercials()."<br/>";

    $res2=new Resource("Rasheedha R",["Javascript","Java"],"Salem",100000);
    echo "<br/>".$res2->getName()." ".$res2->getSkills()." ".$res2->getLocation()." ".$res2->getCommercials()."<br/>";

?>