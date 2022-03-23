<?php
    class Resource
    {
        private $name,$skills,$location,$commercials;
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

    echo "<br/>".$res1->getName()." ".$res1->getSkills()." ".$res1->getLocation()." ".$res1->getCommercials()."<br/>";
?>