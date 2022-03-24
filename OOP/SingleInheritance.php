<?php
class Modifiers
{
    protected $user;
    protected function hai()
    {
        echo "Modifiers protected function";
    }
}

class DemoMods extends Modifiers
{
    public function setUser($u){$this->user=$u;}
    public function callPro()
    {
        $this->hai();
    }
}

// $g1=new DemoMods();
// $g1->setUser("hamsaraj@gmail.com");
// $g1->callPro();


class Google
{
    protected $user,$fullname,$age,$phone;
    public function show()
    {
        echo "User details ".$this->user." ".$this->fullname." ".strval($this->age)." ".strval($this->phone)." <br/>";
    }
}

class Store extends Google
{
    public function __construct($u="",$f="",$a=0,$p=0)
    {
        $this->user=$u;$this->fullname=$f;$this->age=$a;$this->phone=$p;
    }
}

$s=new Store("razzaksr@gmail.com","Razak Mohamed S",31,8765456789);
$s->show();


class Drive extends Google
{
    
    public $mydrive = array();
    public function __construct($u="",$f="",$a=0,$p=0)
    {
        $this->user=$u;$this->fullname=$f;$this->age=$a;$this->phone=$p;
    }
    public function show()
    {
        $data="";
        $data=$this->user." ".$this->fullname;
        foreach ($this->mydrive as $v) {
            $data.=$v." ";
        }
        $data.="<br/>";
        echo $data;
    }
}

$d=new Drive("razaksrmd@gmail.com","Razak Mohamed S",32,876545678);
array_push($d->mydrive,"EndGame");
array_push($d->mydrive,"Ragnorok");
array_push($d->mydrive,"Ultron");
array_push($d->mydrive,"Infinity War");
array_push($d->mydrive,"Civilwar");

$d->show();


abstract class Yields
{
    public $files;
    public abstract function hey();
    public function migrate()
    {
        echo "Non abstract function in abstract class<br/>";
    }
}

class DemoAbs extends Yields
{
    public function hey()
    {
        echo "overriden from abstract class<br/>";
    }
}

$a=new DemoAbs();
$a->migrate();
$a->hey();

?>