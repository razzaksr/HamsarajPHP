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
?>