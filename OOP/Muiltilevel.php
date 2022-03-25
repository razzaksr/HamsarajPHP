<?php
    class Savings
    {
        protected $accholder,$accnumber,$accbalance;
        public function statement()
        {
            echo "<br/>".$this->accholder." ".$this->accnumber." ".$this->accbalance."<br/>";
        }
    }

    class Debit extends Savings
    {
        public function __construct($a="",$b=0,$c=0)
        {
            $this->accholder=$a;$this->accnumber=$b;$this->accbalance=$c;
        }
        public function withdraw($desired)
        {
            if($desired<=$this->accbalance)
            {
                $this->accbalance-=$desired;
                echo "<br/>Amount ".$desired." withdrawn successfully<br/>";
            }
            else{
                echo "<br/>Amount ".$desired." hasn't withdrawn<br/>";
            }
        }
        public function credit($desired)
        {
            $this->accbalance+=$desired;
            echo "<br/>Amount ".$desired." has deposited to".$this->accholder."<br/>";
        }
    }

    class GPay extends Debit
    {
        public function transfer($receiver,$pay)
        {
            if($pay<=$this->accbalance)
            {
                $this->accbalance-=$pay;
                $receiver->accbalance+=$pay;
                echo "<br/>Amount ".$pay." transferred successfully to ". $receiver->accholder ." <br/>";
            }
            else{
                echo "<br/>Amount ".$pay." hasn't transferred<br/>";
            }
        }
    }

    $g1=new GPay("Razak Mohamed S",56787656734,2000.5);
    $g2=new GPay("Rasheedha R",8756789874,300.5);

    $g1->transfer($g2,1000);
    $g1->statement();
    $g2->statement();

    $g2->withdraw(500);
    $g2->statement();

?>